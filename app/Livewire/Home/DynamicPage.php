<?php

namespace App\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class DynamicPage extends Component
{
    public Post $post;

    public function mount()
    {
        $url = request()->path();
            $this->post =  Post::query()->justPostType('page')->isPublish()->whereSlug('/')->firstOrFail();

    }

    public function render()
    {
        return view('livewire.home.dynamic-page');
    }
}
