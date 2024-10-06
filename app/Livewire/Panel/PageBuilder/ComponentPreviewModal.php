<?php

namespace App\Livewire\Panel\PageBuilder;

use App\Models\Post;
use LivewireUI\Modal\ModalComponent;

class ComponentPreviewModal extends ModalComponent
{

    public $component;

    public $data;

    public function render()
    {
        return view('livewire.tenant.panel.page-builder.component-preview-modal');
    }

    public static function modalMaxWidthClass(): string
    {
        return 'w-90';
    }
}
