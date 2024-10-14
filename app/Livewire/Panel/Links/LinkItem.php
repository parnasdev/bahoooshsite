<?php

namespace App\Livewire\Panel\Links;

use App\Enums\LinkStatus;
use App\Livewire\Forms\Panel\PanelLinkForm;
use App\Models\Link;
use App\Traits\WithFilesLivewire;
use Livewire\Attributes\On;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class LinkItem extends Component
{

    use WithFilesLivewire;

    public ?Link $link;

    public $parent;

    public PanelLinkForm $linkForm;

    public function mount()
    {
        $this->linkForm->title = $this->link->title;
        $this->linkForm->parent_id = $this->link->parent_id;
        $this->linkForm->icon = $this->link->icon;
        $this->linkForm->href = $this->link->href;
        $this->linkForm->is_link = $this->link->is_link;
        $this->linkForm->mega_menu = $this->link->mega_menu;
        $this->linkForm->type = $this->link->type;
        $this->linkForm->status = $this->link->status;
        $this->linkForm->order_item = $this->link->order_item;
    }

    public function destroy(): void
    {
        $parentId = $this->link->parent_id;
        $this->link->children()->delete();
        $this->link->delete();

        if (empty($parentId))
            $this->dispatch('updateLinks');
        else
            $this->dispatch('updateLinks.' . $parentId);

    }

    #[On('updateLinks.{link.id}')]
    public function render()
    {
        $statuses = collect(LinkStatus::cases())->pluck('value', 'value');

        $children = $this->link->children()->orderBy('order_item')->get();

        return view('livewire.panel.links.link-item', [
            'statuses' => $statuses,
            'children' => $children ?? []
        ]);
    }

    #[On('submitAll')]
    public function submit()
    {
        $this->authorize('links.edit');
        $this->validate();
        $this->link->update($this->linkForm->all());
    }

    public function goDown()
    {
        $count = $this->getLinkIndex();
        $parentId = $this->link->parent_id;
        if ($this->link->order_item < $count) {
            $_link = Link::query()->where('type', $this->link->type)
                ->when(!empty($this->link->parent_id), fn($q) => $q->where('parent_id', $this->link->parent_id))
                ->where('order_item', $this->link->order_item + 1)
                ->first();

            $_link->decrement('order_item');
            $this->link->increment('order_item');

            if (empty($parentId))
                $this->dispatch('updateLinks');
            else
                $this->dispatch('updateLinks.' . $parentId);
        }
    }

    public function goUp()
    {
        $parentId = $this->link->parent_id;
        if ($this->link->order_item > 1) {
            $_link = Link::query()->where('type', $this->link->type)
                ->when(!empty($this->link->parent_id), fn($q) => $q->where('parent_id', $this->link->parent_id))
                ->where('order_item', $this->link->order_item - 1)
                ->first();

            $_link->increment('order_item');
            $this->link->decrement('order_item');

            if (empty($parentId))
                $this->dispatch('updateLinks');
            else
                $this->dispatch('updateLinks.' . $parentId);
        }
    }

    public function getLinkIndex()
    {
        return Link::query()->where('type', $this->link->type)->when(!empty($this->link->parent_id), fn($q) => $q->where('parent_id', $this->link->parent_id))->get()->count();
    }
}
