<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FurnitureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('furniture')->insert([
            'produk_id' => 1,
            'jenis_id' => 1,
            'harga' => '200000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
        DB::table('furniture')->insert([
            'produk_id' => 2,
            'jenis_id' => 2,
            'harga' => '250000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
        DB::table('furniture')->insert([
            'produk_id' => 3,
            'jenis_id' => 3,
            'harga' => '28000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
        DB::table('furniture')->insert([
            'produk_id' => 4,
            'jenis_id' => 4,
            'harga' => '600000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
        DB::table('furniture')->insert([
            'produk_id' => 5,
            'jenis_id' => 5,
            'harga' => '74000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
        DB::table('furniture')->insert([
            'produk_id' => 6,
            'jenis_id' => 6,
            'harga' => '80000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
        DB::table('furniture')->insert([
            'produk_id' => 7,
            'jenis_id' => 7,
            'harga' => '750000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
        DB::table('furniture')->insert([
            'produk_id' => 8,
            'jenis_id' => 8,
            'harga' => '78000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
        DB::table('furniture')->insert([
            'produk_id' => 9,
            'jenis_id' => 9,
            'harga' => '95000',
            'tokopedia' => 'tokopedia.com' ,
            'shopee' => 'shopee.com',
            'lazada' => 'lazada.com',
            'bukalapak' => 'bukalapak.com',
        ]);
    }
}
