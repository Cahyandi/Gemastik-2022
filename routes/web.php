<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\DatapetugasController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\User\WisataController as UserWisataController;
use App\Http\Controllers\WisataController;
use App\Models\Wisata;
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
    return view('index', [
        'wisatas' => Wisata::all()
    ]);
});
Route::get('/wisata/{wisata}', [UserWisataController::class, 'show'])->name('show.wisata');
Route::post('/wisata/sendUlasan/{wisata}', [UserWisataController::class, 'storeUlasan'])->name('storeulasan.wisata');


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
Route::resource('/dinas/wisata', WisataController::class);
// Route::get('wisata/show/{id}', [WisataController::class, 'show']);

Route::resource('/ticket', TiketController::class);
Route::get('/ticket/form/{id}', [TiketController::class, 'create']);
Route::post('/ticket/pesan', [TiketController::class, 'store']);
Route::get('/riwayat-ticket/{user:username}', [TiketController::class, 'riwayat_tiket']);
Route::get('/riwayat-ticket/validate/{ticket:no_ticket}', [TiketController::class, 'validasi_pembayaran']);

Route::get('/gemastik', function () {
    return view('Gemastik');
});

Route::post('authenticate', [AuthUserController::class, 'authenticate']);
Route::post('register', [AuthUserController::class, 'registered']);
Route::get('logout', [AuthUserController::class, 'logout']);

// Auth::routes(['verify' => true]);