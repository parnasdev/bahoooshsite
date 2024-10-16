<?php

namespace Harvest\Bahooosh\Livewire\Components\CustomerComment;

use App\Livewire\ComponentBuilder;

class CommentSection extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'comments' => [],
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.customer-comment.comment-section');
    }

    public function addItem()
    {

        $this->blockForm->data['comments'][] = [
            'image_url' => '',
            'title' => '',
            'referer_url' => '',
            'description' => '',
        ];
    }

    public function deleteItem($index)
    {
        unset($this->blockForm->data['comments'][$index]);

        $this->blockForm->data['comments'] = array_values($this->blockForm->data['comments']);
    }
}
