<?php

namespace App\Livewire;

use App\Livewire\Forms\Panel\BlockForm;
use App\Models\Block;
use Livewire\Component;

abstract class ComponentBuilder extends Component
{
    public ?Block $block;

    public BlockForm $blockForm;

    public bool $is_edit = false;

    public function mount()
    {
        $this->fillData();
    }

    public function fillData(): void
    {
        $this->blockForm->data = $this->block->data;
        $this->blockForm->parent_id = $this->block->parent_id;
        $this->blockForm->post_id = $this->block->post_id;
        $this->blockForm->title = $this->block->title;
        $this->blockForm->component_name = $this->block->component_name;
        $this->blockForm->is_livewire = $this->block->is_livewire;
        $this->blockForm->show_desktop = $this->block->show_desktop;
        $this->blockForm->show_tablet = $this->block->show_tablet;
        $this->blockForm->show_mobile = $this->block->show_mobile;
        $this->blockForm->padding = $this->block->padding;
        $this->blockForm->margin = $this->block->margin;
        $this->blockForm->category = $this->block->category;
    }

    public function submitData(): void
    {
        $this->block->update($this->blockForm->all());
        $this->dispatch('updateBlock');
        $this->dispatch('closeModal');
    }

}
