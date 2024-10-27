<?php

namespace App\Models;

use App\Enums\CategoryType;
use App\Enums\PostType;
use App\Models\Traits\UsePostFile;
use App\Observers\CategoryObserve;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
#[ObservedBy([CategoryObserve::class])]
class Category extends Model
{
    use HasFactory , UsePostFile , Sluggable , SluggableScopeHelpers;

    use Searchable;
    public $asYouType = true;

    protected $fillable = [
        'id',
        'name',
        'user_id',
        'slug',
        'parent_id',
        'description',
        'cat_type',
        'post_type',
    ];

    protected $casts = [
        'cat_type' => CategoryType::class,
        'post_type' => PostType::class,
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function parent()
    {
        return $this->belongsTo(Category::class , 'parent_id' , 'id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class , 'parent_id' , 'id');
    }
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categoryable' , 'categoryable');
    }


    public function scopeWithUniqueSlugConstraints(
        Builder $query,
        Model $model,
        string $attribute,
        array $config,
        string $slug
    ): Builder
    {
        return $query->where([['cat_type' ,  $model->cat_type ?? $config['cat_type']] , ['post_type' , $model->post_type ?? $config['post_type']]]);
    }

    public function path()
    {
        return '#'; /** match ($this->post_type->name) {
            'post' => $this->cat_type->name == 'tag' ?  route('tag.posts.index' , ['category' => $this->slug]) : route('category.posts.index' , ['category' => $this->slug]),
            'product' => $this->cat_type->name == 'tag' ? route('tag.products.index' , ['category' => $this->slug]) : route('category.products.index' , ['category' => $this->slug]),
        };**/
    }

}
