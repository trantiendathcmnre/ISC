<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class Login_Controller extends Controller
{
    //
    public function getDangnhap()
    {
    	return view('auth.login');
    }

    public function postDangnhap(Request $request)
    {
    	$this->validate($request,[
            'email'=> 'required',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required'=> 'Bạn chưa nhập Email',
            'password.required'=> 'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu không được nhỏ hơn 3 kí tự',
            'password.max'=>'Mật khẩu không được lớn hơn 32 kí tự'
        ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return redirect('trangchu');
        }
        else
        {
            return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công!');
        }
    }

    //form thong tin nguoi dung
    public function getNguoidung()
    {
        $user = Auth::user();
        return view('pages.nguoidung',[
            'nguoidung'=>$user
        ]);
    }

    public function postNguoidung(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required|min:3'
        ],[
            'name.required'=> 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có ít nhất 3 kí tự'
        ]);

        $user = Auth::user();
        $user->name = $request->name;

        if($request->checkpassword == "on")
        {
            $this->validate($request,[
            'password'=> 'required|min:3|max:32',
            'passwordAgain'=>'required|same:password'
            ],[
                'password.required'=> 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
                'password.max' => 'Mật khẩu chỉ tối đa 32 kí tự',
                'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same' => 'Mật khẩu nhập lại không khớp'
            ]);

            $user->password = bcrypt($request->password);
        }

        $user->save();
        return redirect('nguoidung')->with('thongbao','Bạn đã sửa thành công!');
    }

}
