<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServidoresController;
use App\Http\Controllers\ContrasenasController;

Route::get('/', function () {
    return view('panel/template');
});

Route::get('/contrasenas/create', [ContrasenasController::class, 'create'])->name('contrasenas.create');
Route::get('/contrasenas/index', [ContrasenasController::class, 'index'])->name('contrasenas.index');
Route::post('contrasenas/store', [ContrasenasController::class, 'store'])->name('contrasenas.store');

Route::get('servidores/create', [ServidoresController::class, 'create'])->name('servidores.create');
Route::post('servidores/store', [ServidoresController::class, 'store'])->name('serve.store');
Route::get('servidores/index', [ServidoresController::class, 'index'])->name('servidores.index');
Route::delete('servidores/destroy/{id}', [ServidoresController::class, 'destroy'])->name('servidores.destroy');

