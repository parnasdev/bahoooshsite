<?php

namespace Harvest\Core\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class Package
{

    public Collection $packages;

    public function __construct()
    {
        $this->packages = collect(File::directories(base_path('/Harvest')))->filter(fn($item) => File::basename($item) != 'Core' && File::exists($item . '/register.json'))
            ->values()
        ->map(function ($item) {
            return array_merge(json_decode(File::get($item . '/register.json') , true) , ['path' => $item]);
        });

    }

    public function isActive($packageName)
    {
        $package = $this->packages->firstWhere('name' , $packageName);
        if (empty($package)) {
            throw new NotFoundResourceException("Package Not Found!");
        }
        return !$package['disabled'];
    }

    public function update($packageName , $disable = true) {
        $path = package_path($packageName , 'register.json');
        $data = json_decode(File::get($path) , true);
        $data['disabled'] = $disable;

        File::put($path , json_encode($data , JSON_PRETTY_PRINT));
    }

    public function get()
    {
        return $this->packages;
    }
}
