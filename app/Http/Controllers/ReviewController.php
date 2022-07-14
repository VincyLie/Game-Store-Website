<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class ReviewController extends Controller
{
    public function add(Request $review,$gameId,$name){
        $review->validate([
            'description'=>'required',
            'recommended'=>'required',
        ]);
        $userId = Auth::user()->id;
        $old_reviews = Review::all();
        $available = true;
        $game = Game::find($gameId);
        $updatePositive = 0;
        foreach($old_reviews as $old_review){
            //udah pernah jd tinggal update
            if($old_review->user_id==$userId&&$old_review->game_id==$gameId){
                $available= false;
                $old_review->recommended = $review->recommended;
                $old_review->description = $review->description;
                if($review->recommended=='Recommended'){
                    $updatePositive = $game->positive + 1;
                    $game->positive = $updatePositive;
                    $game->save();
                }
                else{
                    if($game->positive!=0){
                        $updatePositive = $game->positive - 1;
                        $game->positive = $updatePositive;
                        $game->save();
                    }
                }
                if($old_review->save()){
                    return back();
                }
            }
        }
        //Belom pernah review
        if($available==true){
            $newReview = Review::insert([
                'username' => $name,
                'game_id' => $gameId,
                'user_id' => $userId,
                'description' => $review->description,
                'recommended' => $review->recommended
            ]);
            if($review->recommended=='Recommended'){
                $updatePositive = $game->positive + 1;
                $game->positive = $updatePositive;
                $game->save();
            }
            else{
                if($game->positive!=0){
                        $updatePositive = $game->positive - 1;
                        $game->positive = $updatePositive;
                        $game->save();
                }
            }
            if($newReview){
                return back();
            }
            else{
                return redirect()->back()->with('error','Review failed added!');
            }
        }
    }
}
