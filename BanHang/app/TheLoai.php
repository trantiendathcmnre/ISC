<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    protected $table = 'theloai';         
    public $timestamps = false;

    public function sanphamTL()
    {
    	return $this->hasMany('App\SanPham', 'IDTL', 'id');
    }
}
