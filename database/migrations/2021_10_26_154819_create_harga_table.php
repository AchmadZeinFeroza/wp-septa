<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga', function (Blueprint $table) {
            $table->id();
            $table->string('harga');
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('lokasi_id');

            $table->foreign('produk_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lokasi_id')->references('id')->on('lokasi')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('harga');
    }
}
