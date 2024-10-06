<?php

use Harvest\Core\Facades\Package;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

function user() {
   return auth()->user();
}

function getValue($name) : mixed
{
    return \App\Models\Setting::query()->where('name' , $name)
        ->first()->value ?? null;
}

function package_path($package , $path) : string {
    return base_path("Harvest/{$package}/{$path}");
}

function package_path_models($package , $model) : string {
    return "Harvest\\{$package}\\Models\\{$model}";
}

function packages() : Collection {
    return Package::get();
}
function storage_url($path) : string {
    return Storage::url($path);
}

function roundUpToHundred($amount) : int {
    return ceil($amount / 100) * 100;
}
