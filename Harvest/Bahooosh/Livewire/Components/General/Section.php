<?php

namespace Harvest\Bahooosh\Livewire\Components\General;

use App\Livewire\ComponentBuilder;

class Section extends ComponentBuilder
{
    public function render()
    {
        $blocks = $this->block->children()->orderBy('order_item')->get();
        return view('bahooosh::livewire.components.general.section' ,  compact('blocks'));
    }
}
