<?php

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

Route::get('/', fn () => view('welcome'));

Route::get('/me', fn () => view('me'));

Route::get('/u/{name}', fn ($name) => view('user', ['user_name' => $name]));

Route::get('/siswas', function () {

  $dataSiswa = [['name' => 'Shikinami', 'gender' => 'Female', 'class' => 'XII Rpl2'], ['name' => 'Rei', 'gender' => 'Female', 'class' => 'XII Rpl2'], ['name' => 'Kowaru', 'gender' => 'Female', 'class' => 'XII Rpl2']];

  return view('siswa.index', ['data' => $dataSiswa]);
});


Route::get('siswa/{name}', function ($name) {

  $menu = ['/nilai' => 'Nilai'];

  return view('siswa.detail', compact('name', 'menu'));
})->name('user');

Route::get('siswa/{name}/nilai', function ($name) {

  $data = [80 => 'B', 40 => 'D', 20 => 'F', 90 => 'A', 50 => 'C'];

  return view('siswa.nilai', ['name' => $name, 'nilai' => 90, 'data' => $data]);
})->name('nilaiSiswa');
