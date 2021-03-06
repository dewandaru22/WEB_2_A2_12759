<?php

namespace App\Http\Controllers;

use App\ModelMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Member extends Controller{
    
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            return view('home');
        }
    }
    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = ModelMember::where('email',$email)->first();
        if(count($data) > 0){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salahaa!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
    public function register(Request $request){
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:member',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new ModelMember();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}
