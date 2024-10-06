<?php

namespace App\Livewire\Panel\Pages;

use App\Enums\PageType;
use App\Enums\PostStatus;
use App\Enums\PostType;
use App\Livewire\Forms\Panel\PageForm;
use App\Models\Block;
use App\Models\Page;
use App\Models\Post;
use App\Traits\WithFilesLivewire;
use App\Traits\WithTag;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout('components.layouts.panel')]
class PageCreate extends Component
{
    use WithFilesLivewire, WithTag;

    public PageForm $post;

    #[Url]
    public $pageId;

    public function mount()
    {
        if (!empty($this->pageId)) {
            $this->post->setPost($this->pageId);
        }
        $this->post->type = PostType::PAGE;
    }

    #[Title('ایجاد صفحه')]
    public function render()
    {
        $statuses = collect(PostStatus::cases())->pluck('value' , 'value');

        $pageTypes = collect(PageType::cases())->pluck('value' , 'value');

        return view('livewire.panel.pages.page-create', compact('statuses' , 'pageTypes'));
    }

    public function generateSlug()
    {
        if (!$this->post->slug) {
            $this->post->slug = SlugService::createSlug(Post::class, 'slug', $this->post->title, ['type' => 'post']);
        } else {
            $this->post->slug = str_replace(' ', '-', $this->post->slug);
        }

        $this->submit(false);
    }

    public function submit(
        $redirect = true
    )
    {
        $this->validate();

        $this->post->user_id = auth()->id();
        $this->post->type = PostType::PAGE;
        if (is_null($this->post->pin)) {
            $this->post->pin = 0;
        }

        if (empty($this->post->post)) {
            $post = Page::query()->create($this->post->all());
            $this->post->post = $post;
            $this->pageId = $post->id;
        } else {
            $this->post->post->update($this->post->all());
        }

        $this->syncFiles($this->post->files ?? [], $post ?? $this->post->post);


        if ($redirect) {
            $this->dispatch('toast-message' , message: "صفحه شما ایجاد شد." , icon: 'success');


            $this->redirect(route('panel.pages.index') , true);
        }
    }

    #[On('updateBlock')]
    public function getBlocks()
    {
        $this->post->blocks = $this->post->post->blocks()->whereNull('parent_id')->with('children' , fn($q) => $q->orderBy('order_item'))->orderBy('order_item')->get()->toArray();
    }

    public function deleteComponent(Block $block)
    {
        $block->delete();

        $this->getBlocks();
    }
}
