<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MecasController;
use App\Http\Controllers\SuporteController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CompararController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PecaController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias');
Route::get('/comparar', [CompararController::class, 'index'])->name('comparar');

Route::get('/mecas', [MecasController::class, 'index'])->name('mecas.index');
Route::get('/mecas/create', [MecasController::class, 'create'])->name('mecas.create');
Route::post('/mecas', [MecasController::class, 'store'])->name('mecas.store');
Route::get('/mecas/{id}', [MecasController::class, 'show'])->name('mecas.show');
Route::get('/mecas/{id}/edit', [MecasController::class, 'edit'])->name('mecas.edit');
Route::put('/mecas/{id}', [MecasController::class, 'update'])->name('mecas.update');
Route::delete('/mecas/{id}', [MecasController::class, 'destroy'])->name('mecas.destroy');

// Remova ou atualize as rotas associadas ao sistema de mensagens
Route::get('/suporte', [SuporteController::class, 'index'])->name('suporte.index');
Route::post('/suporte', [SuporteController::class, 'store'])->name('suporte.store');
Route::delete('/suporte/{id}', [SuporteController::class, 'destroy'])->name('suporte.destroy');

Route::get('/mechas', [HomeController::class, 'getMechas']);


Route::resource('pecas', PecaController::class);

