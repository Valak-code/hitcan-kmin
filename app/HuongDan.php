<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HuongDan extends Model
{
    protected $table='huong_dan';
    public function bai_tap(){
        return $this->belongsToMany(HuongDan::class,'bai_tap_huong_dan','ma_bai_tap','ma_huong_dan');
    }
}
