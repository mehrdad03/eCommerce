<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Index\index;

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

//    Route::prefix('colors')->name('colors.')->group(function () {

//        Route::get('/index',  App\Http\Livewire\Admin\Color\index::class)->name('index');
//        Route::get('/create', App\Http\Livewire\Admin\color\Create::class)->name('create');
//        Route::get('/edit/{id}', App\Http\Livewire\Admin\color\Edit::class)->name('edit');
//    });
//
//    Route::prefix('sizes')->name('sizes.')->group(function () {
//
//        Route::get('/index', App\Http\Livewire\Admin\sizes\Index::class)->name('index');
//        Route::get('/create', App\Http\Livewire\Admin\sizes\Create::class)->name('create');
//        Route::get('/edit/{id}', App\Http\Livewire\Admin\sizes\Edit::class)->name('edit');
//    });
//
//    Route::prefix('brands')->name('brands.')->group(function () {
//
//        Route::get('/index', App\Http\Livewire\Admin\brands\Index::class)->name('index');
//        Route::get('/create', App\Http\Livewire\Admin\brands\Create::class)->name('create');
//        Route::get('/edit/{id}', App\Http\Livewire\Admin\brands\Edit::class)->name('edit');
    });
//});
