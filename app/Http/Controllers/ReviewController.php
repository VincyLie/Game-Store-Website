<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add(Request $review,$id,$name){
        $review->validate([
            'description'=>'required',
            'recommended'=>'required',
        ]);
        $newReview = Review::insert([
            'username' => $name,
            'game_id' => $id,
            'description' => $review->description,
            'recommended' => $review->recommended
        ]);
        if($newReview){
            dd($newReview);
        }
    }
}
