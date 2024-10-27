<?php

namespace Harvest\Bahooosh\Livewire\Components\Layouts;

use App\Livewire\ComponentBuilder;
use Livewire\Component;

class LandingFooter extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'footer_title' => '',
                'licences' => [],
                'links' => [],
                'copyright_year' => '',
                'copyright_text' => '',
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.layouts.landing-footer');
    }

    public function addLicence()
    {
        $this->blockForm->data['licences'][] = [
            'code' => '',
        ];
    }

    public function deleteLicence($index)
    {
        unset($this->blockForm->data['licences'][$index]);

        $this->blockForm->data['licences'] = array_values($this->blockForm->data['licences']);
    }

    public function addLink()
    {
        $this->blockForm->data['links'][] = [
            'title' => '',
            'link' => '',
        ];
    }

    public function deleteLink($index)
    {
        unset($this->blockForm->data['links'][$index]);

        $this->blockForm->data['links'] = array_values($this->blockForm->data['links']);
    }
}
