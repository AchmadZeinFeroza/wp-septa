<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(KeteranganTableSeeder::class); 
        $this->call(StatusSeeder::class); 
        $this->call(PesanSeeder::class); 
        $this->call(PerusahaanTableSeeder::class); 
        $this->call(SlideshowTableSeeder::class); 
        $this->call(KategoriTableSeeder::class); 
        $this->call(JenisTableSeeder::class); 
        $this->call(ProdukTableSeeder::class); 
        $this->call(FurnitureTableSeeder::class); 
        $this->call(GambarTableSeeder::class); 
        $this->call(LokasiTableSeeder::class); 
        $this->call(FotoLokasiTableSeeder::class); 
    }
}
