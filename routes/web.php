<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Panel;

Route::prefix('panel')->name('panel.')->group(function () {
    Route::get('/login', Panel\Auth\Login::class)->name('login')->middleware('guest');

    Route::middleware(['auth:web' , 'role_check:panel'])->group(function () {
        Route::get('/' , Panel\IndexPanel::class)->name('index');
        Route::get('/logout' , [\App\Http\Controllers\Panel\PanelController::class , 'logout'])->name('logout');

        Route::prefix('posts')->name('posts.')->group(function () {
            Route::get('/' , Panel\Posts\PostIndex::class)->name('index')->middleware('can:posts.read');
            Route::get('/create' , Panel\Posts\PostCreate::class)->name('create')->middleware('can:posts.create');
            Route::get('/{id}/edit' , Panel\Posts\PostEdit::class)->name('edit')->middleware('can:posts.create');
        });

        Route::prefix('pages')->name('pages.')->group(function () {
            Route::get('/' , Panel\Pages\PageIndex::class)->name('index')->middleware('can:pages.read');
            Route::get('/create' , Panel\Pages\PageCreate::class)->name('create')->middleware('can:pages.create');
            Route::get('/{id}/edit' , Panel\Pages\PageEdit::class)->name('edit')->middleware('can:pages.create');
        });
        Route::prefix('links')->name('links.')->group(function () {
            Route::get('/' , Panel\Links\LinkEdit::class)->name('index')->middleware('can:links.read');
        });

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/' , Panel\Setting\SettingPage::class)->name('index')->middleware('can:settings.read');
            Route::get('/seo' , Panel\Setting\SeoPage::class)->name('seo')->middleware('can:settings.read');

        });

        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/' , Panel\Users\UserIndex::class)->name('index')->middleware('can:users.read');
            Route::get('/create' , Panel\Users\UserCreate::class)->name('create')->middleware('can:users.create');
            Route::get('/{id}/edit' , Panel\Users\UserEdit::class)->name('edit')->middleware('can:users.edit');
        });

        Route::prefix('roles')->name('roles.')->group(function () {
            Route::get('/' , Panel\Roles\RoleIndex::class)->name('index')->middleware('can:roles.read');
            Route::get('/create' , Panel\Roles\RoleCreate::class)->name('create')->middleware('can:roles.create');
            Route::get('/{id}/edit' , Panel\Roles\RoleEdit::class)->name('edit')->middleware('can:roles.edit');
        });


        Route::prefix('comments')->name('comments.')->group(function () {
           Route::get('/{post?}' , Panel\Comments\CommentIndex::class)->name('index');
        });

        Route::get('/fileManger', Panel\Utils\StandaloneUploader::class)->name('fileManger')->middleware('can:files');


        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('/' , Panel\Categories\CategoryIndex::class)->name('index')->middleware('can:categories.read');
            Route::get('/create' , Panel\Categories\CategoryCreate::class)->name('create')->middleware('can:categories.create');
            Route::get('/{id}/edit' , Panel\Categories\CategoryEdit::class)->name('edit')->middleware('can:categories.edit');
        });

        Route::get('/fileManger/tinymce5', Panel\Utils\StandaloneUploader::class)->name('fileManger.tinymce5');
    });
});

Route::get('/robots.txt' , [App\Http\Controllers\Seo\SeoController::class , 'robots']);
