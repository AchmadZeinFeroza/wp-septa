<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('no_telpon')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('email')->nullable();
            $table->string('link_wa')->nullable();
            $table->string('link_fb')->nullable();
            $table->string('link_shopee')->nullable();
            $table->string('link_tokopedia')->nullable();
            $table->text('maps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perusahaan');
    }
}
