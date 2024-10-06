<?php

namespace App\Livewire\Forms\Panel;

use App\Models\User;
use App\Rules\CheckHardDiskSize;
use Illuminate\Validation\Rule;
use Livewire\Form;

class PanelUserForm extends Form
{
    public ?User $user;

    public $name;
    public $family;
    public $role_id;
    public $phone;
    public $username;

    public function setUser($user){
        $this->user = User::query()->find($user);
        $this->name = $this->user->name;
        $this->family = $this->user->family;
        $this->role_id = $this->user->role_id;
        $this->phone = $this->user->phone;
        $this->username = $this->user->username;
    }

    public function rules()
    {
        return [
            'name' => ['nullable'],
            'family' => ['nullable'],
            'role_id' => ['required'],
            'phone' => [Rule::when($this->username == '' , 'required' , 'nullable') , Rule::unique('users' , 'phone')->withoutTrashed()->ignore($this->user->id)],
            'username' => [Rule::when($this->phone == '' ,'required' , 'nullable'), Rule::unique('users' , 'username')->withoutTrashed()->ignore($this->user->id)],
        ];
    }

    public function update()
    {
        $this->user->update(
            $this->all()
        );
    }
}
