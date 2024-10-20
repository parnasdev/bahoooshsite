<?php

namespace Harvest\Bahooosh\Livewire\Components\Faq;

use App\Livewire\ComponentBuilder;

class Faq2Section extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'faqs' => [],
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.faq.faq2-section');
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
