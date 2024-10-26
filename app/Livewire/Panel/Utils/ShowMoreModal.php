<?php

namespace App\Livewire\Panel\Utils;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ShowMoreModal extends ModalComponent
{

    public array $data = [];

    public array $item = [];

    public function render()
    {
        return view('livewire.panel.utils.show-more-modal');
    }
}
