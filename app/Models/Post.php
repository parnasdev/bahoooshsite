<?php

namespace App\Models;

use App\Enums\PostStatus;
use App\Enums\PostType;
use App\Models\Traits\HasUser;
use App\Models\Traits\HasComment;
use App\Models\Traits\HasCategory;
use App\Models\Traits\UsePostFile;
use Harvest\Core\Scopes\PostTypeScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Coderflex\Laravisit\Concerns\CanVisit;
use Cviebrock\EloquentSluggable\Sluggable;
use Coderflex\Laravisit\Concerns\HasVisits;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

#[ScopedBy([PostTypeScope::class])]
class Post extends Model implements CanVisit
{
    use HasFactory ,
        HasUser ,
        UsePostFile ,
        HasVisits ,
        SoftDeletes ,
        Sluggable ,
        HasCategory ,
        HasComment,
        SluggableScopeHelpers;

    use Searchable;
    public $asYouType = true;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'description',
        'body',
        'pin',
        'options',
        'publish_at',
        'type',
        'status',
    ];

    protected $casts = [
        'pin' => 'boolean',
        'options' => 'array',
        'type' => PostType::class,
        'status' => PostStatus::class,

    ];


    public function path($variant = null)
    {
        return '#';
    }

    public function scopeJustPostType($query , $type)
    {
        return $query->where('type' ,$type);
    }

    public function scopeIsPublish($query)
    {
        return $query->where('status' , PostStatus::PUBLISHED);
    }

    public function sluggable(): array
    {
       return [
           'slug' => [
               'source' => 'title'
           ]
       ];
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }



    public function scopeWithUniqueSlugConstraints(
        Builder $query,
        Model   $model,
        string  $attribute,
        array   $config,
        string  $slug
    ): Builder
    {
        return $query->where('type', $model->type ?? $config['type']);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'body'=> $this->body,
        ];
    }

}
