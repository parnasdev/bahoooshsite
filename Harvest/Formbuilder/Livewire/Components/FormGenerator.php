<?php

namespace Harvest\Formbuilder\Livewire\Components;

use Harvest\Formbuilder\Enums\ComponentType;
use Harvest\Formbuilder\Models\Form;
use Harvest\Formbuilder\Models\FormInput;
use Harvest\Formbuilder\Models\Inbox;
use Illuminate\Validation\Rule;
use Livewire\Component;

class FormGenerator extends Component
{
    public string $code = '';

    public string $class = '';

    public Form $form;

    public array $inbox = [];

    public array $formRules = [];
    public array $formMessage = [];

    public function mount()
    {
        $this->form = Form::query()->where('code', $this->code)->first();

       $this->generateForm();
    }

    public function render()
    {
        $inputs = $this->form->formInputs->whereNull('parent_id');
        return view('formbuilder::livewire.components.form-generator' , compact('inputs'));
    }

    private function generateRules(FormInput $input) : array
    {
        $rules = [];
        $messages = [];
        if ($input->required) {
            $rules[] = 'required';
            $messages['inbox.' . $input->input_name . '.required'] = "فیلد {$input->input_label} الزامی است";
        } else {
            $rules[] = 'nullable';
        }

        if ($input->unique) {
            $rules[] = Rule::unique('inboxes' , $input->input_name);
            $messages['inbox.' . $input->input_name . '.unique'] = "فیلد {$input->input_label} قبلا ثبت شده است";
        }

//        if (!empty($input->extra_rule)) {
//            $rules[] = $input->extra_rule;
//        }

        if ($input->component_type == ComponentType::TEXT) {
            $rules[] = 'max:10000';
            $messages['inbox.' . $input->input_name . '.max'] = "فیلد {$input->input_label} نباید بیشتر از ۱۰۰۰ تا حروف باشد";
        }

        return ['rules' => $rules , 'messages' => $messages];
    }

    public function submit() : void
    {
        Inbox::setDatabaseConnection($this->code);

        $this->validate($this->formRules , $this->formMessage);

        Inbox::query()->create($this->inbox);

        $this->dispatch('toastMessage' , message: "اطلاعات شما با موفقیت ثبت شد." , icon: 'success');
        $this->generateForm();
    }

    private function generateForm() : void
    {
        foreach ($this->form->formInputs->where('component_type' , '!=' , ComponentType::BUILDER) as $item) {
            $this->inbox[$item->input_name] = '';
            ['rules' => $rules, 'messages' => $messages] = $this->generateRules($item);
            $this->formRules['inbox.' . $item->input_name] = $rules;
            if (!empty($messages)) {
                $this->formMessage = array_merge($this->formMessage, $messages);
            }
        }
    }
}
