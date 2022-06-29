<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
// |
// */
// Route::get('/conctactos', function () {
//     //App::setLocale($lang);

//     return view('conctactos');
// });
Route::get('/{lang}/vista', function ($lang) {
    App::setLocale($lang);

    return view('vista');
});

Route::get('/{lang}/registro', function ($lang) {
    App::setLocale($lang);

    return view('registro');
});
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
