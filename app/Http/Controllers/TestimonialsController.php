<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;


class TestimonialsController extends Controller
{

    public function allData(){
        $data = Testimonial::paginate(3);
        return view("admin.testimoni",compact('data'));
    }
    public function addTestiAction(Request $request){
        $request->validate([
            'name'      => 'required',
            'testimonial'  => 'required|min:5',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if($request->hasFile('img')){
            
        
        $data = $request->except('_token');
        dump($data);
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        echo $filenameWithExt;
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            echo $data['name'];
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/testimonial/', $fileNameToStore);
            //$path = $request->file('img')->storeAs('testimonials',$fileNameToStore);
            $age = array("img"=>$fileNameToStore, "name"=>$data['name'], "testimonial"=>$data['testimonial']);
            $testi = Testimonial::create($age);
            if(!is_null($testi)) {
                return back()->with('success','Success! data berhasil ditambahkan');
            }else{
                return back()->with('failed','Alert! terjadi kesalahan');
            }
        }
    }

    public function delete($id){
        
        $deletedRows = Testimonial::where('id', $id)->delete();
        return back()->with('success', 'data berhasil dihapus');
    }

    public function edit($id){
        $data= Testimonial::find($id);
        return view("admin.add-testimonial",compact('data'));

    }

    public function editTestiAction($id, Request $request){
        $request->validate([
            'name'      => 'required',
            'testimonial'  => 'required|min:5',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $post = Testimonial::find($id);
        $data = $request->except('_token');
        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/testimonial/', $fileNameToStore);
            //$path = $request->file('img')->storeAs('testimonials',$fileNameToStore);
            $age = array("img"=>$fileNameToStore, "name"=>$data['name'], "testimonial"=>$data['testimonial']);
        }else{
            $age = array("img"=>$post['img'], "name"=>$data['name'], "testimonial"=>$data['testimonial']);
        }
        $testi = $post->update($age);
        if(!is_null($testi)) {
            return back()->with('success','Success! data berhasil diupdate');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
    }
}
