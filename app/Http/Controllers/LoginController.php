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
        $success = User::create([
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
        $validator = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required:min:8'
        ]);
        //autentikasi user 
        if(Auth::attempt($validator)){
            $email = $request->email;
            $password = $request->password;
            //mau remember me (simpan cookie 2 hari)
            if($request->has('remember')){
                $cookie = cookie(['email', $email, 2880],
                                ['password',$password,2880]);
                return redirect('/dashboard')->cookie($cookie);
            }else{
                return redirect('/dashboard');
            }
        }else{
            return redirect('login')->withErrors('Login Failed! Please try again!');
        }
    }
    public function Logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect('/dashboard');
        }
    }
}
