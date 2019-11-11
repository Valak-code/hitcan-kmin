<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuDe extends Model
{
    protected $table='chu_de';
    public function bai_tap(){
        return $this->belongsToMany(BaiTap::class, 'chu_de_bai_tap','ma_chu_de','ma_bai_tap');
    }
}
