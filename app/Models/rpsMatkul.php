<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rpsMatkul extends Model
{
    use HasFactory;
    protected $fillable = ['kode_rps','matkul_id','versi','dokumen_rps','dosen_id'];

    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class, 'matkul_id');
    }
    public function dosen()
    {
        return $this->belongsTo(dosen::class, 'dosen_id');
    }
    public function rps(){
        return $this->hasMany(verifikasiRps::class, 'id');
        return $this->hasMany(verifikasiSoal::class, 'id');

    }
}
