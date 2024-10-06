<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Traits\UseACL;
use App\Models\Traits\UsePostFile;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, UseACL, SoftDeletes , UsePostFile;

    use Searchable;
    public $asYouType = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'family',
        'phone',
        'username',
        'email',
        'brith_day',
        'gender',
        'id_code',
        'profile',
        'role_id',
        'verified_at',
        'password',
        'balance'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'verified_at' => 'datetime',
        'password' => 'hashed'
    ];

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value , $attributes) => isset($attributes['name']) ? "{$attributes['name']} {$attributes['family']}" : null,
        );
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
