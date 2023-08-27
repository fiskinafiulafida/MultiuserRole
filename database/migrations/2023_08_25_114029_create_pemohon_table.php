<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemohonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohon', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenisKelamin');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nik');
            $table->string('usia');
            $table->string('pekerjaan');
            $table->string('pendidikanTerakhir');
            $table->string('noHp');
            $table->text('alamat');
            $table->text('profile');
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
        Schema::dropIfExists('pemohon');
    }
}
