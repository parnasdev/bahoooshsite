<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'bahooosh::hello');
Route::view('/', 'bahooosh::index');
Route::view('/features', 'bahooosh::features');
Route::view('/prices', 'bahooosh::prices');
Route::view('/portfolio', 'bahooosh::portfolio');
Route::view('/posts', 'bahooosh::posts');
Route::view('/posts/info', 'bahooosh::postInfo');
Route::view('/notfound', 'bahooosh::404');
