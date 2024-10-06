<?php

namespace App\Livewire\Forms\Panel;

use App\Models\Category;
use Illuminate\Validation\Rule;
use Livewire\Form;

class CategoryForm extends Form
{
    public ?Category $category;
    public $parent_id;
    public $name;
    public $slug;
    public $description;
    public $post_type;
    public $cat_type = 'category';

    public function setCategory($category)
    {
        $this->category = Category::query()->findOrFail($category);
        $this->name = $this->category->name;
        $this->slug = $this->category->slug;
        $this->cat_type = $this->category->cat_type;
        $this->post_type = $this->category->post_type;
        $this->parent_id = $this->category->parent_id;
        $this->description = $this->category->description;
    }

    public function rules()
    {

        if (!empty($this->category)) {
            return [
                'parent_id' => ['nullable', Rule::exists('categories', 'id')->whereNot('id' , $this->category->id)],
                'name' => ['required', 'string', 'max:100'],
                'slug' => ['required', 'string', 'max:100', Rule::unique('categories', 'slug')->where('cat_type' , $this->cat_type)->where('post_type' , $this->post_type)->ignore($this->category->id)],
                'description' => ['nullable', 'string', 'max:10000'],
            ];
        } else {
            return [
                'parent_id' => ['nullable', Rule::exists('categories', 'id')],
                'name' => ['required', 'string', 'max:100'],
                'slug' => ['required', 'string', 'max:100', Rule::unique('categories', 'slug')->where('cat_type', $this->cat_type)->where('post_type' , $this->post_type)],
                'description' => ['nullable', 'string', 'max:10000'],
            ];
        }
    }
}
