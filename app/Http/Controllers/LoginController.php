<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function tampilanRegister(){
        return view('register');
    }
    public function Register(Request $request){
         $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password'
        ]);
        // $success['password'] = Hash::make($success['password']);
        $success = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => '2'
        ]);
        if($success){
            return redirect('/login');
        }else{
            return redirect('/register')->withErrors('Registration Failed!');
        }
    }
    public function tampilanLogin(){
        return view('login');
    }
    public function Login(Request $request){
        //validasi 
        $remember=false;
        $validator = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required:min:8'
        ]);
        if($request->has('remember-me')){
            $remember = true;
        }
        //Remember untuk 2 hari 
        Auth::setRememberDuration(2880);
        //autentikasi user 
        if(Auth::attempt($validator,$remember)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        else{
            return redirect('login')->withErrors('Login Failed! Please try again!');
        }
    }
    public function Logout(Request $request){
        if(Auth::check()){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/dashboard');
        }
    }
}
