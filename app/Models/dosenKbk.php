<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosenKbk extends Model
{
    use HasFactory;
    protected $fillable = ['kbk_id','dosen_id','matkul_id'];

    public function kbk()
    {
        return $this->belongsTo(kbk::class, 'kbk_id');
    }
    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class, 'matkul_id');
    }
    public function dosen()
    {
        return $this->belongsTo(dosen::class, 'dosen_id');
    }
}
