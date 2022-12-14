<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Slide;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ManageGameController extends Controller
{
    public function view_add_game(){
        $categories = Category::all();
        return view('addGame',['categories'=>$categories]);
    }
    public function add_game(Request $game){
        //Validasi 
        $validation = $game->validate([
            'title'=>'required',
            'category'=>'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required||image|mimes:jpg,jpeg,svg,png',
            'slides' => 'required|min:3',
            'slides.*' => 'mimes:jpg,jpeg,svg,png',
            'description' => 'required|min:10'
        ]);
        //Upload Thumbnail
        $thumbnail_file = $game->thumbnail->getClientOriginalName();
        $game->thumbnail->storeAs('/public/assets', $thumbnail_file);
            //Create Game
            $success = Game::create([
                'title' => $game->title,
                'category_id' => $game->category,
                'price' => $game->price,
                'thumbnail' => $thumbnail_file,
                'description' => $game->description,
                'positive' => 0
            ]);
            //Upload Slides
            foreach($game->file('slides') as $slide){
                $slide_file = $slide->getClientOriginalName();
                // $slide->move(public_path('assets'),$slide_file);
                $slide->storeAs('/public/assets', $slide_file);
                Slide::insert([
                    'game_id' => $success->id,
                    'name' => $slide_file
                ]);
            }
            if($success){
                return redirect()->route('game.edit');
            }
            else{
                return redirect()->back()->with('error','Game failed created!');
            }
        // }
    }
    public function edit(Game $game){
        $games = Game::paginate(10);
        $user = Auth::check();
        $categories = Category::all();
        if ($user){
            $role = Auth::user()->role_id;
            $name = Auth::user()->name;
        }
        else{
            $role = '3';
            $name = 'Guest';
        }
        return view('manageGame',[
            compact('games'),
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
            'games' => $games,
            'categories' => $categories
        ]);
    }
    public function view_update_game($id){
        $game = Game::find($id);
        $categories = Category::all();
        return view('updateGame',[
            'game' => $game,
            'categories' => $categories
        ]);
    }
    public function update_game(Request $game, $id){
        $game->validate([
            'title'=>'required',
            'category'=>'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required||image|mimes:jpg,jpeg,svg,png',
            'slides' => 'required',
            'description' => 'required|min:10'
        ]);
            $NewGame = Game::find($id);
            Storage::delete('/public/assets/'.$NewGame->thumbnail);
            foreach ($NewGame->slides as $slide) {
                Storage::delete('/public/assets/'.$slide->name);
            }
            foreach ($NewGame->slides as $slide) {
                $slide->delete();
            }
            $thumbnail_file = $game->thumbnail->getClientOriginalName();
            // $game->thumbnail->move(public_path('assets'), $thumbnail_file);
            $game->thumbnail->storeAs('/public/assets', $thumbnail_file);          
            $NewGame->title = $game->title;
            $NewGame->category_id = $game->category;
            $NewGame->price = $game->price;
            $NewGame->thumbnail = $thumbnail_file;
            $NewGame->description = $game->description;
             //Upload Slides
            foreach($game->file('slides') as $slide){
                $slide_file = $slide->getClientOriginalName();
                $slide->storeAs('/public/assets', $slide_file);
                Slide::insert([
                    'game_id' => $id,
                    'name' => $slide_file
                ]);
            }
            if($NewGame->save()){
                return redirect()->route('game.edit');
            }
            else{
                return redirect()->back()->with('error','Game failed updated!');
            }
        // }
    }
    public function delete_game($id){
        $game = Game::find($id);
        if($game->delete()){
            Storage::delete('/public/assets/'.$game->thumbnail);
            foreach ($game->slides as $slide) {
                Storage::delete('/public/assets/'.$slide->name);
                $slide->delete();
            }
            return redirect()->route('game.edit');
        }
        else{
            return redirect()->back()->with('error','Game failed deleted!');
        }
    }
}
