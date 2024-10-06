<?php

namespace App\Livewire\Panel\Utils;

use App\Models\Block;
use Livewire\Attributes\On;
use LivewireUI\Modal\ModalComponent;

class ComponentSetting extends ModalComponent
{
    public $blockId;

    public Block $block;

    public function mount()
    {
        $this->block = Block::query()->find($this->blockId);
    }

    public function render()
    {
        return view('livewire.panel.utils.component-setting');
    }
}
