<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\IncomingLetter;
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200

class SuratMasukController extends Controller
{
    public function index() {
        $suratMasuk = [
            [
                'id' => 1,
                'nomor_surat' => '001/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
            [   'id' => 2,
                'nomor_surat' => '002/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik'
            ],
            [   'id' => 3,
                'nomor_surat' => '003/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'LPM'
            ]
        ];
<<<<<<< HEAD
        $suratMasuk = IncomingLetter::all();
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200

        return view('surat-masuk.index',compact('suratMasuk'));
    }
    public function show($id) {

    $suratMasukDetail = [
        1=>[
                'id' => 1,
                'nomor_surat' => '001/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
        2=>[
                'id' => 2,
                'nomor_surat' => '002/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik'
            ],
        3=>[
                'id' => 3,
                'nomor_surat' => '003/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'LPM'
            ]
    ];
    $surat = $suratMasukDetail[$id] ?? null;
<<<<<<< HEAD
    $surat = IncomingLetter::findOrFail($id);
    
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
        return view('surat-masuk.show',compact('surat'));
    }
}