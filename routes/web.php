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


Route::prefix('admin')->group(function (){
    Route::match(['GET','POST'],'', [\App\Http\Controllers\DashboardController::class,'index'])->name('adminberanda');

    Route::get('/tentang', function () {
        return view('/admin/tentang/tentang');
    })->name('admintentang');
});



Route::get('/admin/pendidikan', function () {
    return view('/admin/pendidikan/pendidikan');
})->name('adminpendidikan');

Route::get('/admin/berita', function () {
    return view('/admin/berita/berita');
})->name('adminberita');

Route::get('/admin/testimoni', function () {
    return view('/admin/tentang/testimoni');
})->name('admintestimoni');

Route::get('/admin/blog', function () {
    return view('/admin/blog/blog');
})->name('adminblog');

Route::get('/admin/kontak', function () {
    return view('/admin/kontak/kontak');
})->name('adminkontak');
