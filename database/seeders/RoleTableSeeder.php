<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'posisi' => 'superadmin',
        ]);
        DB::table('role')->insert([
            'posisi' => 'admin',
        ]);
        DB::table('role')->insert([
            'posisi' => 'mandor',
        ]);
    }
}
