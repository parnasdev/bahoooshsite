<?php

namespace App\Livewire\Forms\Panel;

use Livewire\Attributes\Rule;
use Livewire\Form;

class CommentForm extends Form
{
    #[Rule('required' , 'string' , 'max:10000')]
    public $body = '';
    #[Rule('required' , 'numeric' , 'min:1' , 'max:5')]
    public $rate = 5;
    public $commentable_type = '';
    public $commentable_id = 0;
    public $approved = 0;
    public $parent_id = null;

}
