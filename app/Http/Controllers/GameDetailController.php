<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Review;
use App\Models\Category;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameDetailController extends Controller
{
    public function index($id){
        $game = Game::find($id);
        $category=Category::where('id',$game->category_id)->first();
        $relatedGames = Game::where('category_id', $game->category_id)->get();
        $slides = Slide::where('game_id',$id)->get();
        $reviews = Review::where('game_id',$id)->get();
        $user = Auth::check();
        $user_id = $id;
        $date = strtotime($game->created_at);
        $release_date = date('d M, Y',$date);
        $Recommended = 0;
        $Not_Recommended = 0;
        foreach($reviews as $review){
            if($review->recommended=='Recommended'){
                $Recommended++;
            }
            else{
                $Not_Recommended++;
            }
        }
        if ($user){
            $role_id = Auth::user()->role_id;
            $name = Auth::user()->name;
        }else{
            $role_id = '3';
            $name = 'Guest';
        }
        return view('gameDetail', [
            'role_id' => $role_id,
            'name' => $name,
            'user' => $user,
            'game' => $game,
            'slides' => $slides,
            'relatedGames' => $relatedGames,
            'reviews' => $reviews,
            'user_id' => $id,
            'category' => $category,
            'release_date' => $release_date,
            'recommended' => $Recommended,
            'not_recommended' => $Not_Recommended
        ]);
    }
}
