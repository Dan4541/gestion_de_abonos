<?php

use App\Http\Controllers\AbonosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\VentasController;
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

Route::get('/', [ClientesController::class, 'index'])->name('index');
Route::post('/store', [ClientesController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ClientesController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [ClientesController::class, 'update'])->name('update');
Route::delete('delete/{id}', [ClientesController::class, 'delete'])->name('delete');

Route::get('/ventas', [VentasController::class, 'index'])->name('ventas-index');
Route::post('ventas/store', [VentasController::class, 'store'])->name('ventas-store');

Route::get('/abonos', [AbonosController::class, 'index'])->name('abonos-index');