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

// ADMIN


Route::get('/admin', function () {
    return view('/admin/beranda/beranda');
})->name('adminberanda');


Route::get('/admin/tentang', function () {
    return view('/admin/tentang/tentang');
})->name('admintentang');

Route::get('/admin/pendidikan', function () {
    return view('/admin/tentang/pendidikan');
})->name('adminpendidikan');

Route::get('/admin/berita', function () {
    return view('/admin/tentang/berita');
})->name('adminberita');

Route::get('/admin/testimoni', function () {
    return view('/admin/tentang/testimoni');
})->name('admintestimoni');

Route::get('/admin/blog', function () {
    return view('/admin/tentang/blog');
})->name('adminblog');

Route::get('/admin/kontak', function () {
    return view('/admin/tentang/kontak');
})->name('adminkontak');
