<?php

namespace App\Http\Controllers;

use App\Models\OutgoingLetter;

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
        $suratKeluar = OutgoingLetter::all();

        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show($id)
    {
        $suratKeluarDetail = $this->data();

        if (!isset($suratKeluarDetail[$id])) {
            abort(404);
        }
        $surat = OutgoingLetter::findOrFail($id);

        $surat = $suratKeluarDetail[$id];
        return view('surat-keluar.show', compact('surat'));
    }
}
}