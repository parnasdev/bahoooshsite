<?php

namespace Harvest\Bahooosh\Livewire\Components\Banner;

use App\Livewire\ComponentBuilder;

class BannerSlider extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'banners' => [],
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.banner.banner-slider');
    }

    public function addItem()
    {

        $this->blockForm->data['banners'][] = [
            'image_url' => '',
            'alt' => '',
            'link' => '',
        ];
    }

    public function deleteItem($index)
    {
        unset($this->blockForm->data['banners'][$index]);

        $this->blockForm->data['banners'] = array_values($this->blockForm->data['banners']);
    }
}
