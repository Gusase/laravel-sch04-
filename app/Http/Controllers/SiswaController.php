<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $randNis = rand(11111111, 9999999);
        $dataSiswa = [['name' => 'Shikinami', 'gender' => 'Female', 'jurusan' => 'Rekayasa Perangkat Lunak', 'nis' => $randNis], ['name' => 'Rei', 'gender' => 'Female', 'jurusan' => 'Rekayasa Perangkat Lunak', 'nis' => $randNis], ['name' => 'Kowaru', 'gender' => 'Female', 'jurusan' => 'Rekayasa Perangkat Lunak', 'nis' => $randNis]];

        // $dataSiswa = Siswa::all();

        return view('siswa.index', ['data' => $dataSiswa]);
    }
}
