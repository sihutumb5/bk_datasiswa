<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Datapribadisiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapribadisiswa', function (Blueprint $table) {
            $table->id('id_data_pribadi');
            $table->string('nis');
            $table->string('nama_siswa');
            $table->string('jk');
            $table->string('agama');
            $table->string('ttl');
            $table->string('status_dalam_keluarga');
            $table->string('status_kesehatan');
            $table->string('kelas');
            $table->string('alamat');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('no_telp_ortu');
            $table->string('alamat_ortu');
            $table->string('nama_wali');
            $table->string('sekolah_asal_smp');
            $table->string('tgl_thn_diterima_bn');
            $table->string('latar_belakang_pendidikan');
            $table->string('thn_mutasi_sd_smp_sma');
            $table->string('mapel_minat');
            $table->string('alasan_minat');
            $table->string('mapel_tdk_minat');
            $table->string('alasan_tdk_minat');
            $table->string('cita_cita');
            $table->string('teman_terdekat');
            $table->string('guru_terdekat');
            $table->string('sifat_positif_alasan');
            $table->string('sifat_negatif_alasan');
            $table->string('penyakit_pernah_diderita');
            $table->string('hobi');
            $table->string('prestasi');
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
        Schema::dropIfExists('datapribadisiswa');
    }
}
