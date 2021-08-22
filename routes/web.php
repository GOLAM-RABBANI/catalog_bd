<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('master_product', [App\Http\Controllers\WelcomeController::class, 'master_product'])->name('master_product');
Route::get('/category_product/{id}', [App\Http\Controllers\PostController::class, 'category_product']);

Auth::routes();
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/upload_file', [App\Http\Controllers\PostController::class, 'create'])->name('upload_file');
    Route::post('/import_excel', [App\Http\Controllers\PostController::class, 'import']);
    Route::get('/products', [App\Http\Controllers\PostController::class, 'index']);
    Route::get('/delete_all', [App\Http\Controllers\PostController::class, 'delete_all']);

    Route::post('/import_category_excel', [App\Http\Controllers\CategoryController::class, 'import']);
    Route::get('/upload_category_file', [App\Http\Controllers\CategoryController::class, 'create'])->name('upload_category_file');
    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);

    Route::get('/upload_master_file', [App\Http\Controllers\MasterProductController::class, 'create'])->name('upload_master_file');
    Route::post('/import_master_excel', [App\Http\Controllers\MasterProductController::class, 'import']);
    Route::get('/master_product_list', [App\Http\Controllers\MasterProductController::class, 'master_product_list']);
});
