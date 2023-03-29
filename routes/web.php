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

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/berita', function () {
    return view('berita');
});


Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/kontak', function () {
    return view('kontak');
});
