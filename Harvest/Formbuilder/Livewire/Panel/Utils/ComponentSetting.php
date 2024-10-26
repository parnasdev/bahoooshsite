<?php

namespace Harvest\Formbuilder\Livewire\Panel\Utils;

use Harvest\Formbuilder\Enums\ComponentType;
use Harvest\Formbuilder\Livewire\Forms\Panel\FormInputForm;
use Harvest\Formbuilder\Models\FormInput;
use LivewireUI\Modal\ModalComponent;

class ComponentSetting extends ModalComponent
{
    public $inputId;

    public FormInput $input;

    public FormInputForm $form;

    public function mount()
    {
        $this->input = FormInput::query()->find($this->inputId);

        if ($this->input->component_type != ComponentType::BUILDER) {
            $this->form->form_id = $this->input->form_id;
            $this->form->parent_id = $this->input->parent_id;
            $this->form->component_name = $this->input->component_name;
            $this->form->component_type = $this->input->component_type;
            $this->form->data = $this->input->data;
            $this->form->input_label = $this->input->input_label;
            $this->form->input_name = $this->input->input_name;
            $this->form->input_class = $this->input->input_class;
            $this->form->data_type = $this->input->data_type;
            $this->form->data_options = $this->input->data_options;
            $this->form->required = $this->input->required;
            $this->form->unique = $this->input->unique;
            $this->form->extra_rule = $this->input->extra_rule;
            $this->form->order_item = $this->input->order_item;
        }
    }

    public function render()
    {
        return view('formbuilder::livewire.panel.utils.component-setting');
    }

    public function submit()
    {
        $this->input->update($this->form->all());

        $this->dispatch('updateInputs');
        $this->closeModal();
    }
}
