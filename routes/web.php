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


    Route::get('/index', Index::class)->name('index');

    Route::prefix('colors')->name('colors.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\colors\Index::class)->name('index');
        Route::get('/create', App\Http\Livewire\Admin\colors\Create::class)->name('create');
        Route::get('/edit/{id}', App\Http\Livewire\Admin\colors\Edit::class)->name('edit');
    });
    Route::prefix('sizes')->name('sizes.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\sizes\Index::class)->name('index');
        Route::get('/create', App\Http\Livewire\Admin\sizes\Create::class)->name('create');
        Route::get('/edit/{id}', App\Http\Livewire\Admin\sizes\Edit::class)->name('edit');
    });
    Route::prefix('brands')->name('brands.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\brands\Index::class)->name('index');
        Route::get('/create', App\Http\Livewire\Admin\brands\Create::class)->name('create');
        Route::get('/edit/{id}', App\Http\Livewire\Admin\brands\Edit::class)->name('edit');
    });

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/login', function () {
            return view('admin.login');
        });
        Route::get('/login', Login::class)->name('login');
    });
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/register', function () {
            return view('admin.register');
        });
        Route::get('/register', Register::class)->name('register');
    });
//    });
});
