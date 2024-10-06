<?php

namespace App\Livewire\Panel\Pages;

use App\Enums\CategoryType;
use App\Enums\PostStatus;
use App\Enums\PostType;
use App\Livewire\TableComponent;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Services\Table\FilterOptions;
use Illuminate\Routing\Route;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Layout('components.layouts.panel')]
class PageIndex extends TableComponent
{
    use WithPagination;

    public function mount()
    {
    }

    #[Title('صفحه ها')]
    public function render()
    {
        if (($this->query['trash'] ?? false) == 'true') {
            $posts = Page::onlyTrashed()->withTotalVisitCount()->latest();
        } else {
            $posts = Page::query()->withTotalVisitCount()->latest();
        }
        $posts->when($this->query['status'] ?? false , function ($query) {
            $query->where('status' , $this->query['status']);
        })->when($this->query['category'] ?? false , function ($query) {
            $query->whereHas('categories' , fn($q) => $q->where('id' , $this->query['category']));
        });

        if (!empty($this->query['keyword'] ?? false)) {
            $constraints = $posts; // not necessary but for better readability
            $posts = Page::search($this->query['keyword'])->constrain($constraints);
        }

        $posts = $posts->paginate($this->query['perPage'] ?? 15);

        return view('livewire.panel.pages.page-index' , compact('posts'));
    }

    public function updated($name , $value)
    {
        if ($name == 'action' && $value != 0) {
            $this->dispatch('message' , title: "آیا مطمئن هستید؟" , btnCText: "بله" , btnCAText: "خیر" , eventName: "runAction" , data: $value);
        }
    }

    public function selectAll($json)
    {
        $array = json_decode($json);
        if ($array == $this->selected) {
            $this->selected = [];
        } else {
            $this->selected = $array;
        }
    }

    public function filters(): array
    {
        $statuses = collect(PostStatus::cases())->pluck('value' , 'value')->toArray();
        $this->filterGroup->addFilter(new FilterOptions(
            'inputs.panel.text',
            'query.keyword',
            'flex-36 m-flex-100 pl-6 ml-10 m-ml-0',
            'flex-100 m-flex-99 search',
            'کلمه یا عبارت خود را جستجو کنید',
            'جستجو',
            'magnifier',
        ))->addFilter(new FilterOptions(
            'inputs.panel.select',
            'query.status',
            'flex-21 m-flex-48 pl-6 ml-10 m-ml-0',
            'mt-5',
            'همه',
            'براساس وضعیت',
            null,
            $statuses
        ));


        return $this->filterGroup->toArray();
    }

    public function actions(): array
    {
        $this->actionGroup
            ->addActionSelect(($this->query['trash'] ?? false) == 'true' , 'action' , 'posts.delete')
            ->addTrashBtn(($this->query['trash'] ?? false) == 'true' , can: 'posts.delete')
            ->addCreateBtn(route('panel.pages.create') , 'pages.create');

        return $this->actionGroup->toArray();
    }

    public function links(): array
    {
//        $this->linkGroup
//            ->addLink('دیدگاه‌ها' , route('panel.comments.index' , ['redirectBack' => \route('panel.posts.index')]) , 'ml-7 pb-5' , 'info')
//            ->addLink('دسته‌بندی‌ها' , route('panel.categories.index' , ['redirectBack' => \route('panel.posts.index')]) , 'ml-7 pb-5' , 'info')
//            ->addLink('برچسب‌ها' , route('panel.categories.index' , ['cat_type' => 'tag' , 'redirectBack' => \route('panel.posts.index')]) , 'ml-7 pb-5' , 'info');

        return $this->linkGroup->toArray();
    }

    public function columns(): array
    {
        $statuses = collect(PostStatus::cases())->pluck('value' , 'value')->toArray();

        $this->column
            ->addColumn('component' , '' , 'id' , 'inputs.panel.checkbox' , 'flex-5 m-flex-15')
            ->addColumn('text' , 'شناسه' , 'id' , '' , 'flex-5 m-flex-22')
            ->addColumn('text' , 'عنوان' , 'title' , '' , 'flex-28 m-flex-100' , trash: fn(Page $post) => $post->trashed() , href: fn(Page $post) => $post->path())
            ->addColumn('text' , 'نام کاربر' , fn(Page $post) => $post->user?->fullName ?? $post->user?->username , '' , 'flex-14 m-flex-70')
            ->addColumn('select-component' , 'وضعیت' , 'status' , 'inputs.panel.table-select' , 'flex-13 m-flex-48' , eventName: 'updateStatus' , options: $statuses)
            ->addColumn('text' , 'تاریخ ایجاد' ,  fn(Page $post) => jdate($post->created_at)->format('Y-m-d H:i') , '' , 'flex-10 m-flex-70')
            ->addColumn('text' , 'تعداد بازدید' , 'visit_count_total' , '' , 'flex-8 m-flex-50')
            ->addColumn('component' , 'عملیات' , '' , 'actions.panel.action-buttons' , 'sticky-table flex-16 m-flex-45' , actions: [
                array('type' => 'edit' , 'route' => fn(Page $post) => route('panel.pages.edit' , ['id' => $post->id]) , 'can' => 'pages.edit'),
                array('type' => 'delete' , 'route' => '#4', 'can' => 'posts.delete'),
                array('type' => 'restore' , 'route' => '#4', 'can' => 'posts.delete'),
                array('type' => 'copy' , 'route' => '#4', 'can' => 'posts.create'),
            ])
            ;

        return $this->column->toArray();

    }

    #[On('delete')]
    public function destroy($id, $type = 'message'): void
    {
        if ($type == 'message') {
            $this->dispatch('deleteMessage' , id: $id , eventName: 'delete');
        } else {
            $post = $this->getPost($id);

            if ($post->trashed()) {
                $post->forceDelete();
            } else {
                $post->delete();
            }
        }
    }

    #[On('restore')]
    public function restore($id, $type = 'message'): void
    {
        if ($type == 'message') {
            $this->dispatch('restoreMessage' , id: $id , eventName: 'restore');
        } else {
            $post = $this->getPost($id);

            if ($post->trashed()) {
                $post->restore();
            }
        }
    }

    #[On('replicate')]
    public function replicate($id, $type = 'message'): void
    {
        $post = $this->getPost($id);

       $newPost = $post->replicate();
        $newPost->title = $newPost->title . ' کپی';
        $newPost->save();

    }

    #[On('runAction')]
    public function runAction($data) : void
    {
        if ($data == 1) {
            foreach ($this->selected as $item) {
                $this->destroy($item , 'action');
            }
        } else {
            foreach ($this->selected as $item) {
                $this->restore($item , 'action');
            }
        }


        $this->action = 0;

        $this->selected = [];
    }

    #[On('updateStatus')]
    public function updateStatus($id , $value)
    {
        $post = $this->getPost($id);
        $post->update([
            'status' => $value
        ]);

        $this->dispatch('toast-message' , message: "وضعیت تغییر پیدا کرد." , icon: "success");
    }

    #[On('showTrash')]
    public function showTrash()
    {
        $this->query['trash'] = !($this->query['trash'] ?? false);
    }

    private function getPost($id) {
        return Page::withTrashed()->findOrFail($id);
    }
}
