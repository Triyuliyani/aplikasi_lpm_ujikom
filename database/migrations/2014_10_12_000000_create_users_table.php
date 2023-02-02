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
            $table->string('nama_user');
            $table->string('nik');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('no_telepon');
            $table->text('alamat');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->enum('level',['PETUGAS','ADMIN','MASYARAKAT']);
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
        Schema::dropIfExists('users');
    }
}
