<?php

namespace App\Livewire\Forms\Panel;

use App\Enums\CategoryType;
use App\Enums\PageType;
use App\Enums\PostStatus;
use App\Enums\PostType;
use App\Models\Page;
use App\Models\Post;
use Dflydev\DotAccessData\Data;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Livewire\Form;

class PageForm extends Form
{
    public ?Page $post;

    public $title;
    public $slug;
    public $description;
    public $body;
    public $pin;
    public $status = PostStatus::PUBLISHED->value;
    public $options = [
        'page_type' => PageType::BUILDER_MODE->value,
    ];
    public $user_id;
    public $type;

    public $blocks = [];

    public function rules()
    {
        if (!empty($this->post)) {
            $rules = [
                'title' => ['required', 'string', 'max:100'],
                'slug' => ['required', 'string', Rule::unique('posts', 'slug')->withoutTrashed()->ignoreModel($this->post)],
                'description' => ['nullable', 'string', 'max:10000'],
                'body' => ['nullable', 'string'],
                'options.page_type' => ['nullable' , new Enum(PageType::class)],
                'options.components' => ['nullable' , 'array'],
                'pin' => ['nullable', 'boolean'],
                'status' => ['required', new Enum(PostStatus::class)]
            ];
        } else {
            $rules = [
                'title' => ['required', 'string', 'max:100'],
                'slug' => ['required', 'string', Rule::unique('posts', 'slug')->withoutTrashed()],
                'description' => ['nullable', 'string', 'max:10000'],
                'options.page_type' => ['nullable' , new Enum(PageType::class)],
                'options.components' => ['nullable' , 'array'],
                'body' => ['nullable', 'string'],
                'pin' => ['nullable', 'boolean'],
                'status' => ['required', new Enum(PostStatus::class)]
            ];
        }
        return $rules;
    }


    public function setPost($post)
    {
        $this->post = Page::query()->find($post);
        $this->title = $this->post->title;
        $this->slug = $this->post->slug;
        $this->description = $this->post->description;
        $this->body = $this->post->body;
        $this->pin = $this->post->pin;
        $this->status = $this->post->status;
        $this->user_id = $this->post->user_id;
        $this->type = $this->post->type;

        $this->options = $this->post->options;

        $this->blocks = $this->post->blocks()->whereNull('parent_id')->with('children' , fn($q) => $q->with('children' , fn($q) => $q->orderBy('order_item'))->orderBy('order_item'))->orderBy('order_item')->get()->toArray();

    }

    public function update()
    {
//        dd($this->except('post'));
        $this->post->update(
            $this->except('post')
        );
    }
}
