<?php

namespace App\Models;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function game(){
        return $this->belongsTo(Game::class);
    }
}
