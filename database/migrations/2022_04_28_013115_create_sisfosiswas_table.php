<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisfosiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sisfosiswas', function (Blueprint $table) {
            $table->id('id_data_pribadi');
            $table->string('nama_siswa');
            $table->string('nis');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('kelamin');
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
        Schema::dropIfExists('sisfosiswas');
    }
}
