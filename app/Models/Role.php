<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'label',
        'is_access_panel',
        'is_access_dashboard',
        'is_default',
    ];

    protected $casts = [
        'is_access_panel' => 'boolean',
        'is_access_dashboard' => 'boolean',
        'is_default' => 'boolean',
    ];

    public function permissions() : BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }

    public function hasPermission($name)
    {
        return $this->permissions()->where('name', $name)->get()->isNotEmpty();
    }
}
