<?php

namespace Harvest\Bahooosh\Livewire\Components\General;

use App\Livewire\ComponentBuilder;

class HeroSection extends ComponentBuilder
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
                'spec' => '',
                'video_url' => '',
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.general.hero-section');
    }
}
