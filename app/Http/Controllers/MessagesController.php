<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessagesController extends Controller
{
    public function Store(Request $request){
        $request->validate([
            'name'      => 'required',
            'email'  => 'required|email|min:5',
            'phone' => 'required|min:5',
            'message' => 'required|min:5',
        ]);
        $post = $request->except("_token");
        $a = Message::create($post);
        return back()->with("success","pesan berhasil dikirim");
    }

    public function getAll(){
        $data = Message::orderBy('id','desc')->paginate(5);
        return view('admin.messages', compact('data'));
    }

    public function Delete($id){
        $deletedRows = Message::where('id', $id)->delete();
        return back()->with('success', 'data berhasil dihapus');
    }

    public function read($id){
        
        $data = Message::find($id);
        $age = array("name"=>$data['name'], "email"=>$data['email'],"phone"=>$data['phone'],'isread'=>'true');
        $data->update($age);
        $this->getNotifMessage();
        return view('admin.inbox', compact('data'));
        
    }
}
