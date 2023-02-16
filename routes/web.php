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

    Route::get('/index', App\Http\Livewire\Admin\Index\index::class)->name('index');

    Route::prefix('categories')->name('categories')->group(function () {
        Route::get('/index', App\Http\Livewire\Admin\category\Index::class)->name('index');
    });

    Route::prefix('products')->name('products.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\product\Index::class)->name('index');
        Route::get('/add', App\Http\Livewire\Admin\product\Add::class)->name('add');
        Route::get('/category', App\Http\Livewire\Admin\product\Category::class)->name('category');

    });
    Route::prefix('colors')->name('colors.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\Color\index::class)->name('index');
        Route::get('/create', App\Http\Livewire\Admin\color\Create::class)->name('create');
        Route::get('/edit', App\Http\Livewire\Admin\color\Edit::class)->name('edit');
    });
    Route::prefix('sizes')->name('sizes.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\size\Index::class)->name('index');
        Route::get('/create', App\Http\Livewire\Admin\size\Create::class)->name('create');
        Route::get('/edit', App\Http\Livewire\Admin\size\Edit::class)->name('edit');
    });
    Route::prefix('brands')->name('brands.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\brand\Index::class)->name('index');
        Route::get('/create', App\Http\Livewire\Admin\brand\Create::class)->name('create');
        Route::get('/edit', App\Http\Livewire\Admin\brand\Edit::class)->name('edit');
    });
    Route::prefix('orders')->name('orders.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\order\Index::class)->name('index');
        Route::get('/invoice', App\Http\Livewire\Admin\order\Invoice::class)->name('invoice');
        Route::get('/tracking', App\Http\Livewire\Admin\order\Tracking::class)->name('tracking');
        Route::get('/detail', App\Http\Livewire\Admin\order\Detail::class)->name('detail');
    });
    Route::prefix('profile')->name('profile.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\profile\Index::class)->name('index');
    });
    Route::prefix('report')->name('report.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\report\Index::class)->name('index');
    });
    Route::prefix('review')->name('review.')->group(function () {

        Route::get('/index', App\Http\Livewire\Admin\review\Index::class)->name('index');
    });
    Route::prefix('sellers')->name('sellers.')->group(function () {

        Route::get('/card', App\Http\Livewire\Admin\seller\Card::class)->name('card');
        Route::get('/profile', App\Http\Livewire\Admin\seller\Profile::class)->name('profile');
    });
    Route::prefix('transactions')->name('transactions.')->group(function () {

        Route::get('/detail', App\Http\Livewire\Admin\transaction\Detail::class)->name('detail');
        Route::get('/index', App\Http\Livewire\Admin\transaction\Index::class)->name('index');
    });
});
