<?php

namespace Harvest\Bahooosh\Livewire\Components\General;

use App\Livewire\ComponentBuilder;

class Hero2Section extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'class' => '',
                'title' => '',
                'subtitle' => '',
                'btn_text' => '',
                'btn_link' => '',
                'image_url' => '',
                'btn_type' => 1,
                'show_border' => true,
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.general.hero2-section');
    }
}
