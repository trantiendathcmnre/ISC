<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\NhaSanXuat;
use App\Slide;
use App\SanPham;
use App\ChiTietSanPham;
use App\TheLoai;
use App\Cart;
use App\NguoiDung;
use App\Comment;
use Session;

class TrangChuController extends Controller
{
    //
	function __construct()
	{
        $theloaitc = TheLoai::all();
		$chitiet = ChiTietSanPham::all();
		$sanphamtc = SanPham::all();
		$nhasanxuat = NhaSanXuat::all();
        $msi = SanPham::where('IDNSX',1)->orderBy('GIASP','asc')->paginate(8);
        $apple = SanPham::where('IDNSX',2)->orderBy('GIASP','asc')->paginate(8);
        $lenovo = SanPham::where('IDNSX',6)->orderBy('GIASP','asc')->paginate(8);
        $acer = SanPham::where('IDNSX',7)->orderBy('GIASP','asc')->paginate(8);
        $asus = SanPham::where('IDNSX',8)->orderBy('GIASP','asc')->paginate(8);
        $hp = SanPham::where('IDNSX',9)->orderBy('GIASP','asc')->paginate(8);
        $dell = SanPham::where('IDNSX',10)->orderBy('GIASP','asc')->paginate(8);
		$slide = Slide::all();
		view()->share('nhasanxuat',$nhasanxuat);
		view()->share('slide',$slide);
		view()->share('sanphamtc',$sanphamtc);
		view()->share('chitiet',$chitiet);
        view()->share('theloaitc',$theloaitc);
        view()->share('msi',$msi);
        view()->share('apple',$apple);
        view()->share('lenovo',$lenovo);
        view()->share('acer',$acer);
        view()->share('asus',$asus);
        view()->share('hp',$hp);
        view()->share('dell',$dell);
        
	}

    public function trangchu()
    {
    	return view('pages.trangchu');
    }

    public function lienhe()
    {
    	return view('pages.lienhe');
    }

    public function chitiet($id)
    {
        $comment = Comment::where('idSp','=',$id)->get();
    	return view('pages.chitiet',[ 
            'id'=>$id,
            'comment'=>$comment
        ]);
    }
    
    public function msi()
    {
        return view('pages.msi');
    }

    public function apple()
    {
        return view('pages.apple');
    }

    public function lenovo()
    {
        return view('pages.lenovo');
    }

    public function acer()
    {
        return view('pages.acer');
    }

    public function asus()
    {
        return view('pages.asus');
    }

    public function hp()
    {
        return view('pages.hp');
    }

    public function dell()
    {
        return view('pages.dell');
    }

    
}
