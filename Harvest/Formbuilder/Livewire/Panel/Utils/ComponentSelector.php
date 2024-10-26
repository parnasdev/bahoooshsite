<?php

namespace Harvest\Formbuilder\Livewire\Panel\Utils;

use App\Traits\LoadTheme;
use Harvest\Formbuilder\Enums\ComponentType;
use Harvest\Formbuilder\Models\FormInput;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ComponentSelector extends ModalComponent
{
    use LoadTheme;

    public string $q = '';

    public int $index = 0;

    public array $components = [];

    public string $formId = '';

    public int $inputId = 0;

    public function mount()
    {
        if (empty($this->formId)) {
            $this->dispatch('toast-message', message: "لطفا نام فرم خود را پر کنید", icon: 'danger');
            $this->closeModal();
        }

        $this->components = collect(config('formbuilder.inputs'))->merge([
            [
                'name' => 'bahooosh::components.general.column-section',
                'title' => 'ستون ها',
                'data' => [],
                'type' => 3,
                'category' => 'general',
            ]
        ])->toArray();
    }

    public function render()
    {
        return view('formbuilder::livewire.panel.utils.component-selector');
    }

    public function addComponent($component)
    {
        $item = FormInput::query()->where('form_id' , $this->formId)->select('id')->get()->count() + 1;

        $input = FormInput::query()->create([
            'parent_id' => empty($this->inputId) ? null : $this->inputId,
            'form_id' => $this->formId,
            'component_name' => $component['name'],
            'component_type' => $component['type'],
            'data' => $component['data'],
            'input_label' => $component['title'],
            'input_name' => 'fields_' . $item,
            'input_class' => '',
            'data_type' => null,
            'data_options' => [],
            'required' => false,
            'unique' => false,
            'extra_rule' => false,
            'order_item' => $item,
        ]);

        if ($component['type'] != 3) {
            $field = [
                'id' => $input->id,
                'name' => 'fields_' . $item,
                'type' => strtolower(ComponentType::from($component['type'])->name),
            ];
        }


        $this->dispatch('updateInputs' , field: $field ?? null);
        $this->closeModal();
    }

    public static function modalMaxWidthClass(): string
    {
        return 'w-60';
    }
}
