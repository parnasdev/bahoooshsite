<?php

namespace Harvest\Bahooosh\Livewire\Components\Layouts;

use App\Livewire\ComponentBuilder;
use App\Models\Block;

class HeaderSection extends ComponentBuilder
{

    public function render()
    {
        return view('bahooosh::livewire.components.layouts.header-section');
    }
}
