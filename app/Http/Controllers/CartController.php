<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Game;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $user = Auth::check();
        if ($user){
            $role_id = Auth::user()->role_id;
            $name = Auth::user()->name;
        }else{
            $role_id = '3';
            $name = 'Guest';
        }
        $userId = Auth::user()->id;
        $carts = Cart::where('user_id', $userId)->get();
        $total = 0;
        // dd($carts);
        $count = 0;
        foreach ($carts as $cart) {
            $count++;
            $total += $cart->game->price;

            // dd($cart->price);
        }
        // dd($total);
        return view('cart', [
            'role_id' => $role_id,
            'name' => $name,
            'user' => $user,
            'carts' => $carts,
            'total' => $total,
            'count' => $count
        ]);
    }

    public function store($gameId){
        $userId = Auth::user()->id;
        $inCart = false;
        $bought = false;
        $carts = Cart::where('user_id', $userId)->get();
        $transactions = Transaction::where('user_id', $userId)->get();
        foreach($carts as $cart){
            if($cart->game_id == $gameId){
                $inCart = true;
                return back()->with('error','Item is already in cart!');
            }
        }
        foreach($transactions as $transaction){
            if($transaction->game_id == $gameId){
                $bought = true;
                return back()->with('error','You have already bought this game!');
            }
        }
        if(!$inCart && !$bought){
            $cart = Cart::create([
                'user_id' => $userId,
                'game_id' => $gameId,
            ]);
            return back();
         }
    }

    public function remove($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->route('cart');
    }

    public function checkout(){
        $carts = Cart::all();
        foreach($carts as $cart) {
            Transaction::create([
                'game_id' => $cart->game_id,
                'user_id' => $cart->user_id
            ]);
            $cart->game->amount_sold += 1;
            $cart->game->save();
            $cart->delete();
        }
        return redirect()->route('cart');
    }
}
