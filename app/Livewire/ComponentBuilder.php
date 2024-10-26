<?php

namespace App\Livewire;

use App\Livewire\Forms\Panel\BlockForm;
use App\Models\Block;
use Harvest\Formbuilder\Models\FormInput;
use Livewire\Component;

abstract class ComponentBuilder extends Component
{
    public ?Block $block;

    public ?FormInput $input;

    public BlockForm $blockForm;

    public bool $is_edit = false;

    public function mount()
    {
        $this->fillData();
    }

    public function fillData(): void
    {
        if (!empty($this->block)) {
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

        if (!empty($this->input)) {
            $this->blockForm->data = $this->input->data;
            $this->blockForm->parent_id = $this->input->parent_id;
            $this->blockForm->post_id = $this->input->form_id;
            $this->blockForm->component_name = $this->input->component_name;
        }

    }

    public function submitData(): void
    {
        if (!empty($this->block)) {
            $this->block->update($this->blockForm->all());

            $this->dispatch('updateBlock');
        }

        if (!empty($this->input)) {
            $this->input->update([
                'parent_id' => $this->input->parent_id,
                'form_id' => $this->blockForm->post_id,
                'component_name' => $this->blockForm->component_name,
                'data' => $this->blockForm->data,
            ]);

            $this->dispatch('updateInputs');
        }

        $this->dispatch('closeModal');
    }

}
