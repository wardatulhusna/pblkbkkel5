<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengurusKbk extends Model
{
    use HasFactory;
    protected $fillable = ['dosen_id','jabatan','kbk_id','periode','status'];

    public function dosen()
    {
        return $this->belongsTo(dosen::class, 'dosen_id');
    }
    public function kbk()
    {
        return $this->belongsTo(kbk::class, 'kbk_id');
    }
    public function pengkbk(){
        return $this->hasMany(verifikasiRps::class, 'id');
        return $this->hasMany(verifikasiSoal::class, 'id');
    }


}
