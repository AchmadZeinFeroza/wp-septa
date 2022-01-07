<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FotoLokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foto_lokasi')->insert([
            'lokasi_id' => 1,
            'foto' => '/storage/lokasi/lokasi1.jpg',
        ]);
        DB::table('foto_lokasi')->insert([
            'lokasi_id' => 2,
            'foto' => '/storage/lokasi/lokasi2.jpg',
        ]);
        DB::table('foto_lokasi')->insert([
            'lokasi_id' => 3,
            'foto' => '/storage/lokasi/lokasi3.jpg',
        ]);
        DB::table('foto_lokasi')->insert([
            'lokasi_id' => 4,
            'foto' => '/storage/lokasi/lokasi4.jpg',
        ]);
        DB::table('foto_lokasi')->insert([
            'lokasi_id' => 5,
            'foto' => '/storage/lokasi/lokasi5.jpg',
        ]);
    }
}
