<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nama_dosen', 'NIDN', 'email', 'no_telp', 'foto', 'status'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
    // public function dosenMatkul(){
    //     return $this->hasMany(dosenMatkul::class, 'id');
    // }
    public function dosen(){
        return $this->hasMany(pimpinanJurusan::class, 'id');
        return $this->hasMany(pimpinanProdi::class, 'id');
        return $this->hasMany(pengurusKbk::class, 'id');
        return $this->hasMany(rps::class, 'id');
        return $this->hasMany(soal::class, 'id');
        return $this->hasMany(dosenkbk::class, 'id');
        return $this->hasMany(dosenmatkul::class, 'id');
    }

}
