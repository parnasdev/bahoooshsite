<?php

namespace Harvest\Bahooosh\Livewire\Components\Support;

use App\Livewire\ComponentBuilder;

class CreatestoreSection extends ComponentBuilder
{

    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'steps' => [],
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.support.createstore-section');
    }

    public function addItem()
    {
        if (count($this->blockForm->data['steps']) == 6) {
            return;
        }

        $this->blockForm->data['steps'][] = [
            'image_url' => '',
            'title' => '',
            'description' => '',
        ];
    }

    public function deleteItem($index)
    {
        unset($this->blockForm->data['steps'][$index]);

        $this->blockForm->data['steps'] = array_values($this->blockForm->data['steps']);
    }
}
