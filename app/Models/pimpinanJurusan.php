<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pimpinanJurusan extends Model
{
    use HasFactory;
    protected $fillable = ['dosen_id','jabatan', 'periode','status','jurusan_id','user_id'];

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

}
