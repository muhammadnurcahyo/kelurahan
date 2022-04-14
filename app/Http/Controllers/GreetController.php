<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Greet;
use Session;
class GreetController extends Controller
{

    public function seeder(){
        $row = Greet::count();
        if($row==0){

        $pos = array("kepala desa","direktur");

        foreach($pos as $a){
        $greet = new Greet;
        $greet->position =$a;
        $greet->name = "default name";
        $greet->slug = str_slug(strtolower($a));
        $greet->greeting = "lorem ipsum";
        $greet->img = "";

        $simpan = $greet->save();
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
    public function seed(){
        $counter = Greet::count();
        if($counter==0){
        $greet = new Greet;
        $greet->name = ucwords(strtolower("akun tes"));
        $greet->greeting = strtolower("lorem ipsum");
        $greet->img = "";

        $simpan = $greet->save();

        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            echo "seeder berhasil ditambahkan";
            //return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            //return redirect()->route('register');
        }
        }else{
            echo "seeder telah ditambahkan";
        }
    }

    public function update(Request $request,$id){
        $request->validate([
            'name'      => 'required',
            'greeting'  => 'required|min:5',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $post = Greet::find($id);
        $data = $request->except('_token');
        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.'kades'.'.'.$extension;
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/admin/', $fileNameToStore);
            $age = array("img"=>$fileNameToStore, "name"=>$data['name'], "greeting"=>$data['greeting']);
            if(file_exists(public_path().'/images/admin/'.$post['img'])){
            unlink(public_path().'/images/admin/'.$post['img']);
        }
        }else{
            $age = array("img"=>$post['img'], "name"=>$data['name'], "greeting"=>$data['greeting']);
        }
        $info = $post->update($age);

        if(!is_null($info)) {
            return back()->with('success','Success! data berhasil diupdate');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
        }

    public function edit($id){
        $data = Greet::find($id);
        return view('admin.kades', compact('data'));
    }

    public function index(){
        $data = Greet::paginate(10);
        return view('admin.greets', compact('data'));
    }
}
