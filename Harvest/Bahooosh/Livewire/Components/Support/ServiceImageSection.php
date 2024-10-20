<?php

namespace Harvest\Bahooosh\Livewire\Components\Support;

use App\Livewire\ComponentBuilder;
use Livewire\Component;

class ServiceImageSection extends ComponentBuilder
{
    public function render()
    {
        $blocks = $this->block->children()->orderBy('order_item')->get();
        return view('bahooosh::livewire.components.support.service-image-section', compact('blocks'));
    }
}
