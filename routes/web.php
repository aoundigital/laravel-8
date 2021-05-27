<?php

use App\Http\Controllers\PropriedadeController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\ViagemController;
use Illuminate\Support\Facades\Route;

// rota de viagens
Route::post('viagens', [ViagemController::class, 'store'])->name('viagens.enviar');
Route::get('viagens/criar', [ViagemController::class, 'create'])->name('viagens.criar');
Route::get('viagens', [ViagemController::class, 'index'])->name('viagens.index');
// rota de propriedades
Route::get('propriedades', [PropriedadeController::class, 'index'])->name('propriedades.index');
// rota de sócios
Route::get('socios', [SocioController::class, 'index'])->name('socios.index');
// rota inicial
Route::get('/', function () {return view('welcome');});
