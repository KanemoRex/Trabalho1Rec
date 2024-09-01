<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MecasController;
use App\Http\Controllers\SuporteController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CompararController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mecas', [MecasController::class, 'index'])->name('mecas');
Route::get('/suporte', [SuporteController::class, 'index'])->name('suporte');
Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias');
Route::get('/comparar', [CompararController::class, 'index'])->name('comparar');
