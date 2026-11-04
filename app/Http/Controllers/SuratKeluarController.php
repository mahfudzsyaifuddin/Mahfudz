<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OutgoingLetter;

class SuratKeluarController extends Controller
{
    public function index()
    {
    public function index() {
        //return 'Halaman surat keluar dari controller';
        $suratKeluar = [
            [
                'id' => 1,
                'nomor_surat' => '001/FT/X/2026',
                'tanggal' => '05-10-2024',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
            [
                'id' => 2,
                'nomor_surat' => '002/BAA/X/2026',
                'tanggal' => '05-10-2000',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik'
            ],
            [
                'id' => 3,
                'nomor_surat' => '003/LPPM/X/2026',
                'tanggal' => '05-04-2024',
                'pengirim' => 'LPPM',
                'perihal' => 'Undangan Sosialisasi'
            ]
        ];
$suratKeluar = OutgoingLetter::all();

return view('surat-keluar.index', compact('suratKeluar'));
        //view('surat-keluar.index' memanggil file index yang ada di folder 'surat-masuk'
}

    public function show($id)
    {
        $surat = OutgoingLetter::findOrFail($id);
    public function show($id) {
        // return 'Halaman surat keluar dari controller untuk id = ' . $id ;
        $suratKeluar = [
            1 => [
                'id' => 1,
                'nomor_surat' => '001/FT/X/2026',
                'tanggal' => '05-10-2024',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat',
                'keterangan' => 'Undangan rapat koordinasi Fakultas Teknik'
            ],
            2 => [
                'id' => 2,
                'nomor_surat' => '002/BAA/X/2026',
                'tanggal' => '05-10-2000',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik',
                'keterangan' => 'Pemberitahuan kegiatan akademik'
            ],
            3 => [
                'id' => 3,
                'nomor_surat' => '003/LPPM/X/2026',
                'tanggal' => '05-04-2024',
                'pengirim' => 'LPPM',
                'perihal' => 'Undangan Sosialisasi',
                'keterangan' => 'Undangan kegiatan sosialisasi penelitian'
            ]
        ];

        $surat = $suratKeluar[$id] ?? null;

        $surat = OutgoingLetter::findOrFail($id);
return view('surat-keluar.show', compact('surat'));
}
}
}