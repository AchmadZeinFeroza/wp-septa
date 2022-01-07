<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('kategori')->insert([
            'nama' => 'Ruang Tamu',
            'gambar' => '/storage/kategori/kategori1.jpg',
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Kamar Tidur',
            'gambar' => '/storage/kategori/kategori2.jpg',
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Kamar Mandi',
            'gambar' => '/storage/kategori/kategori3.jpg',
        ]);
    }
}
