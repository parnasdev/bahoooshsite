<?php

namespace App\Livewire\Panel\Categories;

use App\Enums\CategoryType;
use App\Enums\PostType;
use App\Livewire\TableComponent;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

#[Layout('components.layouts.panel')]
class CategoryIndex extends TableComponent
{
    use WithPagination;

    public $children = [];
    public $showChildren = -1;
    public $grandchildren = [];
    public $showGrandchildren = -1;

    #[Url]
    public $redirectBack;

    #[Url]
    public $cat_type = 'category';

    #[Url]
    public $post_type = 'post';

    public function mount()
    {
        if (empty($this->redirectBack)) {
            $this->redirectBack = route('panel.posts.index');
        }
    }


    #[Title('دسته‌بندی‌ ها')]
    public function render()
    {
        $categories = Category::query()->where('parent_id', null)->where('cat_type' , $this->cat_type)->where('post_type' , $this->post_type)->orderBy('name')->paginate($this->query['perPage'] ?? 15);
        $perPages = [15, 30, 45, 50];
        return view('livewire.panel.categories.category-index', compact('categories', 'perPages'));
    }

    public function filters(): array
    {
        return $this->filterGroup->toArray();
    }

    public function actions(): array
    {
        $this->actionGroup
            ->addCreateBtn(route('panel.categories.create' , ['cat_type' => $this->cat_type , 'post_type' => $this->post_type]) , 'categories.create');

        return $this->actionGroup->toArray();
    }

    public function links(): array
    {
        $this->linkGroup
            ->addLink('برگشت', $this->redirectBack, 'ml-7 pb-5', 'info');

        return $this->linkGroup->toArray();
    }

    public function columns(): array
    {

        return $this->column->toArray();
    }

    #[On('delete')] public function destroy($id, $type = 'message'): void
    {
        if ($type == 'message') {
            $this->dispatch('deleteMessage', eventName: 'delete', id: $id);
        } else {
            Category::find($id)->delete();

            $this->showChildren = -1;
            $this->showGrandchildren = -1;
            $this->children = [];
            $this->grandchildren = [];
        }
    }

    #[On('restore')] public function restore($id, $type = 'message'): void
    {
        // TODO: Implement restore() method.
    }

    #[On('replicate')] public function replicate($id, $type = 'message'): void
    {
        // TODO: Implement replicate() method.
    }

    #[On('runAction')] public function runAction($data): void
    {
        // TODO: Implement runAction() method.
    }

    #[On('alertOperation')]
    public function alertOperation($alertType, $id): void
    {
        $category = Category::find($id);

        $category->categories()->get()->each(function ($child) {
            $grandchildren = $child->categories()->get();

            if (!$grandchildren->isEmpty()) {
                $grandchildren->each(function ($grandchild) {
                    $grandchild->delete();
                });
            }

            $child->delete();
        });

        $category->delete();

        $this->showChildren = -1;
        $this->showGrandchildren = -1;

        $this->dispatch('toast-message', message: 'با موفقیت حذف شد.', icon: 'success');
    }

    #[On('fillGrandchildren')]
    public function fillGrandchildren($childId)
    {
        if ($this->showGrandchildren <> $childId) {
            $this->showGrandchildren = $childId;
        } else {
            $this->showGrandchildren = -1;
        }

        $this->grandchildren = [];

        if ($this->showGrandchildren == $childId) {
            $this->grandchildren = Category::query()->where('parent_id', $childId)->get();
        } else {
            $this->grandchildren = [];
        }
    }

    #[On('fillChildren')]
    public function fillChildren($parentId)
    {
        if ($this->showChildren <> $parentId) {
            $this->showChildren = $parentId;
            $this->showGrandchildren = -1;
        } else {
            $this->showChildren = -1;
            $this->showGrandchildren = -1;
        }

        $this->grandchildren = [];
        $this->children = [];

        if ($parentId == $this->showChildren) {
            $this->children = Category::query()->where('parent_id', $parentId)->get();
        } else {
            $this->children = [];
        }
    }
}
