<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "done";
});


Route::get('/', function () {
    return view('index');
});

Route::get('page/{slug}', [SiteController::class, 'page'])->name('page');
Route::get('contact-us', [SiteController::class, 'contactUs'])->name('contactUs');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
