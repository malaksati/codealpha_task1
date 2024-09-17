<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function register() {
        return view("auth.register");
    }
    function handle_register(Request $request) {
        $user=new User();
        $user->name = $request->name;
        $user->email=$request->email;
        $pass= Hash::make($request->password);
        $user->password=$pass;
        $imgHolder = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time() . "_user_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $user['image'] = $imgHolder;
        }else {
            $user['image'] = "uploads/default-profile.jpg";
        }
        $user->save();
        return redirect('/login');
    }
}
