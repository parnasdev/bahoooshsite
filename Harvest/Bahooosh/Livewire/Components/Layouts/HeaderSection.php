<?php

namespace Harvest\Bahooosh\Livewire\Components\Layouts;

use App\Enums\LinkStatus;
use App\Enums\LinkType;
use App\Livewire\ComponentBuilder;
use App\Models\Block;
use App\Models\Link;
use Livewire\Attributes\On;

class HeaderSection extends ComponentBuilder
{
    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'support_text' => '',
                'support_tel' => '',
                'support_tel_link' => '',
                'btn_text' => '',
                'btn_link' => '',
            ];
        }
    }

    public function render()
    {
        $links_desktop = Link::query()->whereNull('parent_id')->where('type' , LinkType::HEADER_DESKTOP)->orderBy('order_item')
            ->where('status' , LinkStatus::SHOW)
            ->with('children' , fn($q) => $q->orderBy('order_item')->where('status' , LinkStatus::SHOW))->get();

        $links_mobile = Link::query()->whereNull('parent_id')->where('type' , LinkType::HEADER_MOBILE)->orderBy('order_item')
            ->where('status' , LinkStatus::SHOW)
            ->with('children' , fn($q) => $q->orderBy('order_item')->where('status' , LinkStatus::SHOW))->get();

        return view('bahooosh::livewire.components.layouts.header-section' , compact('links_mobile' , 'links_desktop'));
    }

    #[On('updateBlock')]
    public function saved()
    {
        $this->dispatch('toast-message', message: "تغییرات اعمال شد." , icon: "success");
    }
}
