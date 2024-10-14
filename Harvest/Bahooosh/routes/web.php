<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'bahooosh::hello');
Route::view('/', 'bahooosh::index');
Route::view('/features', 'bahooosh::features');
