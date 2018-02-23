<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;

class MyController extends Controller
{
    //
    public function Xinchao()
    {
    	echo "CHao cac ban";
    }
    public function Test()
    {
    	echo "Hello";
    }
    public function KhoaHoc($ten)
    {
    	echo "Khoa hoc:".$ten;
    	return redirect()->route('MyRoute');
    }
    public function GetURL(Request $request)
    {
    	if($request->is('My*'))
    		echo "Co My";
    	else 
    		echo "Khong co My";
    }
    public function Form(Request $s){
       echo $s->Ten;
    }
     
    public function post(Request $reque){
        if($reque->hasFile('File'))
        {
            $reque->file('myFile')->move('images','save.png');
        }
        else echo 'chua';
    }
    public function setCookie(){
        $response = new Response();
        $response->withCookie('KhoaHoc','Laravel',1);
        return $response;   
    }
    public function getCookie(Request $request){
        return $request->cookie('KhoaHoc');
    }
    public function postFile(Request $re)
    {
        if($re->hasFile('myFile'))
        {
           $file = $re->file('myFile');
           $file->move('images','dat.png');
        }
        else 
            echo "chua co file";
    }
    public function dk($ten){
        $k = "dat";
        if($ten == "laravel")
            return view('pages.laravel',['khoahoc'=>$k]);
        elseif ($ten =="php") {
            return view('pages.php');
        }
    }
}
