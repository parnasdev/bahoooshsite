<?php

namespace Harvest\Formbuilder\Livewire\Forms\Panel;


use Livewire\Form;

class FormInputForm extends Form
{
    public $form_id = null;
    public $parent_id = null;
    public $component_name;
    public $component_type;

    public $input_label;
    public $input_name;
    public $input_class;
    public $data_type;

    public $data;

    public $data_options = [];

    public $required = false;

    public $unique = false;
    public $extra_rule = false;

    public $order_item;


}
