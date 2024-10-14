<?php

namespace App\Traits;

trait LoadTheme
{
    public string $theme;

    public function bootLoadTheme() : void
    {
        $this->theme = config('cms.theme');
    }
}
