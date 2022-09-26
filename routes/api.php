<?php

use App\Http\Controllers\API\DinasController;
use App\Http\Controllers\API\UserController;
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

Route::get('users', [UserController::class, 'index']);
Route::get('users/show/{id}', [UserController::class, 'show']);
Route::post('users/store', [UserController::class, 'store']);
Route::post('users/update/{id}', [UserController::class, 'update']);
Route::get('users/destroy/{id}', [UserController::class, 'destroy']);


Route::get('dinas/', [DinasController::class, 'index']);
Route::get('dinas/show/{id}', [DinasController::class, 'show']);
Route::get('dinas/destroy/{id}', [DinasController::class, 'destroy']);
Route::post('dinas/store', [DinasController::class, 'store']);
Route::post('dinas/update/{id}', [DinasController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
