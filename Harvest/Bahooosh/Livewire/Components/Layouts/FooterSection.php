<?php

namespace Harvest\Bahooosh\Livewire\Components\Layouts;

use App\Enums\LinkStatus;
use App\Enums\LinkType;
use App\Livewire\ComponentBuilder;
use App\Models\Block;
use App\Models\Link;


class FooterSection extends ComponentBuilder
{

    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'footer_logo' => '',
                'address' => '',
                'tel' => '',
                'working_hours' => '',
                'email' => '',
                'footer_title' => '',
                'footer_text' => '',
                'social_title' => '',
                'social_links' => [],
                'licences' => [],
                'copyright_year' => '',
                'copyright_text' => '',
            ];
        }
    }

    public function render()
    {
        $links = Link::query()->whereNull('parent_id')->where('type' , LinkType::FOOTER)->orderBy('order_item')
            ->where('status' , LinkStatus::SHOW)
            ->with('children' , fn($q) => $q->orderBy('order_item')->where('status' , LinkStatus::SHOW))->get();

        return view('bahooosh::livewire.components.layouts.footer-section' , compact('links'));
    }

    public function addSocialLink()
    {
        $this->blockForm->data['social_links'][] = [
            'image_url' => '',
            'username' => '',
            'link' => '',
            'show_username' => true,
        ];
    }

    public function deleteSocialLink($index)
    {
        unset($this->blockForm->data['social_links'][$index]);

        $this->blockForm->data['social_links'] = array_values($this->blockForm->data['social_links']);
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
}
