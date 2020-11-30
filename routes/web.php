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

Route::get('/index', function () {
    return view('index', [
        'pageTitle' => 'Home',
        'currentNavItem' => 'index',
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        'pageTitle' => 'Contact',
        'currentNavItem' => 'contact',
    ]);
});

Route::get('/cars', [\App\Http\Controllers\CarController::class, 'list'])
    ->name('car-list');
Route::get('/cars/{id}/{originRouteName?}', [\App\Http\Controllers\CarController::class, 'detail'])
    ->where('id', '\d+')
    ->where('originRouteName', '(?:car-list)')
    ->name('car-detail');

// fallback route
Route::get('/{any?}', function () {
    return redirect('/index', 303);
});
