<?php
use Harvest\Bahooosh\Facades\Bahooosh;

Bahooosh::routes(config('cms.prefix_route'));

//Route::prefix('demo')->group(function () {
//    Route::view('/', 'bahooosh::index');
//    Route::view('/features', 'bahooosh::features');
//    Route::view('/prices', 'bahooosh::prices');
//    Route::view('/portfolio', 'bahooosh::portfolio');
//    Route::view('/posts', 'bahooosh::posts');
//    Route::view('/posts/info', 'bahooosh::postInfo');
//    Route::view('/notfound', 'bahooosh::404');
//    Route::view('/aboutus', 'bahooosh::aboutus');
//    Route::view('/contactus', 'bahooosh::contactus');
//    Route::view('/editor', 'bahooosh::editor');
//    Route::view('/subscription', 'bahooosh::subscription');
//});
