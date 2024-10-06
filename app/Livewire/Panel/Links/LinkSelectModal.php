<?php

namespace App\Livewire\Panel\Links;

use App\Enums\LinkStatus;
use App\Models\Category;
use App\Models\Link;
use App\Models\Post;
use LivewireUI\Modal\ModalComponent;

class LinkSelectModal extends ModalComponent
{
    public $index = null;
    public $link_type = '';
    public $type = 'emptyLink';
    public $itemId = 1;
    public function render()
    {
        return view('livewire.panel.links.link-select-modal');
    }

    public function submit()
    {
        $this->validate([
            'itemId' => ['required' , 'min:1']
        ]);
        match ($this->type) {
             'emptyLink' => $this->createEmptyLink(),
             'category' , 'brand' => $this->createCategoryLink(),
             'page' => $this->createPageLink()
        };

        if (empty($this->index))
            $this->dispatch('updateLinks');
        else
            $this->dispatch('updateLinks.'.$this->index);
        $this->closeModal();
    }

    public function updated($name , $value)
    {
    }

    public function createEmptyLink()
    {
        Link::query()->create([
            'parent_id' => $this->index,
            'title' => 'لینک خالی' ,
            'href' => '#',
            'is_link' => true,
            'mega_menu' => false,
            'type' => $this->link_type,
            'status' => LinkStatus::HIDDEN,
            'order_item' => $this->getLinkIndex() + 1
        ]);
    }

    public function createCategoryLink()
    {
        $category = $this->getCategory($this->itemId);

        if (empty($category)) {
            $this->dispatch('toast-message', message: "دسته‌بندی پیدا نشد", icon: 'danger');
            return;
        }
        Link::query()->create([
            'parent_id' => $this->index,
            'title' => $category->name ,
            'href' => '',
            'is_link' => true,
            'mega_menu' => false,
            'linktable_id' => $category->id,
            'linktable_type' => get_class($category),
            'type' => $this->link_type,
            'status' => LinkStatus::HIDDEN,
            'order_item' => $this->getLinkIndex() + 1
        ]);
    }

    public function createPageLink()
    {
        $page = $this->getPage($this->itemId);

        if (empty($page)) {
            $this->dispatch('toast-message', message: "صفحه پیدا نشد", icon: 'danger');
            return;
        }

        Link::query()->create([
            'parent_id' => $this->index,
            'title' => $page->title ,
            'href' => '',
            'is_link' => true,
            'mega_menu' => false,
            'linktable_id' => $page->id,
            'linktable_type' => get_class($page),
            'type' => $this->link_type,
            'status' => LinkStatus::HIDDEN,
            'order_item' => $this->getLinkIndex() + 1
        ]);
    }

    public function getCategory($id)
    {
        return Category::query()->find($id);
    }

    public function getPage($id)
    {
        return Post::query()->find($id);
    }

    public function getLinkIndex()
    {
        return Link::query()->where('type' , $this->link_type)->when(!empty($this->index) , fn($q) => $q->where('parent_id' , $this->index))->get()->count();
    }
}
