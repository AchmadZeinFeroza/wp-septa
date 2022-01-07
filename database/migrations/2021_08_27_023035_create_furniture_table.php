<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFurnitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furniture', function (Blueprint $table) {
            $table->id();
            $table->string('harga')->nullable();
            $table->string('tokopedia')->nullable();
            $table->string('shopee')->nullable();
            $table->string('bukalapak')->nullable();
            $table->string('lazada')->nullable();
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('jenis_id');
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('furniture');
    }
}
