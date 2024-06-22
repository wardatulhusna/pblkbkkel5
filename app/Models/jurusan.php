<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
    protected $fillable = ['kode_jurusan', 'nama_jurusan'];

    public function jurusan(){
        return $this->hasMany(prodi::class, 'id');
        return $this->hasMany(pimpinanJurusan::class, 'id');
    }
    // public function jurusan(){
    //     return $this->hasMany(pimpinanJurusan::class, 'id');
    // }
    // public function jurusan(){
    //     return $this->hasMany(pimpinan::class, 'id');
    // }
}
