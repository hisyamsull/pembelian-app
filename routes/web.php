<?php

use App\Http\Controllers\pembielian_controller;
use App\Http\Controllers\product_controller;
use App\Models\product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [product_controller::class, 'loginView'])->middleware('guest')->name('login');


Route::get('/', [product_controller::class, 'index'])->middleware('auth');
Route::get('/pembelian/{product:id}', [pembielian_controller::class, 'add']);
Route::get('/beli', [pembielian_controller::class, 'show']);
Route::get('/delete/{pembelian:nama_pembeli}', [pembielian_controller::class, 'delete']);
Route::post('/login', [product_controller::class, 'proseslogin']);
Route::post('/', [pembielian_controller::class, 'addproses']);
Route::post('/logout', [product_controller::class, 'logout']);
