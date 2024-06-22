<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kbk extends Model
{
    use HasFactory;
    protected $fillable = ['kode_kbk','nama_kbk','deskripsi'];
    public function kbk(){
        return $this->hasMany(penguruskbk::class, 'id');
        return $this->hasMany(dosenKbk::class, 'id');
    }

}
