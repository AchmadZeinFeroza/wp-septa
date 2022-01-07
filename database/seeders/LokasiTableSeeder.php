<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasi')->insert([
            'alamat' => 'Jl Mesjid Nurul Iman 72, Dki Jakarta',
            'pin_lokasi' => 'https://goo.gl/maps/n22vMk1aKFdDrGyV8',
        ]);
        DB::table('lokasi')->insert([
            'alamat' => '	Jl Kenanga 40 Bali',
            'pin_lokasi' => 'https://goo.gl/maps/n22vMk1aKFdDrGyV8',
        ]);
        DB::table('lokasi')->insert([
            'alamat' => 'Jl Mangga Dua Raya Pus Perdag Psr Pagi Mangga Dua Bl C Lt 2/53,Ancol',
            'pin_lokasi' => 'https://goo.gl/maps/n22vMk1aKFdDrGyV8',
        ]);
        DB::table('lokasi')->insert([
            'alamat' => 'Jl RA Kartini 42',
            'pin_lokasi' => 'https://goo.gl/maps/n22vMk1aKFdDrGyV8',
        ]);
        DB::table('lokasi')->insert([
            'alamat' => 'Jl Jeblogan',
            'pin_lokasi' => 'https://goo.gl/maps/n22vMk1aKFdDrGyV8',
        ]);
    }
}
