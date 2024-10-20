<?php

namespace Harvest\Bahooosh\Livewire\Thumbnails;

use App\Livewire\ComponentBuilder;
use Livewire\Component;

class ServiceBox extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'description' => '',
                'image_url' => '',
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.thumbnails.service-box');
    }
}
