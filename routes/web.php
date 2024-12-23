<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServidoresController;
use App\Http\Controllers\ContrasenasController;

Route::get('/', function () {
    return view('panel/template');
});
Route::get('/contrasenas', [ContrasenasController::class, 'index'])->name('index');

Route::get('/', [ServidoresController::class, 'index'])->name('index');

Route::get('/contrasenas/create', [ContrasenasController::class, 'create'])->name('contrasenas.create');
Route::get('/contrasenas/index', [ContrasenasController::class, 'index'])->name('contrasenas.index');
Route::post('contrasenas/store', [ContrasenasController::class, 'store'])->name('contrasenas.store');
Route::delete('contrasenas/destroy/{id}', [ContrasenasController::class, 'destroy'])->name('contrasenas.destroy');
Route::get('contrasenas/show/{id}', [ContrasenasController::class, 'show'])->name('contrasenas.show');
Route::get('contrasenas/edit/{id}', [ContrasenasController::class, 'edit'])->name('contrasenas.edit');
Route::put('contrasenas/update/{id}', [ContrasenasController::class, 'update'])->name('contrasenas.update');


Route::get('modules/servidores/create', [ServidoresController::class, 'create'])->name('servidores.create');
Route::post('servidores/store', [ServidoresController::class, 'store'])->name('serve.store');
Route::get('servidores/index', [ServidoresController::class, 'index'])->name('servidores.index');
Route::delete('servidores/destroy/{id}', [ServidoresController::class, 'destroy'])->name('servidores.destroy');
Route::get('servidores/show/{id}', [ServidoresController::class, 'show'])->name('servidores.show');
Route::get('servidores/edit/{id}', [ServidoresController::class, 'edit'])->name('servidores.edit');
Route::put('servidores/update/{id}', [ServidoresController::class, 'update'])->name('servidores.update');

