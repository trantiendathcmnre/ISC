<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';

    public function nguoicomment()
    {
    	return $this->belongsTo('App\User', 'idUser' , 'id');
    }
}
