<?php

namespace Harvest\Formbuilder\Livewire\Panel;

use App\Livewire\TableComponent;
use Harvest\Formbuilder\Models\Form;
use Harvest\Formbuilder\Models\Inbox;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.panel')]
class FormInbox extends TableComponent
{

    public Form $form;

    public function mount($id)
    {
        $this->form = Form::query()->findOrFail($id);


    }

    public function render()
    {
        Inbox::setDatabaseConnection($this->form->code);
        $inboxes = Inbox::query()->latest()->paginate($this->query['perPage'] ?? 15);
        return view('formbuilder::livewire.panel.form-inbox', compact('inboxes'))
            ->title("صندق ورودی فرم {$this->form->name}");
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [];
    }

    public function links(): array
    {
        return [];
    }

    public function columns(): array
    {
        $this->column
            ->addColumn('component', '', 'id', 'inputs.panel.checkbox', 'flex-5 m-flex-15', wireModel: 'selected')
            ->addColumn('text', 'شناسه', 'id', '', 'flex-5 m-flex-22');

        $fieldIds = collect($this->form->fields['data'])->where('type', '<>', 'text')->pluck('id')->toArray();
        $items = collect($this->form->fields['data'])->pluck('id')->toArray();

        $inputs = $this->form->formInputs()->whereIn('id', $fieldIds)->get();

        foreach ($inputs as $input) {
            $this->column
                ->addColumn('text', $input->input_label, $input->input_name, '', 'flex-20 m-flex-22');
        }

        $this->column
            ->addColumn('select-component', 'وضعیت', 'viewed', 'inputs.panel.table-select', 'flex-13 m-flex-48', eventName: 'updateViewed', options: [0 => 'خوانده نشده', 1 => 'خوانده شده'])
            ->addColumn('text', 'تاریخ ایجاد', fn(Inbox $inbox) => jdate($inbox->created_at)->format('Y-m-d H:i'), '', 'flex-20 m-flex-70')
            ->addColumn('component', 'عملیات', '', 'actions.panel.action-buttons', 'sticky-table flex-16 m-flex-45', actions: [
                array('type' => 'show_more', 'route' => '#4', 'data' => fn(Inbox $inbox) => $inbox->toArray(), 'item' => $this->form->formInputs()->whereIn('id', $items)->get()->toArray(), 'can' => ''),
                array('type' => 'delete', 'route' => '#4', 'can' => 'forms.delete'),
            ]);


        return $this->column->toArray();
    }

    #[On('delete')]
    public function destroy($id, $type = 'message'): void
    {
        if ($type == 'message') {
            $this->dispatch('deleteMessage', id: $id, eventName: 'delete');
        } else {
           $this->deleteInbox($id);
        }
    }

    #[On('restore')] public function restore($id, $type = 'message'): void
    {
        // TODO: Implement restore() method.
    }

    #[On('replicate')] public function replicate($id, $type = 'message'): void
    {
        // TODO: Implement replicate() method.
    }

    #[On('runAction')] public function runAction($data): void
    {
        // TODO: Implement runAction() method.
    }

    #[On('updateViewed')]
    public function updateViewed($id, $value): void
    {
        $inbox = $this->getInbox($id);
        $inbox->update([
            'viewed' => $value
        ]);

        $this->dispatch('toast-message', message: "وضعیت تغییر پیدا کرد.", icon: "success");
    }

    public function getInbox($id): Inbox|null
    {
        Inbox::setDatabaseConnection($this->form->code);
        return Inbox::query()->findOrFail($id);
    }

    public function deleteInbox($id) : void
    {
        Inbox::setDatabaseConnection($this->form->code);
        Inbox::query()->findOrFail($id)->delete();
    }
}
