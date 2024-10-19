<?php

namespace Harvest\Bahooosh\Livewire\Components\Support;

use App\Livewire\ComponentBuilder;

class ContactSection extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'description' => '',
                'subtitle' => '',
                'link1_text' => '',
                'link1_url' => '',
                'link2_text' => '',
                'link2_url' => '',
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.support.contact-section');
    }
}
