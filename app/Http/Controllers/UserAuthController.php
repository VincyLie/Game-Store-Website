<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    //
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $token = $user->createToken('API Token')->accessToken;
        if($user){
            return response(['user' => $user, 'token' => $token]);
        }
        else{
            return response(['error' => 'registration failed, field requirement is not fulfilled!', 403]);
        }

    }
    
    public function login(Request $request){
        $data = $request->validate
        (['email' => 'required|email:rfc,dns',
        'password' => 'required:min:8']);
        if(!Auth::attempt($data)) return response(['error'=>'Invalid credentials!', 403]);
        else{
            $token = Auth::user()->createToken('API Token')->accessToken;
            return response(['user'=>Auth::user(), 'token'=>$token]);
        }
    }

    public function getTransaction(){
        $transactions = Transaction::with('game')->where('user_id', Auth::user()->id)->get();
        return response(['data'=>$transactions]);
    }

}
