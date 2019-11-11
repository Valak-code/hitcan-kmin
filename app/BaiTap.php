<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiTap extends Model
{
    protected $table='bai_tap';
    public function chu_de(){
        return $this->belongsToMany(ChuDe::class,'chu_de_bai_tap','ma_chu_de','ma_bai_tap');
    }
    public function huong_dan(){
        return $this->belongsToMany(HuongDan::class,'bai_tap_huong_dan','ma_bai_tap','ma_huong_dan');
    }
}
