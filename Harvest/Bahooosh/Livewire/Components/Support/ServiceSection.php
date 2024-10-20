<?php

namespace Harvest\Bahooosh\Livewire\Components\Support;

use App\Livewire\ComponentBuilder;

class ServiceSection extends ComponentBuilder
{

    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'class' => '',
                'title' => '',
                'icon' => '',
                'column' => 4
            ];
        }
    }

    public function render()
    {
        $blocks = $this->block->children()->orderBy('order_item')->get();
        return view('bahooosh::livewire.components.support.service-section' , compact('blocks'));
    }
}
