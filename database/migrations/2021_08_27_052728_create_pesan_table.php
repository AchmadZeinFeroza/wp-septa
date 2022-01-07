<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['umum','furniture', 'rumah']);
            $table->text('pesan')->nullable();
            $table->string('email');
            $table->string('nama');
            $table->string('no_telpon');
            $table->string('no_wa')->nullable();
            $table->string('furniture')->nullable();
            $table->string('quantity')->nullable();
            $table->string('harga')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('rumah')->nullable();
            $table->string('alamat')->nullable();

            $table->unsignedBigInteger('status_id')->default(1);
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesan');
    }
}
