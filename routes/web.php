<?php

use App\Models\Platillo;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GerenteController;
use \App\Http\Controllers\JefeMeseroController;
use \App\Http\Controllers\MeseroController;
use \App\Http\Controllers\PlatilloController;
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
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:gerenteR', 'prefix' => 'gerenteR', 'as' => 'gerenteR.'], function() {
        Route::resource('jefemeseros', JefeMeseroController::class);
    });
   Route::group(['middleware' => 'role:jefemeseroR', 'prefix' => 'jefemeseroR', 'as' => 'jefemeseroR.'], function() {
        Route::resource('meseros', MeseroController::class);
   });
    Route::group(['middleware' => 'role:meseroR', 'prefix' => 'meseroR', 'as' => 'meseroR.'], function() {
        Route::resource('platillos', PlatilloController::class);
    });
});

Route::get('/', function () {
    $platillos = Platillo::all();
    return view('home', compact('platillos'));
 })->name('home');

 Route::get('/ordenar', function () {   //para clientes
    $platillos = Platillo::all();
    return view('ordenar', compact('platillos'));
 })->name('ordenar');
