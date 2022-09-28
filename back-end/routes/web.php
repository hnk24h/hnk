<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\CategoryList;
use App\Http\Livewire\Admin\ProductList;
use App\Http\Livewire\Admin\ProductCreator;
use App\Http\Livewire\Admin\ProductManager;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::view('/', 'dashboard');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/categories', CategoryList::class)->name('categories.index');

    Route::get('products', ProductList::class)->name('products');
    Route::get('products/create', ProductCreator::class)->name('products.create');
    Route::get('products/{product}', ProductManager::class)->name('products.edit');
});

require __DIR__.'/auth.php';
