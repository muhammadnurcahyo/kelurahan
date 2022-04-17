<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function store(Request $request,$id){
        $data = $request->except("_token");
        $comment = new Comment;
        $comment->blog_id = $id;
        $comment->name = $data['name'];
        $comment->phone = $data['phone'];
        $comment->comment = $data['comment'];

        $simpan = $comment->save();

        if($simpan){
            return back();
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            //return redirect()->route('register');
        }

    }

    public function delete($id){

    }

    public function index($id){

    }
}
