<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstablecimientoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::resource('user',UserController::class);
Route::resource('establecimiento',EstablecimientoController::class);

Route::get('vehiculo/import-form',[VehiculoController::class,'importacion'])->name('vehiculo.import-form');
Route::post('vehiculo/import',[VehiculoController::class,'import'])->name('vehiculo.import');
Route::resource('vehiculo',VehiculoController::class);




