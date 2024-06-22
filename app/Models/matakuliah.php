<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;
    protected $fillable = ['kode_matkul','nama_matkul', 'prodi_id','kurikulum_id','tahunaka_id'];


    public function smsTahunAkademik()
    {
        return $this->belongsTo(smsTahunAkademik::class, 'tahunaka_id');
    }
    public function prodi()
    {
        return $this->belongsTo(prodi::class, 'prodi_id');
    }
    public function kurikulum()
    {
        return $this->belongsTo(kurikulum::class, 'kurikulum_id');
    }
    public function matakuliah(){
        return $this->hasMany(dosenMatkul::class, 'id');
        return $this->hasMany(dosenKbk::class, 'id');
        return $this->hasMany(rps::class, 'id');
        return $this->hasMany(soal::class, 'id');
    }
}
