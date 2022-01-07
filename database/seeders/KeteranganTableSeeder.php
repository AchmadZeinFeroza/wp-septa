<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KeteranganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keterangan')->insert([
            'keterangan' => 'Belum diverifikasi',
        ]);
        DB::table('keterangan')->insert([
            'keterangan' => 'Laporan Disetujui',
        ]);
        DB::table('keterangan')->insert([
            'keterangan' => 'Laporan Ditolak',
        ]);
    }
}
