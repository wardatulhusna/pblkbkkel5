<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifikasiRps extends Model
{
    use HasFactory;
    protected $fillable = ['rps_id','status','komentar','pimprod_id','pengkbk_id'];

    public function rps()
    {
        return $this->belongsTo(rps::class, 'rps_id');
    }
    public function pimprod()
    {
        return $this->belongsTo(pimprod::class, 'pimprod_id');
    }
    public function pengkbk()
    {
        return $this->belongsTo(pengkbk::class, 'pengkbk_id');
    }
}
