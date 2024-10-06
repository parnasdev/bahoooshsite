<?php

namespace App\Traits;

use Livewire\Attributes\On;

trait WithPageBuilder
{
    #[On('')]
    public function updateComponentBuilder($componentSetting = null){
        if (!empty($componentSetting)) {
            $index = $componentSetting['index'];
            unset($componentSetting['index']);
            $component = $this->components[$index];
            $this->components = collect($this->components)->put($index, array_merge($component , $componentSetting))->toArray();
            $this->post->options = array_merge($this->post->options ?? [], ['components' => $this->components]);
        }
    }
}
