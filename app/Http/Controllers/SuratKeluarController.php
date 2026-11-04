<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\OutgoingLetter;

=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
class SuratKeluarController extends Controller
{
    private function data()
    {
        return [
            1 => [
                'id' => 1,
                'nomor_surat' => '001/KLR/FT/X/2026',
                'tanggal' => '10-10-2026',
                'tujuan' => 'Rektorat',
                'perihal' => 'Permohonan Izin Kegiatan',
            ],
            2 => [
                'id' => 2,
                'nomor_surat' => '002/KLR/FT/X/2026',
                'tanggal' => '11-10-2026',
                'tujuan' => 'BAA',
                'perihal' => 'Pengajuan Jadwal Ujian',
            ],
            3 => [
                'id' => 3,
                'nomor_surat' => '003/KLR/FT/X/2026',
                'tanggal' => '12-10-2026',
                'tujuan' => 'LPM',
                'perihal' => 'Laporan Evaluasi',
            ],
        ];
    }

    public function index()
    {
        $suratKeluar = $this->data();
<<<<<<< HEAD
        $suratKeluar = OutgoingLetter::all();

=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show($id)
    {
        $suratKeluarDetail = $this->data();

        if (!isset($suratKeluarDetail[$id])) {
            abort(404);
        }
<<<<<<< HEAD
        $surat = OutgoingLetter::findOrFail($id);
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200

        $surat = $suratKeluarDetail[$id];
        return view('surat-keluar.show', compact('surat'));
    }
<<<<<<< HEAD
}
=======
>>>>>>> 7cd37a8881b952c47c1af42270758167a896b200
}