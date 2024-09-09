<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login() {
        return view("auth.login");
    }
    function handle_login(Request $req) {
        $data = $req->all();
        $cred = Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
        if($cred){
            return redirect("/");
        }else {
            return redirect()->back();
        }
    }
}
