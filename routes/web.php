<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
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

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index')->middleware('isLogin');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create')->middleware('isLogin');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store')->middleware('isLogin');
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit')->middleware('isLogin');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update')->middleware('isLogin');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy')->middleware('isLogin');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index')->middleware('isLogin');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create')->middleware('isLogin');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store')->middleware('isLogin');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit')->middleware('isLogin');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update')->middleware('isLogin');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy')->middleware('isLogin');

Route::get('/userLogin', [UserController::class, 'index'])->middleware('isTamu');
Route::post('/userLogin/login', [UserController::class, 'login'])->middleware('isTamu');
Route::get('/userLogin/logout', [UserController::class, 'logout']);

Route::get('/userLogin/register', [UserController::class, 'register'])->middleware('isTamu');
Route::post('/userLogin/create', [UserController::class, 'create'])->middleware('isTamu');

