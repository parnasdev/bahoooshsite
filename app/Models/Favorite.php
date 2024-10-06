<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'type',
        'favoritetable_id',
        'favoritetable_type',
    ];

    public function favoritetable()
    {
        return $this->morphTo()->withTrashed();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class,'favoritetable_id');
    }
}
