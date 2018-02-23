<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected $table = 'sanpham';         
    public $timestamps = false;

    public function chitiet()
    {
    	return $this->hasOne('App\ChiTietSanPham', 'IDSP' ,'id');
    }
}
