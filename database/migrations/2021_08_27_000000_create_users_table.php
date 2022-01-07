<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->unsignedBigInteger('role_id');
            $table->string('gambar')->default('/storage/user/user.png');
            $table->string('ktp');
            $table->string('no_telpon');
            $table->text('alamat');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
