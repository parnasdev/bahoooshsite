<?php

namespace Harvest\Bahooosh\Livewire\Components\Blog;

use App\Livewire\ComponentBuilder;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Log;


class BlogsSection extends ComponentBuilder
{
    public $oldSelected;

    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'subtitle' => '',
                'btn_text' => '',
                'btn_link' => '',
                'fetch_type' => 'A',
                'post_ids' => [],
                'category_ids' => [],
            ];
        }

        if ($this->is_edit) {
            $this->oldSelected = $this->blockForm->data['fetch_type'] == 'M' ? $this->getOldSelectedPost() : ($this->blockForm->data['fetch_type'] == 'C' ? $this->getOldSelectedCategory() : null);

            Log::info('old selected' , $this->oldSelected);
        }
    }

    public function render()
    {
        $posts = Post::query()->when($this->block->data['fetch_type'] == 'A', function ($query) {
            $query->latest();
        })->when($this->block->data['fetch_type'] == 'M', function ($query) {
            $query->whereIn('id', $this->block->data['post_ids']);
        })->when($this->block->data['fetch_type'] == 'C', function ($query) {
            $query->whereHas('categories', fn($q) => $q->whereIn('id' , $this->block->data['category_ids']));
        })->limit(3)->get();

        return view('bahooosh::livewire.components.blog.blogs-section' , compact('posts'));
    }

    public function getOldSelectedPost() : array
    {
        return Post::query()->whereIn('id', $this->blockForm->data['post_ids'])->get()
            ->sortBy(function ($post) {
                return array_search($post->getKey(), $this->blockForm->data['post_ids']);
            })->map(function ($post) {
                return [
                    'id' => $post->getKey(),
                    'text' => $post->title,
                ];
            })->toArray();
    }

    public function getOldSelectedCategory() : array
    {
        return Category::query()->whereIn('id', $this->blockForm->data['category_ids'])->get()
            ->sortBy(function ($category) {
                return array_search($category->getKey(), $this->blockForm->data['category_ids']);
            })->map(function ($category) {
                return [
                    'id' => $category->getKey(),
                    'text' => $category->name,
                ];
            })->toArray();
    }
}
