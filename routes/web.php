<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('productos/stock-alto', [ProductoController::class, 'stockAlto'])->name('productos.stockAlto');
Route::resource('productos', ProductoController::class);