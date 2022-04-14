<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct(){
        $this->getNotifMessage();
    }
    public function login()
    {
        return view('admin.login');
    }
    public function proses_login(Request $request)
    {
        
            $rules = [
                'email'                 => 'required|email',
                'password'              => 'required|string'
            ];
      
            $messages = [
                'email.required'        => 'Email wajib diisi',
                'email.email'           => 'Email tidak valid',
                'password.required'     => 'Password wajib diisi',
                'password.string'       => 'Password harus berupa string'
            ];
      
            $validator = Validator::make($request->all(), $rules, $messages);
      
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
      
            $data = [
                'email'     => $request->input('email'),
                'password'  => $request->input('password'),
            ];
            
            Auth::attempt($data);
            
            if (Auth::check()) { 
                //Login Success
                return redirect()->route('admin');
    
            } else { 
                Session::flash('error', 'Email atau password salah');
                return redirect('/login');
            }
    }
    public function logout() {
        Auth::logout();
        return Redirect('login');
    }

    public function register(){
        $usr = User::count();
        if($usr==0){
        $user = new User;
        $user->name = ucwords(strtolower("akun tes"));
        $user->email = strtolower("email@tes.com");
        $user->password = Hash::make("fanfanfan");
        $user->phone = "081704567543";
        $user->address = "kerjan beji patuk gk";
        $user->img = "blala";
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();
        
        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            echo "user terregistrasi";
            //return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            //return redirect()->route('register');
        }
    }else{
        echo "user telah ada";

    }
    }

    public function changepass(){
        return view('admin.change-password');
    }

    public function authPass(Request $request){
        $user = User::find(Auth::user()->id);
        $data = $request->except('_token');
        if (Hash::check($data['oldpass'], $user->password)) {
        // Success
            $up = $user->update(["password"=>Hash::make($data['newpass'])]);
            if(!is_null($up)) {
                return back()->with('success','Success! data berhasil diupdate');
            }else{
                return back()->with('failed','Alert! terjadi kesalahan');
            }
        }
        
    }
}
