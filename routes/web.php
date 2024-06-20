<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
    return 'ini laravel saya';
});
Route::get('angka/{angka}', function ($angka) {
    return 'angka = '. $angka;
});
Route::get('penjumlahan/{angka}/{angka2}', function ($angka, $angka2) {
    return 'hasil pemjulahan adalah = '. $angka + $angka2;
});
Route::get('pengurangan/{angka}/{angka2}', function ($angka, $angka2) {
    return 'hasil pengurangan adalah = '. $angka - $angka2;
});
Route::get('pembagian/{angka}/{angka2}', function ($angka, $angka2) {
    return 'hasil pembagian adalah = '. $angka / $angka2;
});
Route::get('perkalian/{angka}/{angka2}', function ($angka, $angka2) {
    return 'hasil perkalian adalah = '. $angka * $angka2;
});

Route::get('coba', function () {
    return view('coba');
});


Route::get('template', function () {
    return view('template');
});

Route::controller(PagesController::class)->group(function () {
    Route::get('table', 'index');
    Route::get('about', 'about');
    Route::get('home', 'home');
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class);
