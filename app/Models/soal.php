<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    use HasFactory;
    protected $fillable = ['matkul_id','dosen_id','dokumen_soal','tahun'];
    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class, 'matkul_id');
    }
    public function dosen()
    {
        return $this->belongsTo(dosen::class, 'dosen_id');
    }

}
