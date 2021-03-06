<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    
class sisfosiswa extends Model
{
    use HasFactory;
    protected $table = "sisfosiswas";
    protected $primary='id';
    protected $fillable = ['id','nama_siswa','nis','kelas','jurusan','kelamin'];
       public function nilai()
    {
        return $this->hasMany(nilai::class);
    }
    public function datapribadi()
    {
        return $this->hasOne('App\Models\datapribadisiswa', 'id_data_pribadi');
    }
}
