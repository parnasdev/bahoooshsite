<?php

namespace Harvest\Bahooosh\Livewire\Components\Layouts;

use App\Livewire\ComponentBuilder;
use App\Models\Block;


class FooterSection extends ComponentBuilder
{

    public function render()
    {
        return view('bahooosh::livewire.components.layouts.footer-section');
    }
}
