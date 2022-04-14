<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use Validator;

class PermissionsController extends Controller
{
    public function getAll(){
        $data = Permission::paginate(5);
        return view('admin.perizinan', compact('data'));
    }

    public function Delete($id){
        $deletedRows = Permission::where('id', $id)->delete();
        return back()->with('success', 'data berhasil dihapus');
    }

    public function editForm($id)
    {
        $data= Permission::find($id);
        return view("admin.add-perizinan",compact('data'));
    }

    public function Edit($id,Request $request){
        $request->validate([
            'name'      => 'required',
            'desc'  => 'required|min:5',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $post = Permission::find($id);
        $data = $request->except('_token');
        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/permissions/', $fileNameToStore);
            $age = array("img"=>$fileNameToStore, "name"=>$data['name'], "desc"=>$data['desc']);
        }else{
            $age = array("img"=>$post['img'], "name"=>$data['name'], "desc"=>$data['desc']);
        }
        $permission = $post->update($age);
        if(!is_null($permission)) {
            return back()->with('success','Success! data berhasil diupdate');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }

    }

    public function Store(Request $request){
        $request->validate([
            'name'      => 'required',
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
                $originalImage->move(public_path().'/images/permissions/', $fileNameToStore);
                $post = array("img"=>$fileNameToStore, "name"=>$data['name'], "desc"=>$data['desc']);
                $permission = Permission::create($post);

                if(!is_null($permission)) {
                    return back()->with('success','Success! data berhasil ditambahkan');
                }else{
                    return back()->with('failed','Alert! terjadi kesalahan');
                }
        //$post = $request->except('_token');
        //$a = Permission::create($post);
        //return $a;
        }
    }
}
