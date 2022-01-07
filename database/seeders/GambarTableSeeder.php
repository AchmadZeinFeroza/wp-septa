<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GambarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gambar')->insert([
            'produk_id' => 1,
            'gambar' => '/storage/furniture/furniture1.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 2,
            'gambar' => '/storage/furniture/furniture2.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 3,
            'gambar' => '/storage/furniture/furniture3.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 4,
            'gambar' => '/storage/furniture/furniture4.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 5,
            'gambar' => '/storage/furniture/furniture5.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 6,
            'gambar' => '/storage/furniture/furniture6.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 7,
            'gambar' => '/storage/furniture/furniture7.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 8,
            'gambar' => '/storage/furniture/furniture8.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 9,
            'gambar' => '/storage/furniture/furniture9.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 10,
            'gambar' => '/storage/rumah/rumah1.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 11,
            'gambar' => '/storage/rumah/rumah2.jpg',
        ]);
        DB::table('gambar')->insert([
            'produk_id' => 12,
            'gambar' => '/storage/rumah/rumah3.jpg',
        ]);
    }
}
