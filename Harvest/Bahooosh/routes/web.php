<?php
use Illuminate\Support\Facades\Route;

//Route::view('/', 'bahooosh::hello');
//Route::view('/', 'bahooosh::index');

Route::get('/', \Harvest\Bahooosh\Livewire\Pages\IndexPage::class);
Route::view('/features', 'bahooosh::features');
