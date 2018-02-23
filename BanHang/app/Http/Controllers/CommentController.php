<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Comment;
use App\SanPham;

class CommentController extends Controller
{
    //
    public function postComment($id,Request $request)
    {
    	$idSP = $id;
    	$sp = SanPham::find($id);
    	$comment = new Comment;
    	$comment->idSp = $idSP;
    	$comment->idUser = Auth::user()->id;
    	$comment->NoiDung = $request->NoiDung;
    	$comment->save();

    	return redirect("chitiet/$id")->with('thongbao','Viết bình luận thành công');
    }
}
