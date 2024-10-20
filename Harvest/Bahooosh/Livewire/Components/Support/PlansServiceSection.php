<?php

namespace Harvest\Bahooosh\Livewire\Components\Support;

use App\Livewire\ComponentBuilder;
use Livewire\Component;

class PlansServiceSection extends ComponentBuilder
{

    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'icon' => '',
                'btn_text' => '',
                'btn_link' => '',
                'faqs' => [],
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.support.plans-service-section');
    }

    public function addItem()
    {

        $this->blockForm->data['faqs'][] = [
            'title' => '',
            'description' => '',
        ];
    }

    public function deleteItem($index)
    {
        unset($this->blockForm->data['faqs'][$index]);

        $this->blockForm->data['faqs'] = array_values($this->blockForm->data['faqs']);
    }
}
