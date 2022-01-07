<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'Meja Kayu',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);
        DB::table('products')->insert([
            'nama' => 'Asbak Bali',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);
        DB::table('products')->insert([
            'nama' => 'Walpaper Bunga',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);
        DB::table('products')->insert([
            'nama' => 'Kasur Busa Inoac',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);
        DB::table('products')->insert([
            'nama' => 'Kaca Rias',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);
        DB::table('products')->insert([
            'nama' => 'Walpaper Batik',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);
        DB::table('products')->insert([
            'nama' => 'Cebok',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);
        DB::table('products')->insert([
            'nama' => 'Mainan Bebek',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);
        DB::table('products')->insert([
            'nama' => 'Rak Kayu',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'furniture',
        ]);


        // Rumah

        DB::table('products')->insert([
            'nama' => 'Rumah Type A',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'rumah',
        ]);
        DB::table('products')->insert([
            'nama' => 'Rumah Type B',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'rumah',
        ]);
        DB::table('products')->insert([
            'nama' => 'Rumah Type C',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'jenis' => 'rumah',
        ]);
    }
}
