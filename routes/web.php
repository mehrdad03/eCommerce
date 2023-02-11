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


Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/home', function () {
            return view('admin.home');
        })->name('home');

        Route::prefix('brands')->name('brands.')->group(function () {

            Route::get('/index', App\Http\Livewire\Admin\index\livewire\brand\index::class)->name('index');
            Route::get('/create', App\Http\Livewire\Admin\index\livewire\brand\create::class)->name('create');
            Route::get('/edit', App\Http\Livewire\Admin\index\livewire\brand\edit::class)->name('edit');
        });

        Route::prefix('sizes')->name('categories.')->group(function () {

            Route::get('/index', App\Http\Livewire\Admin\index\livewire\size\index::class)->name('index');
            Route::get('/create', App\Http\Livewire\Admin\index\livewire\size\create::class)->name('create');
            Route::get('/edit', App\Http\Livewire\Admin\index\livewire\size\edit::class)->name('edit');
        });

        Route::prefix('colors')->name('products.')->group(function () {

            Route::get('/index', App\Http\Livewire\Admin\index\livewire\color\index::class)->name('index');
            Route::get('/create', App\Http\Livewire\Admin\index\livewire\color\create::class)->name('create');
            Route::get('/edit', App\Http\Livewire\Admin\index\livewire\color\edit::class)->name('edit');

        });
    });

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/login', function () {
            return view('admin.auth.login');
        })->name('login');

        Route::post('/login/store', [AdminController::class, 'LoginStore'])->name('check');
    });

    Route::get('/phpinfo', function () {
        return phpinfo();
    });
});
