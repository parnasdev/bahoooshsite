<?php

namespace App\Livewire\Panel\Utils;

use LivewireUI\Modal\ModalComponent;

class EditPopup extends ModalComponent
{
    public $file = [
        'url' => null,
        'title' => null,
        'alt' => null,
        'type' => null,
    ];

    public $index = null;

    public $type = '1';

    protected $listeners = ['getData'];

    public function render()
    {
        return view('livewire.panel.utils.edit-popup');
    }

    public function submit()
    {
        $this->dispatch('changeFile' , file: $this->file);
        $this->closeModal();
    }

    public static function modalMaxWidthClass(): string
    {
        return 'w-25';
    }
}
