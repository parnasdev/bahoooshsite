<?php

namespace Harvest\Core\Traits;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Livewire;
use Harvest\Core\Facades\Package;
use Harvest\Core\Support\Decomposer;
use ReflectionClass;
use Symfony\Component\Finder\SplFileInfo;

trait RegisterComponents
{
    protected function registerModuleComponents()
    {
        if (Decomposer::checkDependencies()->type == 'error') {
            return false;
        }

        $modules = Package::get();

        $modulesLivewireNamespace = config('core.namespace', 'Livewire');

        $modules->each(function ($module) use ($modulesLivewireNamespace) {
            $directory = (string) Str::of($module['path'])
                ->append('/'.$modulesLivewireNamespace)
                ->replace(['\\'], '/');

            $namespace = 'Harvest'.'\\'.ucfirst($module['name']).'\\'.$modulesLivewireNamespace;

            $this->registerComponentDirectory($directory, $namespace, $module['name'].'::');
        });
    }


    protected function registerModuleView()
    {
        $modules = Package::get();
        $modulesLivewireNamespace = 'Components';

        $modules->each(function ($module) use ($modulesLivewireNamespace) {
            $directory = (string)Str::of(package_path($module['name'], ''))
                ->append($modulesLivewireNamespace)
                ->replace(['\\'], '/');

            $namespace = 'Harvest' . '\\' . ucfirst($module['name']) . '\\' . $modulesLivewireNamespace;

            $this->registerViewDirectory($directory, $namespace, $module['name'] . '.');
        });
    }


    protected function registerViewDirectory($directory, $namespace, $aliasPrefix = '')
    {
        $filesystem = new Filesystem();
        if (!$filesystem->isDirectory($directory)) {
            return false;
        }
        collect($filesystem->allFiles($directory))
            ->map(function (SplFileInfo $file) use ($namespace) {
                return (string)Str::of($namespace)
                    ->append('\\', $file->getRelativePathname())
                    ->replace(['/', '.php'], ['\\', '']);
            })
            ->filter(function ($class) {
                return is_subclass_of($class, \Illuminate\View\Component::class) && !(new ReflectionClass($class))->isAbstract();
            })->each(function ($class) use ($namespace, $aliasPrefix) {
                $alias = $aliasPrefix . Str::of($class)
                        ->after($namespace . '\\')
                        ->replace(['/', '\\'], '.')
                        ->explode('.')
                        ->map([Str::class, 'kebab'])
                        ->implode('.');
                Blade::component($class, $alias);
            });
    }


    protected function registerComponentDirectory($directory, $namespace, $aliasPrefix = '')
    {
        $filesystem = new Filesystem();

        if (! $filesystem->isDirectory($directory)) {
            return false;
        }

        collect($filesystem->allFiles($directory))
            ->map(function (SplFileInfo $file) use ($namespace) {
                return (string) Str::of($namespace)
                    ->append('\\', $file->getRelativePathname())
                    ->replace(['/', '.php'], ['\\', '']);
            })
            ->filter(function ($class) {
                return is_subclass_of($class, Component::class) && ! (new ReflectionClass($class))->isAbstract();
            })
            ->each(function ($class) use ($namespace, $aliasPrefix) {
                $alias = $aliasPrefix.Str::of($class)
                        ->after($namespace.'\\')
                        ->replace(['/', '\\'], '.')
                        ->explode('.')
                        ->map([Str::class, 'kebab'])
                        ->implode('.');

                if (Str::endsWith($class, ['\Index', '\index'])) {
                    Livewire::component(Str::beforeLast($alias, '.index'), $class);
                }

                Livewire::component($alias, $class);
            });
    }
}
