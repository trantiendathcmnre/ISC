<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DangKiController extends Controller
{
    //

    public function getDangki()
    {
    	return view('pages.dangki');
    }

    public function postDangki(Request $request)
    {
    	$this->validate($request,[
            'name'=> 'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password'=> 'required|min:3|max:32',
            'passwordAgain'=>'required|same:password'
        ],[
            'name.required'=> 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có ít nhất 3 kí tự',
            'email.required'=> 'Bạn chưa nhập email',
            'email.email'=> 'Bạn chưa nhập đúng định dạng email',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=> 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'Mật khẩu chỉ tối đa 32 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại không khớp'
        ]);
        
        $user = new User;
        $user->name = $request->name; 
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('dangki')->with('thongbao','Chúc mừng bạn đã đăng kí thành công! Tiến hành đăng nhập ngay!');

    }
}
