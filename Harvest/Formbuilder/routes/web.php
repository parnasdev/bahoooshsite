<?php
use Illuminate\Support\Facades\Route;
use Harvest\Formbuilder\Livewire\Panel;
Route::prefix('panel/forms')->name('panel.forms.')->middleware(['web' , 'auth' , 'role_check:panel'])->group(function () {
   Route::get('/', Panel\FormIndex::class)->name('index');
   Route::get('/create', Panel\FormCreate::class)->name('create');
   Route::get('/{id}/edit', Panel\FormEdit::class)->name('edit');
   Route::get('/{id}/inboxes', Panel\FormInbox::class)->name('inboxes');
});
