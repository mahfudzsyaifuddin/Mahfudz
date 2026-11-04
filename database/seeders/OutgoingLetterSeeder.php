<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
DB::table('outgoing_letters')->insert([
[
                'nomor_surat' => '001/KLR/FT/X/2026',
                'tanggal' => '2026-10-10',
                'tujuan' => 'Rektorat',
                'perihal' => 'Permohonan Izin Kegiatan',
                'nomor_surat' => '001/FT/X/2026',
                'tanggal' => '2024-10-05',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat',
                'keterangan' => 'Undangan rapat koordinasi Fakultas Teknik',
'created_at' => now(),
'updated_at' => now(),
],
[
                'nomor_surat' => '002/KLR/FT/X/2026',
                'tanggal' => '2026-10-11',
                'tujuan' => 'BAA',
                'perihal' => 'Pengajuan Jadwal Ujian',
                'nomor_surat' => '002/BAA/X/2026',
                'tanggal' => '2000-10-05',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik',
                'keterangan' => 'Pemberitahuan kegiatan akademik',
'created_at' => now(),
'updated_at' => now(),
],
[
                'nomor_surat' => '003/KLR/FT/X/2026',
                'tanggal' => '2026-10-12',
                'tujuan' => 'LPM',
                'perihal' => 'Laporan Evaluasi',
                'nomor_surat' => '003/LPPM/X/2026',
                'tanggal' => '2024-04-05',
                'pengirim' => 'LPPM',
                'perihal' => 'Undangan Sosialisasi',
                'keterangan' => 'Undangan kegiatan sosialisasi penelitian',
'created_at' => now(),
'updated_at' => now(),
            ],
            ]
]);
}
}
}