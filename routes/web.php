<?php

use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\ConvidadoController;
use App\Http\Controllers\PernoiteController;
use App\Http\Controllers\PropriedadeController;
use App\Http\Controllers\ReembolsoController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\TransladoController;
use App\Http\Controllers\ViagemController;
use Illuminate\Support\Facades\Route;

// rota de viagens
Route::post('viagens', [ViagemController::class, 'store'])->name('viagens.enviar');
Route::get('viagens/criar', [ViagemController::class, 'create'])->name('viagens.criar');
Route::get('viagens', [ViagemController::class, 'index'])->name('viagens.index');
// rota de avaliacoes
Route::get('avaliacoes', [AvaliacaoController::class, 'index'])->name('avaliacoes.index');
// rota de propriedades
Route::get('propriedades', [PropriedadeController::class, 'index'])->name('propriedades.index');
// rota de sócios
Route::get('socios', [SocioController::class, 'index'])->name('socios.index');
// rota de reembolso
Route::get('reembolsos', [ReembolsoController::class, 'index'])->name('reembolsos.index');
// rota de pernoite
Route::get('pernoites', [PernoiteController::class, 'index'])->name('pernoites.index');
// rota de translado
Route::get('translados', [TransladoController::class, 'index'])->name('translados.index');
// rota de convidado
Route::get('convidados', [ConvidadoController::class, 'index'])->name('convidados.index');
// rota inicial
Route::get('/', function () {return view('welcome');});
