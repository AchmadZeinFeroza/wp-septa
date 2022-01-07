<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PerusahaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaan')->insert([
            'nama' => 'PT SEPTA',
            'alamat' => 'hgfhgfhgfh',
            'no_wa' => '081556512550',
            'no_telpon' => '081556512550',
            'email' => 'septa@gmail.com',
            'link_wa' => 'https://wa.me/6281556512550',
            'link_fb' => 'https://www.facebook.com/harapan.anda.79',
            'link_tokopedia' => 'https://www.facebook.com/harapan.anda.79',
            'link_shopee' => 'https://www.facebook.com/harapan.anda.79',
            'email' => 'septa@gmail.com',
            'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.372664813282!2d113.71422431425499!3d-8.165157594122919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd694351d727e69%3A0xec33c34804a10832!2sUniversity%20of%20Jember!5e0!3m2!1sen!2sid!4v1634700161667!5m2!1sen!2sid',
            'deskripsi' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        ]);
    }
}
