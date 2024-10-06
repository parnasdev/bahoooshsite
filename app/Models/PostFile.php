<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'path',
        'alt',
        'type',
        'post_filetable_id',
        'post_filetable_type',
    ];

    public function post_filetable()
    {
        return $this->morphTo();
    }


}
