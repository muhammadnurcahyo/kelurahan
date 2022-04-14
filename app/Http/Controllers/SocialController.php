<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function __construct(){
        $this->getNotifMessage();
    }
    public function index(){
        $data = Social::paginate(7);
        return view('admin.socials', compact('data'));
    }

    public function add(){
        $icon = array('facebook'=>'fab fa-facebook-f',
                       'instagram'=>'fab fa-instagram',
                        'whatsapp'=>'fab fa-whatsapp',
                        'phone'=>'fas fa-phone'
                    );
        return view('admin.add-social', compact('icon'));

    }

    public function store(Request $request){
        $data = $request->except('_token');
        $simpan = Social::create($data);
        if(!is_null($simpan)) {
            return back()->with('success','Success! data berhasil diupdate');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
    }

    public function delete($id){
        $deletedRows = Social::where('id', $id)->delete();
        return back()->with('success', 'data berhasil dihapus');
    }

    public function edit($id){
        $data = Social::find($id);
        $icon = array('facebook'=>'fab fa-facebook-f',
                       'instagram'=>'fab fa-instagram',
                        'whatsapp'=>'fab fa-whatsapp',
                        'phone'=>'fas fa-phone'
                    );
        return view('admin.add-social', compact('data','icon'));
    }

    public function update(Request $request,$id){
        $info = Social::find($id);
        $data = $request->except('_token');
        $hasil = $info->update($data);

        if(!is_null($hasil)) {
            return back()->with('success','Success! data berhasil ditambahkan');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
    }
}
