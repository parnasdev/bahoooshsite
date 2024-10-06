<?php

namespace App\Livewire\Panel\Categories;

use App\Traits\WithFilesLivewire;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use App\Enums\{PostType};
use App\Enums\CategoryType;
use App\Livewire\Forms\Panel\CategoryForm;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.panel')]
class CategoryEdit extends Component
{
    use WithFilesLivewire;

    #[Url]
    public $post_type = 'post';
    #[Url]
    public $cat_type = 'category';

    public CategoryForm $category;

    public function mount($id)
    {

        $this->category->setCategory($id);
    }

    #[Title('ایجاد دسته‌بندی')]
    public function render()
    {
        $categories = Category::query()
            ->whereNull('parent_id')
            ->where('cat_type', $this->cat_type)
            ->where('post_type', $this->post_type)
            ->get()->pluck('name' , 'id')->toArray();
        $subParentCategories = Category::query()->whereHas('parent', function ($query) {
            $query->whereNull('parent_id');
        })->where('cat_type', $this->cat_type)
            ->where('post_type', $this->post_type)
            ->get()->pluck('name' , 'id')->toArray();

        array_push($categories, ...$subParentCategories);


        return view('livewire.panel.categories.category-edit', compact('categories'));
    }

    public function submit(): void
    {
        $this->validate();

        $this->category->parent_id = $this->category->parent_id == 0 ? null : $this->category->parent_id;

        $this->category->category->update($this->category->all());

        $this->syncFiles($this->files, $this->category->category);

        $this->deleteFiles();

        $this->redirect(route('panel.categories.index', ['post_type' => $this->post_type, 'cat_type' => $this->cat_type]), true);
    }

    public function generateSlug(): void
    {
        if (!$this->category->slug) {
            $this->category->slug = SlugService::createSlug(Category::class, 'slug', $this->category->name, ['post_type' => $this->post_type, 'cat_type' => $this->cat_type]);
        } else {
            $this->category->slug = str_replace(' ', '-', $this->category->slug);
        }
    }

    public function removeDBFiles($index)
    {
        if (!empty($this->files[$index]['id']))
            $this->deletedFiles[] = $this->files[$index]['id'];
    }
}
