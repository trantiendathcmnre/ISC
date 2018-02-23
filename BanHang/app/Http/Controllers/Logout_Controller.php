<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class Logout_Controller extends Controller
{
    public function getDangxuat()
    {
    	Auth::logout();
    	return view('auth.login');
    }
}
