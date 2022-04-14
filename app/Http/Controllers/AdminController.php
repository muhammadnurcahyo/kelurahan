<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use App\Models\Display;
class AdminController extends Controller
{
    public function __construct(){
        $this->getNotifMessage();
    }
    public function index()
    {
        $this->getNotifMessage();
        return view('admin.dashboard');
    }

    public function displayImage($filename)

{

  

    $path = storage_public('testimonials/' . $filename);

   

    if (!File::exists($path)) {

        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
}

    public function addtesti()
    {
        return view('admin.add-testimonial');
    }

    public function Perizinan()
    {
        return view('admin.add-perizinan');
    }

    public function Informasi()
    {
        return view('admin.add-informasi');
    }

    public function Edit(){
        $data = User::find(Auth::user()->id);
        return view('admin.profil', compact('data'));        
    }

    public function EditBumdes(){
       
        $data = Display::first();
        return view('admin.bumdes', compact('data'));        
    }

    public function Update(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|min:5',
            'phone' => 'required|min:5',
            'address'=> 'required|min:5',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        
        $post = User::find(Auth::user()->id);
        $data = $request->except('_token');
        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.'profile'.'.'.$extension;
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/admin/', $fileNameToStore);
            $age = array("img"=>$fileNameToStore, "name"=>$data['name'], "email"=>$data['email'],"phone"=>$data['phone'],"address"=>$data['address']);
            if(file_exists(public_path().'/images/admin/'.$post['img'])){
                unlink(public_path().'/images/admin/'.$post['img']);                
            }
        }else{
            $age = array("img"=>$post['img'], "name"=>$data['name'], "email"=>$data['email'],"phone"=>$data['phone'],"address"=>$data['address']);
        }
        $info = $post->update($age);
        
        if(!is_null($info)) {
            return back()->with('success','Success! data berhasil diupdate');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
    }

    public function updateBumdes(Request $request){
        $request->validate([
            'name' => 'required',
            'motto' => 'required|min:5',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $post = Display::first();
        $data = $request->except('_token');
        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.'logo'.'.'.$extension;
            $originalImage = $request->file('img');
            $originalImage->move(public_path().'/images/admin/', $fileNameToStore);
            $age = array("logo"=>$fileNameToStore, "name"=>$data['name'], "motto"=>$data['motto']);
            echo $fileNameToStore;
        }else{
            $age = array("logo"=>$post['logo'], "name"=>$data['name'], "motto"=>$data['motto']);
        }
        $info = $post->update($age);
        
        if(!is_null($info)) {
            return back()->with('success','Success! data berhasil diupdate');
        }else{
            return back()->with('failed','Alert! terjadi kesalahan');
        }
    }

    public function addBumdes()
    {
            $bumdes_qty = Display::count();
            if($bumdes_qty==0){
            $bumdes = new Display;
            $bumdes->name = ucwords(strtolower("luhur sembada"));
            $bumdes->motto = strtolower("lorem ipsum");
            $bumdes->logo = "def";
            $simpan = $bumdes->save();
            
            if($simpan){
                Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
                echo "bumdes profil default loaded";
                //return redirect()->route('login');
            } else {
                Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
                //return redirect()->route('register');
            }
        }else{
            echo "profil bumdes telah ada, ke halaman edit untuk mengganti";
    
        }
        }
    
    
}
