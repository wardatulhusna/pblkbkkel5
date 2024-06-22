<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pimpinanProdi extends Model
{
    use HasFactory;
    protected $fillable = ['dosen_id','jabatan', 'periode','status','jurusan_id','prodi_id','user_id'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'jurusan_id');
    }
    public function dosen()
    {
        return $this->belongsTo(dosen::class, 'dosen_id');
    }
    public function prodi()
    {
        return $this->belongsTo(prodi::class, 'prodi_id');
    }
    public function pimprod(){
       return $this->hasMany(verifikasiRps::class, 'id');
        return $this->hasMany(verifikasiSoal::class, 'id');

    }
}
