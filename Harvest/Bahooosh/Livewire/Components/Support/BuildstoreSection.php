<?php

namespace Harvest\Bahooosh\Livewire\Components\Support;

use App\Livewire\ComponentBuilder;

class BuildstoreSection extends ComponentBuilder
{

    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'services' => [],
                'box_title' => '',
                'box_btn_text' => '',
                'box_btn_link' => '',
            ];
        }
    }


    public function render()
    {
        return view('bahooosh::livewire.components.support.buildstore-section');
    }

    public function addItem()
    {
        if (count($this->blockForm->data['services']) == 4) {
            return;
        }

        $this->blockForm->data['services'][] = [
            'image_url' => '',
            'title' => '',
            'description' => '',
        ];
    }

    public function deleteItem($index)
    {
        unset($this->blockForm->data['services'][$index]);

        $this->blockForm->data['services'] = array_values($this->blockForm->data['services']);
    }
}
