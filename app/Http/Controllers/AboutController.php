<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class AboutController extends Controller
{
    public function __construct(){
        $this->getNotifMessage();
    }
    public function index(){
        $data = About::paginate(10);
        return view('admin.abouts',compact('data'));
    }

    public function seeder(){
        $row = About::count();
        if($row==0){

        $abouts = array("Visi Misi", "Sejarah Desa", "Struktur Organisasi", "Sambutan Kepala Desa");

        foreach($abouts as $a){
        $about = new About;
        $about->name = $a;
        $about->slug = str_slug(strtolower($a));
        $about->desc = "lorem ipsum";
        $simpan = $about->save();
        if($simpan){
            echo $a." terregistrasi\n";
            //return redirect()->route('login');
        } else {
            echo $a." tidak terregistrasi\n";
            //return redirect()->route('register');
        }
        }
    }else{
        echo "user telah ada";

    }
    }

    public function update($id){
        $data = About::find($id);
        return view('admin.add-about', compact('data'));
    }
    public function edit(Request $request,$id){
        $old = About::find($id);
        $post = $request->except('_token');

        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/informations/', $fileNameToStore);
            $age = array("img"=>$fileNameToStore, "name"=>$post['name'], "desc"=>$post['desc']);
            if(file_exists(public_path().'/images/informations/'.$old['img'])){
                unlink(public_path().'/images/informations/'.$old['img']);
            }
        }else{
            $age = array("img"=>$old['img'], "name"=>$post['name'], "desc"=>$post['desc']);
        }
        $info = $old->update($age);
        if(!is_null($info)) {
            return back()->with('success','Success! data berhasil diupdate');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
    }


}
