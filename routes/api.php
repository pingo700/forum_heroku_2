<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
  Route::get('/logout', [AuthController::class, 'logout']);
  Route::get('/user', [AuthController::class, 'users']);
  Route::resource('/comentario',ControladorComentarios::class);
  Route::resource('/judo',ControladorJudo::class);
  Route::resource('/xadrez',ControladorXadrez::class);
  Route::resource('/skate',ControladorSkate::class);
});
