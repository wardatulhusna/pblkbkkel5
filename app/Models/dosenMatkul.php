<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosenMatkul extends Model
{
    use HasFactory;
    protected $fillable = ['dosen_id','matkul_id'];
    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class, 'matkul_id');
    }
    public function dosen()
    {
        return $this->belongsTo(dosen::class, 'dosen_id');
    }
}
