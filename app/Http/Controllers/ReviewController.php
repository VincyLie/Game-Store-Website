<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add(Request $review,$gameId,$name){
        $review->validate([
            'description'=>'required',
            'recommended'=>'required',
        ]);
        $newReview = Review::insert([
            'username' => $name,
            'game_id' => $gameId,
            'description' => $review->description,
            'recommended' => $review->recommended
        ]);
        if($newReview){
            return redirect('/dashboard');
        }
        else{
            return redirect()->back()->with('error','Review failed added!');
        }
    }
}
