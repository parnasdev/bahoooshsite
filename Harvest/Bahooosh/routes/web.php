<?php
use Illuminate\Support\Facades\Route;

//Route::view('/', 'bahooosh::hello');
//Route::view('/', 'bahooosh::index');
\Harvest\Bahooosh\Facades\Bahooosh::routes(config('cms.prefix_route'));
Route::view('/features', 'bahooosh::features');
