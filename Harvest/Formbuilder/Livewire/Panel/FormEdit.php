<?php

namespace Harvest\Formbuilder\Livewire\Panel;

use Harvest\Formbuilder\Livewire\Forms\Panel\FormBuilderForm;
use Harvest\Formbuilder\Models\FormInput;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout('components.layouts.panel')]
class FormEdit extends Component
{
    public FormBuilderForm $form;

    public string $formId = '';

    public function mount($id)
    {
        $this->form->setForm($id);

        $this->formId = $id;
    }

    #[Title('ویرایش فرم')]
    public function render()
    {
        return view('formbuilder::livewire.panel.form-edit');
    }

    public function updated($name)
    {
        if ($name == 'form.name') {
            $this->quickSave();
        }
    }

    #[On('updateInputs')]
    public function updateInput($field = null, $delField = null)
    {
        $this->form->formInputs = $this->form->form->formInputs()->whereNull('parent_id')->with('children', fn($q) => $q->orderBy('order_item'))->orderBy('order_item')->get()->toArray();

        if (!empty($field) && !$this->form->fields['migration']){
            $this->form->fields['data'][] = $field;
        } else {
            $this->form->fields['new_fields'][] = $field;
        }

        if (!empty($delField)) {

            if ($this->form->fields['migration']) {
                $item = collect($this->form->fields['data'])->where('id', $delField)->first();
                if (!empty($item)) {
                    $this->form->del_inputs[] = $item['name'];
                }
            }



            $index = collect($this->form->fields['data'])->search(function ($value) use ($delField) {
                return ($value['id'] ?? '') == $delField;
            });

            unset($this->form->fields['data'][$index]);

            $this->form->fields['data'] = array_values($this->form->fields['data']);

            $index = collect($this->form->fields['new_fields'])->search(function ($value) use ($delField) {
                return ($value['id'] ?? '') != $delField;
            });

            unset($this->form->fields['new_fields'][$index]);

            $this->form->fields['new_fields'] = array_values($this->form->fields['new_fields']);
        }

        if (!empty($field) || !empty($delField)) {
            $this->quickSave();
        }
    }

    public function quickSave(): void
    {
        $this->form->quick();
    }

    public function deleteComponent($id): void
    {
        FormInput::find($id)->delete();

        $this->dispatch('updateInputs', delField: $id);
    }

    public function submit()
    {
        $this->validate();

        $this->form->update();

        $this->dispatch('toast-message' , message: "فرم شما ایجاد شد." , icon: "success");

        $this->redirect(FormIndex::class , true);
    }
}
