<?php


namespace Harvest\Bahooosh\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BahoooshServiceProvider extends ServiceProvider
{
     protected const UpperPackageName = 'Bahooosh';
     protected const LowerPackageName = 'bahooosh';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->routeMap();
        $this->loadMigrationsFrom(package_path(self::UpperPackageName, 'database/migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    public function routeMap()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            package_path(self::UpperPackageName, 'config/config.php') => config_path(self::LowerPackageName . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            package_path(self::UpperPackageName, 'config/config.php'), self::LowerPackageName
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/packages/' . self::LowerPackageName);

        $sourcePath = package_path(self::UpperPackageName, 'resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', self::LowerPackageName . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), self::LowerPackageName);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = base_path('lang/' . self::LowerPackageName);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, self::LowerPackageName);
        } else {
            $this->loadTranslationsFrom(package_path(self::UpperPackageName, 'lang'), self::LowerPackageName);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (config()->get('view.paths') as $path) {
            if (is_dir($path . '/' . self::LowerPackageName)) {
                $paths[] = $path . '/' . self::LowerPackageName;
            }
        }
        return $paths;
    }
}
