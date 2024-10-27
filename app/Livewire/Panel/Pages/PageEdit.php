<?php

namespace App\Livewire\Panel\Pages;

use App\Enums\CategoryType;
use App\Enums\PageType;
use App\Enums\PostStatus;
use App\Enums\PostType;
use App\Livewire\Forms\Panel\PageForm;
use App\Livewire\Forms\Panel\PostForm;
use App\Models\Block;
use App\Models\Category;
use App\Models\Post;
use App\Traits\LoadTheme;
use App\Traits\WithFilesLivewire;
use App\Traits\WithTag;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.panel')]
class PageEdit extends Component
{
    use WithFilesLivewire, WithTag , LoadTheme;

    public PageForm $post;

    public $categories;

    public $pageId;

    public function mount($id)
    {
        $this->post->setPost($id);

        $this->pageId = $id;

        $this->files = $this->post->post->files()->get()->toArray();
    }

    #[Title('ویرایش نوشته')]
    #[On('update-category')]
    public function render()
    {
        $pageTypes = collect(PageType::cases())->pluck('value' , 'value');

        $statuses = collect(PostStatus::cases())->pluck('value' , 'value');
        // dd($this->brands);

        return view('livewire.panel.pages.page-edit', compact('statuses' , 'pageTypes'));
    }

    public function generateSlug()
    {
        if (!$this->post->slug) {
            $this->post->slug = SlugService::createSlug(Post::class, 'slug', $this->post->title, ['type' => 'post']);
        } else {
            $this->post->slug = str_replace(' ', '-', $this->post->slug);
        }
    }

    public function submit()
    {
        $this->validate();

        if (is_null($this->post->pin)) {
            $this->post->pin = 0;
        }

        $this->post->update();

        $this->syncFiles($this->files ?? [], $this->post->post);

        $this->deleteFiles();

        $this->dispatch('toast-message' , message: "نوشته شما ویرایش شد." , icon: 'success');

        $this->redirect(route('panel.pages.index') , true);


    }

    public function openQuickAddCategory($cat_type)
    {
        $this->dispatch('openModal', component: 'panel.categories.quick-add-category-modal', arguments: ['cat_type' => CategoryType::CATEGORY->value, 'post_type' => $this->post->type->value]);
        $this->dispatch('open-toggle');
    }

    public function removeDBFiles($index)
    {
        if (!empty($this->files[$index]['id']))
            $this->deletedFiles[] = $this->files[$index]['id'];
    }

    #[On('updateBlock')]
    #[Computed]
    public function getBlocks()
    {
        $this->post->blocks = $this->post->post->blocks()->whereNull('parent_id')->with('children' , fn($q) => $q->with('children' , fn($q) => $q->orderBy('order_item'))->orderBy('order_item'))->orderBy('order_item')->get()
            ->toArray();
    }

    public function deleteComponent(Block $block)
    {
        $block->delete();

        $this->getBlocks();
    }

    public function goUp($blockId)
    {
        $block1 = $this->post->post->blocks()->find($blockId);
        $block2 = $this->post->post->blocks()->where('order_item' , $block1->order_item - 1)->first();

        if (!empty($block2)) {
            $block2->order_item = $block1->order_item;
            $block2->save();
            $block1->order_item = $block1->order_item - 1;
            $block1->save();
        }

        $this->dispatch('updateBlock');
    }

    public function goDown($blockId)
    {
        $block1 = $this->post->post->blocks()->find($blockId);
        $block2 = $this->post->post->blocks()->where('order_item' , $block1->order_item + 1)->first();

        if (!empty($block2)) {
            $block2->order_item = $block1->order_item;
            $block2->save();
            $block1->order_item = $block1->order_item + 1;
            $block1->save();
        }

        $this->dispatch('updateBlock');
    }
}
