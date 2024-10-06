<?php

namespace App\Livewire\Panel\Links;

use App\Enums\LinkType;
use App\Livewire\Forms\Panel\PanelLinkForm;
use App\Models\Category;
use App\Models\Link;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
#[Layout('components.layouts.panel')]
class LinkEdit extends Component
{
    // public Link $link;
    #[Url]
    public $link_type = LinkType::HEADER_DESKTOP->value;

    #[Title('منو سایت')]
    #[On('updateLinks')]
    public function render()
    {
        // dd($this->links[0]);
        $categories = Category::query()->get();
        $link_types = collect(LinkType::cases())->pluck('value' , 'value');
        $links = Link::query()->whereNull('parent_id')->where('type' , $this->link_type)
            ->orderBy('order_item')
            ->get();
        return view('livewire.panel.links.link-edit' , compact('categories' , 'links' , 'link_types'));
    }
}
