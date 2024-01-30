<?php

use App\Http\Controllers\CollectionController;
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

Route::get('/', fn () => view('welcome'))->name('dashboard');

Route::get('/me', fn () => view('me'));

Route::get('/u/{name}', fn ($name) => view('user', ['user_name' => $name]));

Route::get('/siswas', [SiswaController::class, 'index'])->name('siswaIndex');

Route::get('/gurus', function () {
    $randNis = rand(11111111, 9999999);
    $dataSiswa = [['name' => 'Gusesa', 'gender' => 'Male', 'jurusan' => 'Rekayasa Perangkat Lunak', 'nis' => $randNis], ['name' => 'Abida', 'gender' => 'Male', 'jurusan' => 'Rekayasa Perangkat Lunak', 'nis' => $randNis], ['name' => 'Ghifar', 'gender' => 'Male', 'jurusan' => 'Rekayasa Perangkat Lunak', 'nis' => $randNis]];

    return view('guru.index', ['data' => $dataSiswa]);
})->name('guruIndex');

Route::view('/galeri', 'galeri.index')->name('galeriIndex');

Route::get('siswa/{name}', function ($name) {

    $menu = ['/nilai' => 'Nilai'];

    return view('siswa.detail', compact('name', 'menu'));
})->name('user');

Route::get('siswa/{name}/nilai', function ($name) {

    $data = [80 => 'B', 40 => 'D', 20 => 'F', 90 => 'A', 50 => 'C'];

    return view('siswa.nilai', ['name' => $name, 'nilai' => 90, 'data' => $data]);
})->name('nilaiSiswa');

Route::get('unrealese', [CollectionController::class, 'index'])->name('ex.first');
