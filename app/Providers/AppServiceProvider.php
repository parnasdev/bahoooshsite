<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Permission;
use App\Models\User;
use App\Observers\CategoryObserve;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!$this->app->runningInConsole()) {
            foreach ($this->getPermissions() as $permission) {
                Gate::define($permission->name, function (User $user) use ($permission) {
                    return $user->hasRole($permission->roles);
                });
            }
        }

        Category::observe(CategoryObserve::class);

        $siteTitle = getValue('siteTitle');
        $separator = getValue('separator');
        $keywords = getValue('keywords');

        config()->set('seotools.meta.defaults' , [
            'title' => $siteTitle,
            'separator' => $separator,
            'keywords' => explode('|', $keywords),
        ]);

        config()->set('seotools.opengraph.defaults' , [
            'title' => $siteTitle,
        ]);

        config()->set('seotools.json-ld.defaults' , [
            'title' => $siteTitle,
        ]);
    }

    public function getPermissions()
    {
        return Permission::query()->with('roles')->get();
    }
}
