<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Can;

class CartController extends Controller
{
    public function show($id) {
        $carts = Cart::where('user_id',$id)->get();
        return view('cart', compact('carts'));
    }
    public function add($item_id) {
        $cart = new Cart();
        $cart->item_id = $item_id;
        $cart->user_id = Auth::user()->id;
        $cart->save();
        return redirect('/');
    }
    public function delete($id) {
        Cart::find($id)->delete();
        return redirect('/');
    }
}
