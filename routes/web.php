<?php

use App\Http\Controllers\ViagemController;
use Illuminate\Support\Facades\Route;

Route::post('viagens', [ViagemController::class, 'store'])->name('viagens.enviar');
Route::get('viagens/criar', [ViagemController::class, 'create'])->name('viagens.criar');
Route::get('viagens', [ViagemController::class, 'index'])->name('viagens.index');

Route::get('/', function () {
    return view('welcome');
});
