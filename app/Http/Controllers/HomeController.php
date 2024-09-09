<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $items = Item::get();
        return view('index', compact('items'));
    }
    public function about() {
        return view('about');
    }
    public function admin() {
        $users = User::get();
        $items = Item::get();
        $messages = Message::get();
        return view('admin.dashboard',compact('users','items','messages'));
    }
}
