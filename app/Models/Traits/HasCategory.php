<?php

namespace App\Models\Traits;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasCategory
{

    public function categories() : MorphToMany
    {
        return $this->morphToMany(Category::class , 'categoryable' , 'categoryable');
    }
}
