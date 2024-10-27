<?php

namespace Harvest\Bahooosh\Livewire\Pages;

use App\Enums\CategoryType;
use App\Models\Post;
use Harvest\Bahooosh\Traits\LoadPage;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class PostShow extends Component
{
    use LoadPage;

    public Post $post;

    public string $categories;

    public array $tags;

    public array | null $banner = [];

    public function mount() : void
    {
        $this->post->visit()->dailyIntervals()->withIp();
        $categories = Cache::flexible('post_show_categories' , [5 , 10] , function () {
            return $this->post->categories()->get();
        });
        $this->categories = $categories->where('cat_type' , CategoryType::CATEGORY)->pluck('name')->join(',');
        $this->tags = $categories->where('cat_type' , CategoryType::TAG)->map(fn ($tag) => ['name' => $tag->name , 'path' => $tag->path()])->toArray();

        $this->banner = getValue('banner_info');
    }

    public function render()
    {
        return view('bahooosh::livewire.pages.post-show');
    }

    public function getJustLoadLayout() : bool
    {
        return true;
    }
}
