<?php

namespace App\Livewire\Panel\PageBuilder;

use App\Models\Post;
use Livewire\Attributes\Url;
use Livewire\Component;

class PagePreview extends Component
{
    #[Url]
    public $data;
    #[Url]
    public $component;

    public function render()
    {
        return view('livewire.tenant.panel.page-builder.page-preview');
    }
}
