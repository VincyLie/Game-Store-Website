<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('Dashboard.dashboard', ['games' => $games]);
    }
}
