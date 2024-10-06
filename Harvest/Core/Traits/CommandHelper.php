<?php

namespace Harvest\Core\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait CommandHelper
{
    protected function isCustomModule()
    {
        return $this->option('custom') === true;
    }

    protected function isForce()
    {
        return $this->option('force') === true;
    }

    protected function isInline()
    {
        return $this->option('inline') === true;
    }

    protected function ensureDirectoryExists($path)
    {
        if (! File::isDirectory(dirname($path))) {
            File::makeDirectory(dirname($path), 0777, $recursive = true, $force = true);
        }
    }

    protected function getModule()
    {
        $moduleName = $this->argument('module');

        return [
            'path' => base_path('Harvest/' . $moduleName),
            'module_namespace' => 'Libraries\\' . $moduleName,
            'namespace' => 'Livewire',
            'view' => 'resources/views/livewire',
            'name' => $moduleName
        ];
    }

    protected function getModuleName()
    {
        return ucfirst($this->module['name']);
    }

    protected function getModuleLowerName()
    {
        return strtolower($this->module['name']);
    }

    protected function getModulePath()
    {
        $path = $this->module['path'];

        return strtr($path, ['\\' => '/']);
    }

    protected function getModuleNamespace()
    {
        return $this->isCustomModule()
            ? config("core.custom_modules.{$this->module}.module_namespace", $this->module)
            : config('modules.namespace', 'Harvest');
    }

    protected function getModuleLivewireNamespace()
    {
        $moduleLivewireNamespace = config('core.namespace', 'Livewire');

        if ($this->isCustomModule()) {
            return config("core.custom_modules.{$this->module}.namespace", $moduleLivewireNamespace);
        }

        return $moduleLivewireNamespace;
    }

    protected function getNamespace($classPath)
    {
        $classPath = Str::contains($classPath, '/') ? '/' . $classPath : '';

        $prefix = $this->getModuleNamespace() . '\\' . $this->module['name'] . '\\' . $this->getModuleLivewireNamespace();

        return (string) Str::of($classPath)
            ->beforeLast('/')
            ->prepend($prefix)
            ->replace(['/'], ['\\']);
    }

    protected function getModuleLivewireViewDir()
    {
        $moduleLivewireViewDir = config('core.view', 'resources/views/livewire');

        if ($this->isCustomModule()) {
            $moduleLivewireViewDir = config("core.custom_modules.{$this->module}.view", $moduleLivewireViewDir);
        }

        return $this->getModulePath().'/'.$moduleLivewireViewDir;
    }

    protected function checkClassNameValid()
    {
        if (! $this->isClassNameValid($name = $this->component->class->name)) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS! </> 😳 \n");
            $this->line("<fg=red;options=bold>Class is invalid:</> {$name}");

            return false;
        }

        return true;
    }

    protected function checkReservedClassName()
    {
        if ($this->isReservedClassName($name = $this->component->class->name)) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS! </> 😳 \n");
            $this->line("<fg=red;options=bold>Class is reserved:</> {$name}");

            return false;
        }

        return true;
    }

    protected function isClassNameValid($name)
    {
        return (new \Livewire\Features\SupportConsoleCommands\Commands\MakeCommand())->isClassNameValid($name);
    }

    protected function isReservedClassName($name)
    {
        return (new \Livewire\Features\SupportConsoleCommands\Commands\MakeCommand())->isReservedClassName($name);
    }
}
