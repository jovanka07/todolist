<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
    	return view('auth/login');
    }
     public function postlogin(Request $request){
    	Auth::attempt($request->only('username', 'password'));
    	if(Auth::Check()){
    		return redirect('home');
    	}
    	echo "Gagal";
    }
    public function logout(){
    	Auth::logout();
    	return redirect('auth')->with('pesan' , 'Berhasil Logout');
    }
    public function register(){
    	return view('auth/register');
    }
    public function postRegister(Request $request){
    	$model = new Login;
    	$model->first_name = $request->first_name;
    	$model->last_name = $request->last_name;
    	$model->username = $request->username;
    	$model->password = Hash::make($request->password);
    	$model->save();
    	Auth::attempt($request->only('username', 'password'));
    	return redirect('auth')->with('pesan', 'Akun Berhasil di Buat, Login Now!');
    }
}
