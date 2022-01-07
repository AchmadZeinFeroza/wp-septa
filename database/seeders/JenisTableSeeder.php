<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            'nama' => 'Meja dan Kursi',
            'kategori_id' => 1,
        ]);
        DB::table('jenis')->insert([
            'nama' => 'Hiasan',
            'kategori_id' => 1,
        ]);
        DB::table('jenis')->insert([
            'nama' => 'Walpaper',
            'kategori_id' => 1,
        ]);
        DB::table('jenis')->insert([
            'nama' => 'Kasur',
            'kategori_id' => 2,
        ]);
        DB::table('jenis')->insert([
            'nama' => 'Meja Rias',
            'kategori_id' => 2,
        ]);
        DB::table('jenis')->insert([
            'nama' => 'Walpaper',
            'kategori_id' => 2,
        ]);
        DB::table('jenis')->insert([
            'nama' => 'Bak Mandi',
            'kategori_id' => 3,
        ]);
        DB::table('jenis')->insert([
            'nama' => 'Asesoris',
            'kategori_id' => 3,
        ]);
        DB::table('jenis')->insert([
            'nama' => 'Rak',
            'kategori_id' => 3,
        ]);
    }
}
