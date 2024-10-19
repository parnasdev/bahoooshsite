<?php

namespace Harvest\Bahooosh\Livewire\Thumbnails;

use App\Models\Post;
use Livewire\Component;

class BlogThumbnail extends Component
{
    public Post $post;

    public function render()
    {
        return view('bahooosh::livewire.thumbnails.blog-thumbnail');
    }
}
