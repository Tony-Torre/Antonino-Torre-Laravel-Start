<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stringa', function () {
    return 'sono una stringa';
});

Route::get('/intero', function () {
    return 323232;
});


Route::get('/array', function () {
    $array = ['sono','un','array'];
    return $array;
});

Route::get('/chisiamo', function () {
    return view('chisiamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/storia', function () {
    return view('storia');
});