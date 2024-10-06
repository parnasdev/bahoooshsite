<?php

namespace App\Repositories;

use App\Models\Post;
use Harvest\Core\Repositories\Contracts\AbstractRepository;
use Illuminate\Database\Eloquent\Model;

class PostRepository extends AbstractRepository
{

    protected function instance(array $attributes = []): Model
    {
        return new Post($attributes);
    }
}
