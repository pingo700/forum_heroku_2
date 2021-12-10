<?php
use App\Http\Controllers\ControladorAssuntos;
use App\Http\Controllers\ControladorComentarios;
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


Route::middleware(['auth:sanctum', 'verified'])->group( function () {

    Route::get('/dashboard', function () {
    return view('forum/perfil');
  })->name('dashboard');
    Route::resource('skate',ControladorComentarios::class);
    Route::resource('judo',ControladorComentarios::class);
    Route::resource('xadrez',ControladorComentarios::class);
    Route::resource('assuntos',ControladorAssuntos::class);
});