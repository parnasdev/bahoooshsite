<?php

namespace App\Models\Traits;

use App\Models\PostFile;

trait UsePostFile
{
    public function files()
    {
        return $this->morphMany(PostFile::class, 'post_filetable');
    }
}
