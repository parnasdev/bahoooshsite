<?php

namespace App\Livewire\Panel\Setting;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout('components.layouts.panel')]
class SettingPage extends Component
{

    #[Url]
    public string $tab = 'general';


    public function mount()
    {
    }

    #[Title('تنظیمات اصلی')]
    public function render()
    {
        return view('livewire.panel.setting.setting-page');
    }


}
