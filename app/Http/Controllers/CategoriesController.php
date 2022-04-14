<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
    public function __construct(){
        $this->getNotifMessage();
    }
    public function index(){
        $data = Category::paginate(10);
        return view('admin.category',compact('data'));

    }

    public function delete($id){
        $deletedRows = Category::where('id', $id)->delete();
        return back()->with('success', 'data berhasil dihapus');        
    }

    public function create(){
        $kind = ['produk', 'lainya'];
        return view('admin.add-category',compact('kind'));
    }

    public function update($id){
        $data = Category::find($id);
        $kind = ['produk', 'lainya'];
        return view('admin.add-category', compact('data','kind'));
    }

    public function store(Request $request){
        $request->validate([
            'category'      => 'required',
            'kind'      => 'required'
        ]);
        $data = $request->except('_token');
        $post = array("slug"=>str_slug($data['category']), "category"=>$data['category'], "kind"=>$data['kind']);
        $info = Category::create($post);
        if(!is_null($info)){
            return back()->with('success','Success! data berhasil ditambahkan');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
}

    public function edit(Request $request,$id){
        $info = Category::find($id);
        
        $request->validate([
            'category'      => 'required',
            'kind'      => 'required'
        ]);
        $data = $request->except('_token');
        $post = array("slug"=>str_slug($data['category']), "category"=>$data['category'],"kind"=>$data['kind']);
        $hasil = $info->update($post);

        if(!is_null($hasil)) {
            return back()->with('success','Success! data berhasil ditambahkan');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
    }
}
