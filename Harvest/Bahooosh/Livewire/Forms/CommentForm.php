<?php

namespace Harvest\Bahooosh\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CommentForm extends Form
{
    #[Validate('nullable')]
    #[Validate('exists:comments,id')]
    public int | null $parent_id = null;
    public int | null $user_id = null;
    #[Validate('required_if:user_id,null' , message: "فیلد نام الزامی است")]
    public string | null $name = null;
    #[Validate('nullable')]
    #[Validate('email')]
    public string | null $email = null;
    #[Validate('required')]
    #[Validate('string')]
    #[Validate('max:10000')]
    public string $body = '';
    public int $approved = 0;
    public int $commentable_id = 0;
    public string $commentable_type = '';

    #[Validate('required')]
    #[Validate('numeric')]
    #[Validate('min:1')]
    #[Validate('max:5')]
    public int $rate = 0;
}
