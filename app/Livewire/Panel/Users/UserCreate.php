<?php

namespace App\Livewire\Panel\Users;

use App\Models\Role;
use App\Models\User;
use App\Traits\WithFilesLivewire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('components.layouts.panel')]
class UserCreate extends Component
{
    use WithFilesLivewire;

    public array $user = [
        'name' => '',
        'family' => '',
        'role_id' => '',
        'phone' => '',
        'username' => '',
        'password' => '',
    ];

    public $size = 0;

    public function rules()
    {
        return [
            'user.name' => ['nullable'],
            'user.family' => ['nullable'],
            'user.role_id' => ['required'],
            'user.phone' => [Rule::when($this->user['username'] == '', 'required' , 'nullable') , Rule::unique('users' , 'phone')],
            'user.username' => [Rule::when($this->user['phone'] == '' ,'required' , 'nullable'), Rule::unique('users' , 'username')],
            'user.password' => ['required' , Password::min(8)],

        ];
    }

    public function mount()
    {
    }

    #[Title('ایجاد کاربر')]
    public function render()
    {
        $roles = Role::query()->pluck('label' , 'id')->toArray();

        return view('livewire.panel.users.user-create' , compact('roles'));
    }

    public function submit()
    {
        $this->validate();

        $user = new User(array_merge($this->user , ['password' => Hash::make($this->user['password'])]));

        $user->save();

        $this->syncFiles($this->files , $user);

        return redirect(route('panel.users.index'));
    }
}
