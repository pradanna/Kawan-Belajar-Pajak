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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'welcome_page']);

Route::get(
    '/tentang',
    [\App\Http\Controllers\AboutController::class, 'about_page']
);

Route::get(
    '/pendidikan',
    [\App\Http\Controllers\EducationController::class, 'education_page']
);

Route::get(
    '/berita',
    [\App\Http\Controllers\NewsController::class, 'news_page']
);

Route::get(
    '/testimoni',
    [\App\Http\Controllers\StudentController::class, 'testimony_page']
);

Route::get(
    '/blog',
    [\App\Http\Controllers\BlogController::class, 'blog_page']
);

Route::get(
    '/kontak',
    [\App\Http\Controllers\ContactController::class, 'contact_Page']
);

// ADMIN

Route::prefix('admin')->middleware('auth')->group(
    function () {
        Route::match(['GET', 'POST'], '', [\App\Http\Controllers\DashboardController::class, 'index'])->name('adminberanda');

        Route::prefix('tentang')->group(
            function () {
                Route::match(['GET', 'POST'], '/', [\App\Http\Controllers\AboutController::class, 'index'])->name('admintentang');
                Route::prefix('team')->group(
                    function () {
                        Route::match(['GET', 'POST'], '', [\App\Http\Controllers\TeamController::class, 'index'])->name('admintentang.team');
                        Route::post('/{id}/delete', [\App\Http\Controllers\TeamController::class, 'delete'])->name('admintentang.team.delete');
                    }
                );
                Route::prefix('siswa')->group(
                    function () {
                        Route::match(['GET', 'POST'], '', [\App\Http\Controllers\StudentController::class, 'index'])->name('admintentang.student');
                        Route::post('/{id}/delete', [\App\Http\Controllers\StudentController::class, 'delete'])->name('admintentang.student.delete');
                    }
                );
                Route::match(['GET', 'POST'], 'image', [\App\Http\Controllers\AboutController::class, 'image'])->name('admintentang.image');
            }
        );
        Route::prefix('pendidikan')->group(
            function () {
                Route::match(['GET', 'POST'], '', [\App\Http\Controllers\EducationController::class, 'index'])->name('adminpendidikan');
                Route::post('/{id}/delete', [\App\Http\Controllers\EducationController::class, 'delete'])->name('adminpendidikan.delete');
                Route::get('datatable', [\App\Http\Controllers\EducationController::class, 'datatable'])->name('adminpendidikan.datatable');
            }
        );

        Route::prefix('berita')->group(
            function () {
                Route::match(['GET', 'POST'], '', [\App\Http\Controllers\NewsController::class, 'index'])->name('adminberita');
                Route::post('/{id}/delete', [\App\Http\Controllers\NewsController::class, 'delete'])->name('adminberita.delete');
                Route::get('datatable', [\App\Http\Controllers\NewsController::class, 'datatable'])->name('adminberita.datatable');
            }
        );

        Route::prefix('blog')->group(
            function () {
                Route::match(['GET', 'POST'], '', [\App\Http\Controllers\BlogController::class, 'index'])->name('adminblog');
                Route::post('/{id}/delete', [\App\Http\Controllers\BlogController::class, 'delete'])->name('adminblog.delete');
                Route::get('datatable', [\App\Http\Controllers\BlogController::class, 'datatable'])->name('adminblog.datatable');
            }
        );

        Route::prefix('administrator')->middleware(\App\Http\Middleware\Administrator::class)->group(
            function () {
                Route::match(['GET', 'POST'], '', [\App\Http\Controllers\AdminController::class, 'index'])->name('administrator');
                Route::post('/{id}/delete', [\App\Http\Controllers\AdminController::class, 'delete'])->name('administrator.delete');
                Route::get('datatable', [\App\Http\Controllers\AdminController::class, 'datatable'])->name('administrator.datatable');
            }
        );
    }
);

Route::match(['POST', 'GET'], '/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');



Route::get(
    '/admin/testimoni',
    function () {
        return view('/admin/tentang/testimoni');
    }
)->name('admintestimoni');


Route::get(
    '/admin/kontak',
    function () {
        return view('/admin/kontak/kontak');
    }
)->name('adminkontak');
