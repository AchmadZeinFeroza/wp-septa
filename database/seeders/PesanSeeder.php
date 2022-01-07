<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesan')->insert([
            'kategori' => 'furniture',
            'furniture' => 'Meja Kayu',
            'quantity' => '2',
            'harga' => '200000',
            'alamat' => 'Sumberejo Ambulu',
            'no_wa' => '081556512550',
            'pesan' => 'Mau Tanya kak baranganya apa ready ?',
            'email' => 'uchihaferoza22@gmail.com',
            'nama' => 'Achmad Zein Feroza',
            'no_telpon' => '081556512550',
        ]);
    }
}
