<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class smsTahunAkademik extends Model
{
    use HasFactory;
    protected $fillable = ['semester', 'th_ak', 'status'];

    public function smsTahunAkademik(){
        return $this->hasMany(matakuliah::class, 'id');
    }
}
