<?php

use App\Models\Platillo;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GerenteController;
use \App\Http\Controllers\JefeMeseroController;
use \App\Http\Controllers\MeseroController;
use \App\Http\Controllers\PlatilloController;
use \App\Http\Controllers\DynamicPDFController;

use App\Http\Controllers\TicketController;
use App\Models\Orden;
use App\Models\Ticket;
use Illuminate\Http\Request;

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
        Route::resource('informes', DynamicPDFController::class);

        // Route::get('informes', 'App\Http\Controllers\DynamicPDFController@index')->name('informes.index');
        // Route::get('informes/PDF', 'App\Http\Controllers\DynamicPDFController@pdf')->name('informes.PDF');

    });
   Route::group(['middleware' => 'role:jefemeseroR', 'prefix' => 'jefemeseroR', 'as' => 'jefemeseroR.'], function() {
        Route::resource('meseros', MeseroController::class);
        Route::resource('platillos', PlatilloController::class);
   });
});

Route::get('/', function () {
    $platillos = Platillo::all();
    return view('home', compact('platillos'));
 })->name('home');

 Route::get('/ordenar/{id}', function ($ticketId) {
    $platillos = Platillo::all();
    $ordenes = Orden::where('ticket_id', $ticketId)->get();
    return view('ordenar', compact('platillos','ticketId','ordenes'));
 })->name('ordenar');


//Ticket Routes
Route::get('ticket', 'App\Http\Controllers\TicketController@create')->name('ticket.create');
Route::post('ticket', 'App\Http\Controllers\TicketController@store')->name('ticket.store');
Route::delete('ticket/destroy/{id}', 'App\Http\Controllers\TicketController@destroy')->name('ticket.destroy');
Route::get('ticket/finish/{id}', 'App\Http\Controllers\TicketController@finish')->name('ticket.finish');

//Orden Routes

Route::post('orden', 'App\Http\Controllers\OrdenController@store')->name('ordena.store');
Route::delete('orden/destroy/{id}', 'App\Http\Controllers\OrdenController@destroy')->name('orden.destroy');

Route::resource('informes', DynamicPDFController::class);

//Login with Google Routes
use App\Http\Controllers\LoginWithGoogleController;

Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
//Send Email
Route::get('/send-email', [MailController::class, 'sendEmail']);

use App\Mail\TestMail;
Route::get('/email', function(){
    $correo = new TestMail;
    Mail::to('adrian.estevez7475@alumnos.udg.mx')->send($correo);

    return "Mensaje Enviado";
});