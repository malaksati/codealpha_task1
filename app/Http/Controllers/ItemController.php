<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function products() {
        $items = Item::get();
        return view('products',compact('items'));
    }
    public function create() {
        return view('admin.addItem');
    }
    public function store(Request $request)
    {
        $item=new Item();
        $item->title = $request->title;
        $item->price=$request->price;
        $imgHolder = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time() . "_item_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $item['image'] = $imgHolder;
        }else {
            $item['image'] = "uploads/default-item.jpg";
        }
        $item->save();
        return redirect('/admin/dashboard');
    }

    public function edit(string $id)
    {
        $item=Item::find($id);
        return view('admin.editItem',compact('item'));
    }

    public function update(Request $request, string $id)
    {
        $item=Item::find($id);
        $item->title = $request->title;
        $item->price=$request->price;
        $imgHolder = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time() . "_item_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $item['image'] = $imgHolder;
        }else {
            $item['image'] = "uploads/default-item.jpg";
        }
        $item->save();
        return redirect('/admin/dashboard');
    }

    public function destroy(string $id)
    {
        Item::find($id)->delete();
        return redirect('/admin/dashboard');
    }
}
