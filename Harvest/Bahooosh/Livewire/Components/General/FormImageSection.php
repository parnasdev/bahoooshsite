<?php

namespace Harvest\Bahooosh\Livewire\Components\General;

use App\Livewire\ComponentBuilder;
use Livewire\Component;

class FormImageSection extends ComponentBuilder
{

    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'code' => '',
                'image_url' => '',
                'alt' => '',
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.general.form-image-section');
    }
}
