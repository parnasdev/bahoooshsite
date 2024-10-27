<?php

namespace Harvest\Bahooosh\Livewire\Pages;

use App\Enums\BlockCategory;
use App\Enums\PageType;
use App\Models\Block;
use App\Models\Page;
use Harvest\Bahooosh\Traits\LoadPage;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPage extends Component
{
    use LoadPage;
    public function pageRoute(): string
    {
        $prefix = config('cms.prefix_route');
        $slug = request()->path();
        if (!empty($prefix)) {
            $slug = str_replace([$prefix , '/'], '', $slug);
        }
        return empty($slug) ? '/' : $slug;
    }

    public function render()
    {
        return view('bahooosh::livewire.pages.index-page');
    }
}
