<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile($id) {
        $user = User::find($id);
        return view('auth.profile', compact('user'));
    }
    public function profile_edit($id) {
        $user = User::find($id);
        return view('auth.editProfile', compact('user'));
    }
    public function profile_update(Request $request, $id) {
        $user=User::find($id);
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
        return redirect()->route('profile',[$id]);
    }
    public function create() {
        return view('admin.addUser');
    }

    public function store(Request $request)
    {
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
        return redirect('/admin/dashboard');
    }

    public function edit(string $id)
    {
        $user=User::find($id);
        return view('admin.editUser',compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user=User::find($id);
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
        return redirect('/admin/dashboard');
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect('/admin/dashboard');
    }
}
