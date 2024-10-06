<?php

namespace App\Models;

use App\Enums\LinkStatus;
use App\Enums\LinkType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'title',
        'icon',
        'href',
        'is_link',
        'mega_menu',
        'linktable_id',
        'linktable_type',
        'type',
        'status',
        'order_item'
    ];

    protected $casts = [
        'is_link' => 'boolean',
        'mega_menu' => 'boolean',
        'type' => LinkType::class,
        'status' => LinkStatus::class,
    ];

    public function linktable()
    {
        return $this->morphTo();
    }

    public function children() {
        return $this->hasMany(Link::class , 'parent_id' , 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Link::class , 'parent_id' , 'id');
    }

}
