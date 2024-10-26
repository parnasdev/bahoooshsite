<?php

namespace Harvest\Formbuilder\Livewire\Forms\Panel;

use App\ValueObjects\AreaValueObject;
use Harvest\Formbuilder\Models\FormInput;
use Harvest\Formbuilder\Models\Inbox;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Form;
use Harvest\Formbuilder\Models\Form as FormModel;

class FormBuilderForm extends Form
{
    public FormModel $form;
    public string $name = '';
    public string $code = '';
    public string $btn_text = '';
    public bool $is_payable = false;

    public array $config = [
        'driver' => 'zaripal',
        'merchantId' => '',
        'description' => 'پرداخت فرم',
    ];

    public array $fields = [
        'data' => [],
        'new_fields' => [],
        'migration' => false,
    ];

    public array $formInputs = [];

    public int $price = 0;
    public int $sell_price = 0;

    public array $del_inputs = [];

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:191'],
            'is_payable' => ['required', 'boolean'],
            'config' => Rule::when($this->is_payable, ['required', 'array']),
            'config.driver' => Rule::when($this->is_payable, ['required', 'string', 'in:zarinpal,zibal']),
            'config.merchantId' => Rule::when($this->is_payable, ['required', 'string']),
            'config.description' => Rule::when($this->is_payable, ['required', 'string', 'max:1000']),
            'price' => Rule::when($this->is_payable, ['required', 'numeric']),
            'sell_price' => Rule::when($this->is_payable, ['required', 'numeric', 'max:' . $this->price]),
        ];
    }

    public function setForm($formId)
    {
        $this->form = FormModel::query()->findOrFail($formId);

        $this->name = $this->form->name;
        $this->code = $this->form->code;
        $this->btn_text = $this->form->btn_text ?? '';
        $this->is_payable = $this->form->is_payable;
        $this->price = $this->form->price;
        $this->sell_price = $this->form->sell_price;
        $this->config = $this->form->config;
        $this->fields = $this->form->fields ?? [];

        $this->formInputs = $this->form->formInputs()->whereNull('parent_id')->with('children' , fn($q) => $q->orderBy('order_item'))->orderBy('order_item')->get()->toArray();
    }

    public function generateUniqueCode(): void
    {
        do {
            $code = strtolower(Str::random(5));
        } while (FormModel::where('code', $code)->exists());

        $this->code = $code;
    }

    public function store(): void
    {
        $this->migrateFormDatabase();

        $this->fields['migration'] = true;

        $this->form->update($this->except('form', 'formInputs'));

    }

    public function quick(): int
    {
        if (empty($this->form)) {
            $this->form = FormModel::query()->create($this->except('form', 'formInputs'));

            $inboxPath = config('formbuilder.inbox.storage') . $this->code . '.sqlite';

            File::put($inboxPath, '');
        } else {
            $this->form->update($this->except('form', 'formInputs'));
        }


        return $this->form->id;
    }

    public function update(): void
    {
        $this->form->update($this->except('form', 'formInputs'));


        if ($this->form->fields['migration']) {
            $this->migrateUpdateFormDatabase();
        } else {
            $this->migrateFormDatabase();
        }
    }

    public function checkInboxExist($code): bool
    {
        Inbox::setDatabaseConnection($code);
        try {
            return Inbox::query()->exists();

        } catch (\Throwable $th) {
            return false;
        }
    }

    public function migrateFormDatabase(): void
    {
        Inbox::setDatabaseConnection($this->code);
        Schema::connection('sqlite')->create('inboxes', function (Blueprint $table) {
            $table->id();
            foreach (collect($this->fields['data'])->filter(fn($item) => !empty($item))->toArray() as $field) {
                match ($field['type']) {
                    'string' => $table->string($field['name'])->nullable(),
                    'integer' => $table->integer($field['name'])->nullable(),
                    'text' => $table->text($field['name'])->nullable(),
                };
            }
            $table->boolean('viewed')->default(false);
            $table->timestamps();
        });
    }
    public function migrateUpdateFormDatabase(): void
    {
        Inbox::setDatabaseConnection($this->code);


        Schema::connection('sqlite')->table('inboxes', function (Blueprint $table) {
            foreach (collect($this->fields['new_fields'])->filter(fn($item) => !empty($item))->toArray() as $field) {
                match ($field['type']) {
                    'string' => $table->string($field['name'])->nullable(),
                    'integer' => $table->integer($field['name'])->nullable(),
                    'text' => $table->text($field['name'])->nullable(),
                };
            }

            if (!empty($this->del_inputs)) {
                $table->dropColumn($this->del_inputs);
            }
        });

        $this->fields['data'] = collect($this->fields['data'])->push(...$this->fields['new_fields']);
        $this->fields['new_fields'] = [];

        $this->quick();

    }

}
