<?php

namespace App\Livewire\Forms\Panel;

use App\Enums\LinkStatus;
use App\Enums\LinkType;
use App\Models\Link;
use Illuminate\Validation\Rules\Enum;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PanelLinkForm extends Form
{

    public $parent_id;
    public $title;
    public $icon;
    public $href;
    public $is_link;
    public $mega_menu;
    public $type;
    public $status;
    public $order_item;

    public function rules()
    {
        return [
            'parent_id' => ['nullable' , \Illuminate\Validation\Rule::exists('links' , 'id')],
            'title' => ['required' , 'string' , 'max:170'],
            'icon' => ['nullable' , 'string' , 'max:50'],
            'href' => ['nullable' , 'string'],
            'is_link' => ['nullable' , 'boolean'],
            'mega_menu' => ['nullable' , 'boolean'],
            'status' => ['required' , new Enum(LinkStatus::class)],
        ];
    }
}
