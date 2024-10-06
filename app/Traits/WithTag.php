<?php

namespace App\Traits;

use App\Enums\CategoryType;
use App\Enums\PostType;
use App\Models\Category;

trait WithTag
{
    public function getTags($q = null , $type = 'post') {
        if (empty($q)) {
            return Category::query()
                ->where([['cat_type' , CategoryType::TAG->value] , ['post_type' , $type]])
                ->get()->toJson();
        }
        return Category::query()
            ->where('name' , 'LIKE' , "%{$q}%")
            ->where([['cat_type' , CategoryType::TAG->value] , ['post_type' , $type]])
            ->get()->toJson();
    }

    public function addTags($tag , $type)
    {
        $_tag = Category::query()->where('name' , $tag)
            ->where([['cat_type' , CategoryType::TAG->value] , ['post_type' , $type]])->first();
        if ($_tag) {
            return $_tag->toJson();
        }
        return Category::query()->create([
            'name' => $tag,
            'cat_type' => CategoryType::TAG,
            'post_type' => $type
        ])->toJson();
    }
}
