<?php

namespace App\Livewire\Panel\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('components.layouts.panel')]
class Login extends Component
{
    public $username = '';
    public $password = '';
    public $remember = false;


    public $token = '';

    protected $queryString = ['token' => ['except' => '']];

    public function rules()
    {
        return [
            'username' => ['required'],
            'password' => ['required'],
        ];
    }

    #[Title('ورود به پنل')]
    public function render()
    {
        return view('livewire.panel.auth.login');
    }

    public function submit()
    {
        $this->validate();

        if (!auth()->attempt(['username' => $this->username , 'password' => $this->password],$this->remember)) {
            $this->addError('username' , trans('auth.failed'));
            return false;
        }

        session()->regenerate();

        user()->update([
           'last_login_at' => now()
        ]);

        return redirect(route('panel.index'));
    }
}
