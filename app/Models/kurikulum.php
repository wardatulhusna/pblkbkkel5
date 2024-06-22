<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kurikulum extends Model
{
    use HasFactory;
    protected $fillable = ['kode_kurikulum','nama_kurikulum','versi','tahun','prodi_id','status'];
    public function kurikulum(){
        return $this->hasMany(matakuliah::class, 'id');
    }
    public function prodi(){
        return $this->belongsTo(prodi::class, 'prodi_id');
    }


}
