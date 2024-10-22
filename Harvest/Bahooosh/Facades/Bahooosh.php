<?php

namespace Harvest\Bahooosh\Facades;


use App\Enums\PostStatus;
use App\Models\Page;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;
use Harvest\Bahooosh\Livewire\Pages;

class Bahooosh extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'bahooosh';
    }

    public static function routes($prefix = null)
    {
        $pages = Page::query()->latest()->where('status' , PostStatus::PUBLISHED)->get();
       //TODO: Dynamic This
      Route::prefix($prefix)->middleware('web')->group(function () use ($pages) {
          foreach ($pages as $page) {
              Route::get($page->slug, Pages\IndexPage::class);
          }

      });
    }
}
