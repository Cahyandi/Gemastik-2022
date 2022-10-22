<?php

use App\Http\Controllers\AuthDinasController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\ChangeStatusPariwisata;
use App\Http\Controllers\DatapetugasController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\petugas\DataticketController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\User\WisataController as UserWisataController;
use App\Http\Controllers\WisataController;
use App\Models\Ulasan;
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
        'wisatas' => Wisata::whereStatus('approve')->get(),
        'inspirations' => Wisata::orderBy('total_rating', 'DESC')->take(4)->get(),
        'ulasans' => Ulasan::latest()->take(4)->get(),
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
})->middleware('auth:dinas,web');

Route::resource('/data-user', DatauserController::class)->middleware('auth:dinas');
Route::resource('/data-petugas', DatapetugasController::class)->middleware('auth:dinas');
Route::resource('/dinas/wisata', WisataController::class)->middleware('auth:dinas');
// Route::get('wisata/show/{id}', [WisataController::class, 'show']);

Route::resource('/ticket', TiketController::class)->middleware('auth');
Route::get('/ticket/form/{id}', [TiketController::class, 'create'])->middleware('auth');
Route::post('/ticket/pesan', [TiketController::class, 'store'])->middleware('auth');
Route::get('/riwayat-ticket/{user:username}', [TiketController::class, 'riwayat_tiket'])->middleware('auth');
Route::get('/riwayat-ticket/validate/{ticket:no_ticket}', [TiketController::class, 'validasi_pembayaran'])->middleware('auth');

Route::get('/data-ticket/{dinas:username}', [DataticketController::class, 'index']);
Route::get('/data-ticket/show/{ticket:no_ticket}', [DataticketController::class, 'show']);
Route::get('/data-ticket/edit/{ticket:no_ticket}', [DataticketController::class, 'edit']);
Route::post('/data-ticket/updateStatus/{ticket:id}', [DataticketController::class, 'update']);

Route::get('/login-dinas', function () {
    return view('login_dinas');
});
Route::get('/registrasi-petugas', function () {
    return view('registrasi_petugas');
});

Route::post('/changeStatusPariwisata/{pariwisata}', ChangeStatusPariwisata::class)->name('change.status.pariwisata');


Route::post('authenticate-dinas', [AuthDinasController::class, 'authenticate']);
Route::post('register-petugas', [AuthDinasController::class, 'registerPetugas']);

Route::post('authenticate', [AuthUserController::class, 'authenticate']);
Route::post('register', [AuthUserController::class, 'registered']);
Route::get('logout', [AuthUserController::class, 'logout']);

// Auth::routes(['verify' => true]);