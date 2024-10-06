<?php

namespace App\Livewire\Forms\Panel;

use App\Enums\CategoryType;
use App\Enums\PostStatus;
use App\Enums\PostType;
use App\Models\Post;
use Dflydev\DotAccessData\Data;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post;

    public $title;
    public $slug;
    public $description;
    public $body;
    public $pin;
    public $status = PostStatus::PUBLISHED->value;
    public $options = [];
    public $user_id;
    public $type;
    public $categoryIds = [];
    public $selectedTag = [];

    public function rules()
    {
        if (!empty($this->post)) {
            $rules = [
                'title' => ['required', 'string', 'max:100'],
                'slug' => ['required', 'string', Rule::unique('posts', 'slug')->withoutTrashed()->ignoreModel($this->post)],
                'description' => ['nullable', 'string', 'max:10000'],
                'body' => ['nullable', 'string'],
                'pin' => ['nullable', 'boolean'],
                'status' => ['required', new Enum(PostStatus::class)]
            ];
        } else {
            $rules = [
                'title' => ['required', 'string', 'max:100'],
                'slug' => ['required', 'string', Rule::unique('posts', 'slug')->withoutTrashed()],
                'description' => ['nullable', 'string', 'max:10000'],
                'body' => ['nullable', 'string'],
                'pin' => ['nullable', 'boolean'],
                'status' => ['required', new Enum(PostStatus::class)]
            ];
        }
        return $rules;
    }


    public function setPost($post)
    {
        $this->post = Post::query()->find($post);
        $this->title = $this->post->title;
        $this->slug = $this->post->slug;
        $this->description = $this->post->description;
        $this->body = $this->post->body;
        $this->pin = $this->post->pin;
        $this->status = $this->post->status;
        $this->user_id = $this->post->user_id;
        $this->type = $this->post->type;

        $this->options = $this->post->options;

        $this->categoryIds = $this->post->categories()->where([['cat_type', CategoryType::CATEGORY->value], ['post_type', PostType::POST->value]])->pluck('id')->toArray();
        $this->selectedTag = $this->post->categories()->where([['cat_type', CategoryType::TAG->value], ['post_type', PostType::POST->value]])->get()->toArray();

    }

    public function update()
    {
//        dd($this->except('post'));
        $this->post->update(
            $this->except('post')
        );
    }
}
