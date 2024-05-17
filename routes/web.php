<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParqueaderoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MetodoDePagoController;
use App\Http\Controllers\LocalizacionController;

Route::get('/', function () {
    return view('auth/login');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/parqueaderos', ParqueaderoController::class);
Route::resource('/reservas', ReservaController::class);
Route::resource('/localizacion', LocalizacionController::class);
Route::resource('/metododepago', MetodoDePagoController::class);
