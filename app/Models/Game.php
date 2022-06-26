<?php

namespace App\Models;

use App\Models\Slide;
use App\Models\Review;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function slides(){
        return $this->hasMany(Slide::class);
    }
}
