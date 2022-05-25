<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama_sekolah');
            $table->string('status');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('website');
            $table->string('email');
            $table->string('nama_kepsek');
            $table->string('nip_nuptk');
            $table->string('tahun_pelajar');
            $table->string('tempat_tanggal_awal_ttd');
            $table->string('semester_akhir');
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
        Schema::dropIfExists('profils');
    }
}
