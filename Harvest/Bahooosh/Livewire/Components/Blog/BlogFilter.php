<?php

namespace Harvest\Bahooosh\Livewire\Components\Blog;

use App\Enums\PostType;
use App\Livewire\ComponentBuilder;
use App\Models\Category;
use App\Models\Post;
use Harvest\Core\Scopes\PostTypeScope;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class BlogFilter extends ComponentBuilder
{
    use WithPagination;

    public $paginationTheme = 'bahooosh';

    #[Url]
    public string|null $category = null;

    #[Url]
    public string $search = '';

    public function render()
    {
        $posts = Post::query()->withTotalVisitCount()->latest()
            ->isPublish()
            ->when(!empty($this->category), function ($query) {
                $query->whereHas('categories', function ($q) {
                    $q->where('categories.slug', $this->category);
                });
            });

        if (!empty($this->search)) {
            $constraints = $posts;
            $posts = Post::search($this->search)->constrain($constraints);
        }

        $posts = $posts->paginate(15);

        $categories = Category::query()->where('post_type' , PostType::POST)->limit(5)->get();
        return view('bahooosh::livewire.components.blog.blog-filter', compact('posts' , 'categories'));
    }

    public function updated($name)
    {
        if ($name == 'search' || $name == 'category') {
            $this->js('($el.closest("body") || document.querySelector("body")).scrollIntoView()');
        }
    }
}
