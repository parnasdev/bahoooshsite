<?php

namespace Harvest\Bahooosh\Livewire\Components\General;

use App\Livewire\ComponentBuilder;
use Livewire\Component;

class SingleImage extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'image_url' => '',
                'alt' => ''
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.general.single-image');
    }
}
