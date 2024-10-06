<?php

namespace App\Livewire\Panel\Section;

use Livewire\Component;

class header extends Component
{
    public function render()
    {
        $currentTime = jdate()->getHour();
        match (true) {
            $currentTime >= 5 && $currentTime < 12 => $greeting = 'صبح بخیر',
            $currentTime >= 12 && $currentTime < 15 => $greeting = 'ظهر بخیر',
            $currentTime >= 15 && $currentTime < 19 => $greeting = 'عصر بخیر',
            $currentTime >= 19 => $greeting = 'شب بخیر',
            default => $greeting = 'خوش آمدید'
        };

        return view('livewire.panel.section.header' , compact('greeting'));
    }
}
