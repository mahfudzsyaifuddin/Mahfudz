<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OutgoingLetter;

class SuratKeluarController extends Controller
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
        $suratKeluar = OutgoingLetter::orderBy('id', 'desc')->get();
        return view('surat-keluar.index', compact('suratKeluar'));
        //view('surat-keluar.index' memanggil file index yang ada di folder 'surat-masuk'
    }

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
    public function create() {
        return view('surat-keluar.create');
    }

        $surat = $suratKeluar[$id] ?? null;
    public function store(Request $request) {
        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);
        OutgoingLetter::create($validated);
        return redirect()->route('surat-keluar.index')->with('success', 'Surat berhasil ditambahkan.');
    }

    public function show($id) {
        $surat = OutgoingLetter::findOrFail($id);
        return view('surat-keluar.show', compact('surat'));
    }

    public function edit($id) {
        $surat = OutgoingLetter::findOrFail($id);
        return view('surat-keluar.edit', compact('surat'));
    }

    public function update(Request $request, $id) {
        $surat = OutgoingLetter::findOrFail($id);

        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $surat->update($validated);

        return redirect()->route('surat-keluar.index')->with('success', 'Surat berhasil diperbarui.');
    }

    public function destroy($id) {
        $surat = OutgoingLetter::findOrFail($id);
        $surat->delete();

        return redirect()->route('surat-keluar.index')->with('success', 'Surat berhasil dihapus.');
    }
}