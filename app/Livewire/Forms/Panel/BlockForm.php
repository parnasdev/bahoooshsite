<?php

namespace App\Livewire\Forms\Panel;

use App\ValueObjects\AreaValueObject;
use Livewire\Form;

class BlockForm extends Form
{
    public $post_id;

    public $parent_id = null;
    public $component_name;
    public $title;

    public $show_desktop = true;
    public $show_tablet = true;
    public $show_mobile = true;
    public $is_livewire = false;

    public $data;

    public $category;

    public array $padding;

    public array $margin;
}
