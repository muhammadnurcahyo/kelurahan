<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
{
    public function __construct(){
        $this->getNotifMessage();
    }

    public function index(){
        $data = Slider::paginate(10);
        return view("admin.slider",compact('data'));
    }

    public function create(){
        return view("admin.add-slider");
    }
    public function update ($id){
        $data = Slider::find($id);
        return view("admin.add-slider", compact('data'));
    }
    /*public function store(Request $request){
        $request->validate([
            'title'      => 'required',
            'desc'  => 'required|min:5',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg'

        ]);
        
        if($request->hasFile('img')){
            $data = $request->except('_token');
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/informations/', $fileNameToStore);
            $post = array("img"=>$fileNameToStore, "title"=>$data['title'], "url"=>$data['url']);
            
            $info = Slider::create($post);
            if(!is_null($info)) {
                return back()->with('success','Success! data berhasil ditambahkan');
            }else{
                return back()->with('failed','Alert! terjadi kesalahan');
            }
    }else{
        echo("this");
    }
    }
*/

public function store(Request $request){
    $request->validate([
        'title'      => 'required',
        'url'  => 'required',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg'

    ]);
    if($request->hasFile('img')){
        $data = $request->except('_token');
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('img')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $originalImage = $request->file('img');
        $originalImage->move(public_path().'/images/informations/', $fileNameToStore);
        $post = array("img"=>$fileNameToStore, "title"=>$data['title'], "url"=>$data['url']);
        $info = Slider::create($post);
        
        if(!is_null($info)) {
            return back()->with('success','Success! data berhasil ditambahkan');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
        }else{
            echo("this");
        }
}
    public function edit(Request $request, $id){
        $request->validate([
            'title'      => 'required',
            'url'  => 'required|min:5',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $post = Slider::find($id);
        $data = $request->except('_token');
        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/informations/', $fileNameToStore);
            $age = array("img"=>$fileNameToStore, "title"=>$data['title'],"url"=>$data['url']);
            if(file_exists(public_path().'/images/informations/'.$post["img"])){
            unlink(public_path().'/images/informations/'.$post["img"]);
        }
        }else{
            $age = array("img"=>$post['img'], "title"=>$data['title'],"url"=>$data['url']);
        }
        $info = $post->update($age);
        if(!is_null($info)) {
            return back()->with('success','Success! data berhasil diupdate');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
    }

    public function delete($id){
        $row = Slider::find($id);
        $deletedRows = Slider::where('id', $id)->delete();
        if(file_exists(public_path().'/images/informations/'.$row['img'])){
            unlink(public_path().'/images/informations/'.$row['img']);
        }
        return back()->with('success', 'data berhasil dihapus');
    }
}
