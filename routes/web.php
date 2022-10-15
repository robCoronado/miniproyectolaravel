<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('vistauno', 'App\Http\Controllers\controladorvistas1@vista1');
Route::get('vistados', 'App\Http\Controllers\controladorvistas1@vista2');
Route::get('vistatres', 'App\Http\Controllers\controladorvistas1@vista3');
Route::get('vistacuatro', 'App\Http\Controllers\controladorvistas1@vista4');
Route::get('vistacinco', 'App\Http\Controllers\controladorvistas1@vista5');
Route::get('vistaseis', 'App\Http\Controllers\controladorvistas1@vista6');
Route::get('regislibro', 'App\Http\Controllers\controladorvistas1@registrarlibro');
Route::get('consullibro', 'App\Http\Controllers\controladorvistas1@consultarlibros');

Route::get('registrarlibro', 'App\Http\Controllers\controladorvistas1@registrarlibro')->name('registrarlibro');
Route::post('guardarlibro', 'App\Http\Controllers\controladorvistas1@guardarlibro')->name('guardarlibro');

Route::get('consultalibros', 'App\Http\Controllers\controladorvistas1@consultarlibros')->name('consultalibros');
Route::get('eliminar/{id}', 'App\Http\Controllers\controladorvistas1@eliminarLibro')->name('eliminarlibro');

Route::get('mostrar/{id}', 'App\Http\Controllers\controladorvistas1@modilibros')->name('modilibro');
Route::post('edit/{id}', 'App\Http\Controllers\controladorvistas1@editlibros')->name('editlibro');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
