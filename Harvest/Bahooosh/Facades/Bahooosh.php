<?php

namespace Harvest\Bahooosh\Facades;


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
       //TODO: Dynamic This
      Route::prefix($prefix)->group(function () {
            Route::get('/', Pages\IndexPage::class);
        });
    }
}
