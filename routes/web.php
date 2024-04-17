<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\RetiroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/afiliado', function () {
    return view('afiliado.index');
});



Route::resource('/empleado','App\Http\Controllers\EmpleadoController');

Route::resource('/afiliado','App\Http\Controllers\AfiliadoController');


Route::resource('/retiro','App\Http\Controllers\RetiroController');

route::get('/retiro/{id}/{id2}',[RetiroController::class,'show']);

route::get('/retiro/create/{id}/{id2}',[RetiroController::class,'create']);



Route::get('/retiros', function () {
    return view('retiros.index');
});


Route::get('/depositos', function () {
    return view('depositos.index');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
