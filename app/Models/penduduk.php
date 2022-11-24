<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function kelurahan(){
        return $this->belongsTo(kelurahan::class);
    }
    public function agama(){
        return $this->belongsTo(agama::class);
    }
    public function status_kawin(){
        return $this->belongsTo(status_kawin::class);
    }
}
