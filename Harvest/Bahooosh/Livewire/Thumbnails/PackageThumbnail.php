<?php

namespace Harvest\Bahooosh\Livewire\Thumbnails;

use App\Livewire\ComponentBuilder;

class PackageThumbnail extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'subtitle_type' => 1,
                'subtitle' => 0,
                'subtitle_url' => '',
                'description' => '',
                'image_url' => '',
            ];
        }
    }
    public function render()
    {
        return view('bahooosh::livewire.thumbnails.package-thumbnail');
    }
}
