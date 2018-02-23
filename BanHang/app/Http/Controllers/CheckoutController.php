<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function step1()
    {
    	if(Auth::check()){
    	return redirect()->route('checkout.shipping');
    	}

    	return redirect('dangnhap');
    }
    public function shipping()
    {
    	return view('pages.shipping-info');
    }

}
