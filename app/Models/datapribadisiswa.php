<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapribadisiswa extends Model
{
    use HasFactory;
    protected $table ='datapribadisiswa';
    protected $primaryKey='id_data_pribadi';
    protected $guarded = [
        'id_data_pribadi',
        'nis',
        'nama_siswa',
        'jk',
        'agama',
        'ttl',
        'status_dalam_keluarga',
        'status_kesehatan',
        'kelas',
        'alamat',
        'nama_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_telp_ortu',
        'alamat_ortu',
        'nama_wali',
        'sekolah_asal',
        'tgl_thn_diterima',
        'latar_belakang_pendidikan',
        'thn_mutasi_sd_smp_sma',
        'mapel_minat',
        'alasan_minat',
        'mapel_tdk_minat',
        'alasan_tdk_minat',
        'cita_cita',
        'teman_terdekat',
        'guru_terdekat',
        'sifat_positif_alasan',
        'sifat_negatif_alasan',
        'penyakit_pernah_diderita',
        'hobi',
        'prestasi',
    ];
    public function sisfosiswa()
    {
        return $this->belongsTo('App\Models\sisfosiswa', 'id_data_pribadi');
    }
}

