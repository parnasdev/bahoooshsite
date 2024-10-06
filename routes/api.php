<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/getPost/{post_type}/{ignore?}' , [\App\Http\Controllers\Panel\PanelController::class , 'getPosts'])->name('select_post');

Route::get('/getCategories/{type}/{post_type?}' , [\App\Http\Controllers\Panel\PanelController::class , 'getCategories'])->name('select_category');

Route::get('/getUsers/{role?}' , [\App\Http\Controllers\Panel\PanelController::class , 'getUsers'])->name('select_users');
