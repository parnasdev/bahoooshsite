<?php

namespace App\Models;

use App\Casts\AreaComponent;
use App\Enums\BlockCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'parent_id',
        'component_name',
        'title',
        'is_livewire',
        'show_desktop',
        'show_tablet',
        'show_mobile',
        'data',
        'category',
        'padding',
        'margin',
        'order_item'
    ];

    protected $casts = [
        'show_desktop' => 'boolean',
        'show_tablet' => 'boolean',
        'show_mobile' => 'boolean',
        'is_livewire' => 'boolean',
        'data' => 'array',
        'category' => BlockCategory::class,
        'padding' => AreaComponent::class,
        'margin' => AreaComponent::class,
    ];

    public function children()
    {
        return $this->hasMany(Block::class , 'parent_id');
    }
}
