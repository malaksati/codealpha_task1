<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function contact() {
        return view('contact');
    }
    public function contact_add(Request $req){
        $message = new Message();
        $message->name = $req->name;
        $message->email = $req->email;
        $message->message = $req->message;
        $message->subject = $req->subject;
        $message->save();
        return redirect('contact');
    }
}
