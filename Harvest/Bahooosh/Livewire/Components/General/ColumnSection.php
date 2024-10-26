<?php

namespace Harvest\Bahooosh\Livewire\Components\General;

use App\Livewire\ComponentBuilder;

class ColumnSection extends ComponentBuilder
{
    public function render()
    {
        if (!empty($this->block)) {
            $blocks = $this->block->children()->orderBy('order_item')->get();
        }

        if (!empty($this->input)) {
            $blocks = $this->input->children()->orderBy('order_item')->get();
        }

        return view('bahooosh::livewire.components.general.column-section' , [
            'blocks' => $blocks ?? collect(),
        ]);
    }
}
