<?php

namespace App\Livewire\Panel\Categories;
use App\Enums\CategoryType;
use App\Enums\PostType;
use App\Livewire\Forms\Panel\CategoryForm;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use LivewireUI\Modal\ModalComponent;

class QuickAddCategoryModal extends ModalComponent
{
    public $cat_type = 'category';
    public $post_type = 'post';
    public CategoryForm $nCategory;

    public $size = 0;


    public function mount()
    {
    }


    public function render()
    {
        $parentCategories = Category::query()->whereNull('parent_id')
            ->where('cat_type' , $this->cat_type)
            ->where('post_type' , $this->post_type)
            ->get()->pluck('name' , 'id')->toArray();
        $subParentCategories = Category::query()->whereHas('parent' , function ($query) {
            $query->whereNull('parent_id');
        }) ->where('cat_type' , $this->cat_type)
            ->where('post_type' , $this->post_type)
            ->get()->pluck('name' , 'id')->toArray();

        $categories = array_merge($parentCategories , $subParentCategories);

        return view('livewire.panel.categories.quick-add-category-modal' , compact('categories'));
    }
    public function submit()
    {

        $this->generateSlug();


        $this->validate();
        $this->nCategory->parent_id =  $this->nCategory->parent_id == 0 ? null :  $this->nCategory->parent_id;
        $this->nCategory->cat_type = $this->cat_type;
        $this->nCategory->post_type = $this->post_type;
        Category::query()->create($this->nCategory->only(['name' , 'parent_id' , 'cat_type' , 'post_type']));
        $this->dispatch('toast-message' , message: 'دسته بندی شما ثبت شد.' , icon: 'success');
        $this->dispatch('update-category');
        $this->dispatch('open-toggle');
        $this->closeModal();
    }

    public static function modalMaxWidthClass(): string
    {
        return 'w-25';
    }

    public function generateSlug()
    {
        if (!$this->nCategory->slug) {
            $this->nCategory->slug = SlugService::createSlug(Category::class, 'slug', $this->nCategory->name, ['post_type' => $this->post_type, 'cat_type' => $this->cat_type]);
        } else {
            $this->nCategory->slug = str_replace(' ', '-', $this->nCategory->slug);
        }
    }

}
