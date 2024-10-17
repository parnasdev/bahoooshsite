<?php

namespace Harvest\Bahooosh\Livewire\Components\Layouts;

use App\Livewire\ComponentBuilder;
use App\Models\Block;
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
        return view('bahooosh::livewire.components.layouts.header-section');
    }

    #[On('updateBlock')]
    public function saved()
    {
        $this->dispatch('toast-message', message: "تغییرات اعمال شد." , icon: "success");
    }
}
