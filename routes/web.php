<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('doc_documentos', App\Http\Controllers\DocDocumentoController::class);
Route::resource('tip_tipo_docs', App\Http\Controllers\TipTipoDocController::class);
Route::resource('pro_procesos', App\Http\Controllers\ProProcesoController::class);