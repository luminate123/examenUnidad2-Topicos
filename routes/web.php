<?php

use App\Http\Controllers\alumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ingreso', function () {
    return view('ingreso');
});


Route::get('/listado', [alumnoController::class, 'listado'])->name('listado');

Route::get('/ver/{id}', [alumnoController::class, 'show'])->name('ingreso.show');


Route::post('/ingresonota', [alumnoController::class, 'store'])->name('ingreso.store');