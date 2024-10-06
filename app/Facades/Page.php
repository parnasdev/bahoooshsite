<?php

namespace App\Facades;

use App\Livewire\Home\DynamicPage;
use App\Models\Post;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

class Page extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'pages';
    }

    public static function routes() {
        $pages = Post::query()->isPublish()->justPostType('page')->get();

        foreach ($pages as $page) {
            Route::get($page->slug , DynamicPage::class);
        }
    }
}
