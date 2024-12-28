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
    return view('welcome');
});

Route::get('/practice', function () {
    return view('practice');
});

Route::get('/basic', function () {
    return view('basic');
});

Route::get('/new', function () {
    return view('new');
});
Route::get('/new1', function () {
    return view('new1');
});
Route::get('/new2', function () {
    return view('new2');
});
Route::get('/syntax', function () {
    return view('syntax');
});