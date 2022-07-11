<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $games = Game::all();
        $user = Auth::check();
        $featured;
        if ($user){
            $role_id = Auth::user()->role_id;
            $name = Auth::user()->name;
        }else{
            $role_id = '3';
            $name = 'Guest';
        }
        return view('Dashboard.dashboard', [
            'role_id' => $role_id,
            'name' => $name,
            'user' => $user,
            'games' => $games
        ]);
    }
    public function search(Request $request){
        //harusnya 15 
        $games = Game::where('title', 'LIKE', "%$request->title%")->paginate(3);
        $user = Auth::check();
        if ($user){
            $role_id = Auth::user()->role_id;
            $name = Auth::user()->name;
        }else{
            $role_id = '3';
            $name = 'Guest';
        }
        return view('Dashboard.search',[
            'role_id' => $role_id,
            'name' => $name,
            'user' => $user,
            'games' => $games
        ]);
    }
}
