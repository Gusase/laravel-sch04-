<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class CollectionController extends Controller
{
    public function index()
    {
        $matkulUnit00 = new stdClass();
        $matkulUnit00->namaMatkul = "Sistem Operasi";
        $matkulUnit00->jumlahSks = 3;
        $matkulUnit00->semester = 3;

        $matkulUnit01 = new stdClass();
        $matkulUnit01->namaMatkul = "Algotrima dan Pemrograman";
        $matkulUnit01->jumlahSks = 4;
        $matkulUnit01->semester = 1;

        $matkulUnit02 = new stdClass();
        $matkulUnit02->namaMatkul = "Kalkulus Dasar";
        $matkulUnit02->jumlahSks = 2;
        $matkulUnit02->semester = 1;

        $matkulUnit03 = new stdClass();
        $matkulUnit03->namaMatkul = "Basis Data";
        $matkulUnit03->jumlahSks = 2;
        $matkulUnit03->semester = 3;

        $unitMatkul = collect([$matkulUnit00, $matkulUnit01, $matkulUnit02, $matkulUnit03]);

        echo <<<HTML
                <script src="https://cdn.tailwindcss.com"></script>
                <div class="p-24">
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Nama mata kuliah disemester 3:</h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 text-sm">
            HTML;

        foreach ($unitMatkul->where('semester', 3)->pluck('namaMatkul') as $nama) {
            echo <<<HTML
                <li>
                    $nama
                </li>
                HTML;
        }
        echo <<<HTML
                    </ul>
                </div>
            HTML;

        /**
         *Soal kedua
         */

        echo <<<HTML
                <div class="p-24 pt-0">
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Nama mata kuliah:</h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 text-sm">
            HTML;
        foreach ($unitMatkul->sortByDesc('jumlahSks') as $matkul) {
            echo <<<HTML
                <li>
                    $matkul->namaMatkul ($matkul->jumlahSks)
                </li>
                HTML;
        }
        echo <<<HTML
                    </ul>
                </div>
            HTML;
    }
}
