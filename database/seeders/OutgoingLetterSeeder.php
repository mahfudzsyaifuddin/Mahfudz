<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('outgoing_letters')->insert([
            [
                'nomor_surat' => '001/KLR/FT/X/2026',
                'tanggal' => '2026-10-10',
                'tujuan' => 'Rektorat',
                'perihal' => 'Permohonan Izin Kegiatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_surat' => '002/KLR/FT/X/2026',
                'tanggal' => '2026-10-11',
                'tujuan' => 'BAA',
                'perihal' => 'Pengajuan Jadwal Ujian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_surat' => '003/KLR/FT/X/2026',
                'tanggal' => '2026-10-12',
                'tujuan' => 'LPM',
                'perihal' => 'Laporan Evaluasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}