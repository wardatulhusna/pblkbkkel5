<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;
    protected $fillable = ['kode_prodi','nama_prodi', 'jurusan_id', 'jenjang'];

    public function jurusan(){
        return $this->belongsTo(jurusan::class, 'jurusan_id');
    }
    public function prodi(){
        return $this->hasMany(pimpinanProdi::class, 'id');
        return $this->hasMany(matakuliah::class, 'id');
        return $this->hasMany(kurikulum::class, 'id');

    }
    // public function jurusan()
    // {
    //     return $this->belongsTo(jurusan::class, 'jurusan_id');
    // }
}
