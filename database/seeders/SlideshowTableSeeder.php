<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SlideshowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slideshow')->insert([
            'judul' => 'SlideShow 1',
            'deskripsi' => 'Deskripsi 1',
            'gambar' => '/storage/slideshow/slideshow1.jpg',
        ]);
        DB::table('slideshow')->insert([
            'judul' => 'SlideShow 2',
            'deskripsi' => 'Deskripsi 2',
            'gambar' => '/storage/slideshow/slideshow2.jpg',
        ]);
        DB::table('slideshow')->insert([
            'judul' => 'SlideShow 3',
            'deskripsi' => 'Deskripsi 3',
            'gambar' => '/storage/slideshow/slideshow3.jpg',
        ]);
        DB::table('slideshow')->insert([
            'judul' => 'SlideShow 4',
            'deskripsi' => 'Deskripsi 4',
            'gambar' => '/storage/slideshow/slideshow4.jpg',
        ]);
    }
}
