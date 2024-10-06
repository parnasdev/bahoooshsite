<?php

namespace Harvest\Core\Providers;

use Harvest\Core\Commands\HervestMakePackageCommand;
use Harvest\Core\Commands\LivewireMakeCommand;
use Harvest\Core\Facades\Package;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Harvest\Core\Traits\RegisterComponents;

class CoreServiceProvider extends ServiceProvider
{

    use RegisterComponents;
    protected const UpperPackageName = 'Core';
    protected const LowerPackageName = 'core';


    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        AboutCommand::add(self::UpperPackageName, fn () => ['Version' => '0.0.1']);

        $this->registerCommand();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('package' , function () {
            return new \Harvest\Core\Services\Package();
        });

        $packages = Package::get()
            ->where('disabled' , false)
            ->pluck('service')
            ->toArray();

        foreach ($packages as $package) {
            $this->app->register($package);
        }

        $this->registerModuleComponents();

    }

    public function registerCommand()
    {
        if ($this->app->runningInConsole()) {
            $packages = call_user_func_array('array_merge' , Package::get()->where('disabled' , false)->pluck('commands')->filter(fn($item) => !empty($item))->toArray());
            $this->commands([
                LivewireMakeCommand::class,
                HervestMakePackageCommand::class,
                ...$packages
            ]);
        }
    }
}
