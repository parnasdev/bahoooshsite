<?php

namespace Harvest\Bahooosh\Livewire\Components\General;

use App\Livewire\ComponentBuilder;
use Livewire\Component;

class TimerSection extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'subtitle' => '',
                'btn_text' => '',
                'btn_link' => '',
                'count_down_date' => '',
                'image_url' => '',
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.general.timer-section');
    }
}
