<?php

namespace App\Livewire\Panel\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use LivewireUI\Modal\ModalComponent;

class UserChangePassword extends ModalComponent
{

    protected $listeners = ['getData'];

    public $password = '';

    public User $user;

    public function mount(User $inComingUser)
    {
        $this->user = $inComingUser;
    }

    public function rules() {
        return [
            'password' => ['required' , Password::min(8)]
        ];
    }

    public function render()
    {
        return view('livewire.tenant.panel.users.user-change-password');
    }

    public function getData(User $user)
    {
        $this->user = $user;
    }

    public static function modalMaxWidthClass(): string
    {
        return 'w-25';
    }

    public function submit() {
        $this->validate();

        $this->user->update([
            'password' => Hash::make($this->password)
        ]);

        session()->flash('message' , ['title' =>  'رمزعبور کاربر با موفقیت انجام شد.' , 'icon' => 'success']);

        $this->closeModal();
    }

}
