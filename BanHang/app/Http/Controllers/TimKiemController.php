<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;

class TimKiemController extends Controller
{
	
    //
    function postTimkiem(Request $request)
    {
    	$tukhoa = $request->tukhoa;
    	$timkiem = SanPham::where('TENSP','like',"%$tukhoa%")->orWhere('MAVACH','like',"%$tukhoa%")->orWhere('MOTA','like',"%$tukhoa%")->paginate(5);
    	return view('pages.timkiem',[
    		'timkiem'=>$timkiem,
    		'tukhoa'=>$tukhoa
    	]);
    }
}
