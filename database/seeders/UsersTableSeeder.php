<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Zohal Admin',
            'no_telpon' => '081556512550',
            'alamat' => 'Ambulu Sumberejo',
            'ktp' => '/storage/ktp/default.jpg',
            'role_id' => 2,
            'username' => 'admin',
            'password' => Hash::make('123123'),
        ]);
        DB::table('users')->insert([
            'nama' => 'Barep Mandor',
            'no_telpon' => '081556512550',
            'ktp' => '/storage/ktp/default.jpg',
            'alamat' => 'Kecamatan Semboro',
            'role_id' => 3,
            'username' => 'mandor',
            'password' => Hash::make('123123'),
        ]);
        DB::table('users')->insert([
            'nama' => 'Mas Septa',
            'no_telpon' => '081556512550',
            'ktp' => '/storage/ktp/default.jpg',
            'alamat' => 'Banyuwangi',
            'role_id' => 1,
            'username' => 'superadmin',
            'password' => Hash::make('123123'),
        ]);
    }
}
