<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;

Route::get('/mapa', [MapController::class, 'mostrarMapa'])->name('mapa');


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
//Route::get('/mapa', 'MapController@mostrarMapa')->name('mapa');

Route::get('/', function () {
    return view('welcome');
});



