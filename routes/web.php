<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/section1', function () {
    return view('admin.section1');
});

Route::get('/section2', function () {
    return view('admin.section2');
});

// Activity: Menus (Blade inheritance)
Route::prefix('menus')->group(function () {
    Route::get('/', function () {
        return view('menus.home');
    })->name('menus.home');

    Route::get('/photos', function () {
        return view('menus.photos');
    })->name('menus.photos');

    Route::get('/contact', function () {
        return view('menus.contact');
    })->name('menus.contact');
});
