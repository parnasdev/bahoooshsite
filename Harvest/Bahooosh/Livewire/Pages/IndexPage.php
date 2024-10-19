<?php

namespace Harvest\Bahooosh\Livewire\Pages;

use App\Enums\BlockCategory;
use App\Enums\PageType;
use App\Models\Block;
use App\Models\Page;
use Harvest\Bahooosh\Traits\LoadPage;
use Illuminate\Support\Collection;
use Livewire\Component;

class IndexPage extends Component
{
    use LoadPage;

    public function pageRoute(): string
    {
        return '/';
    }

    public function render()
    {
        return view('bahooosh::livewire.pages.index-page');
    }
}
