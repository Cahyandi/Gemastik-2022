<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\DatapetugasController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/daftar-wisata', function () {
    return view('daftar_wisata');
});

Route::get('/dashboard', function () {
    return view('back_end.dashboard.index', [
        'title' => 'Dashboard'
    ]);
});
Route::resource('/data-user', DatauserController::class);
Route::resource('/data-petugas', DatapetugasController::class);
Route::resource('/wisata', WisataController::class);
// Route::get('wisata/show/{id}', [WisataController::class, 'show']);

Route::get('/gemastik', function () {
    return view('Gemastik');
});

Route::post('authenticate', [AuthUserController::class, 'authenticate']);
Route::post('register', [AuthUserController::class, 'registered']);
Route::get('logout', [AuthUserController::class, 'logout']);

// Auth::routes(['verify' => true]);
