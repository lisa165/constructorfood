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
    return view('index');
});

Route::get('/salads.php', function () {
    return view('salads');
});

Route::get('/salat2.php', function () {
    return view('salat2');
});

Route::get('/about us.php', function () {
    return view('about Us');
});
Route::get('/bakery.php', function () {
    return view('bakery');
});