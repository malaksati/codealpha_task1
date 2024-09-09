<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cart extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'item_id',
        'user_id',
        'quantity'
    ]; 
    protected $appends = ['item_name','item_id', 'user_id'];
    public function item()
    {
        return $this->belongsTo(Item::class,'item_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function getItemTitleAttribute()
    {
        return $this->item->title;
    }
    public function getItemPriceAttribute()
    {
        return $this->item->price;
    }
    public function getItemImageAttribute()
    {
        return $this->item->image;
    }
}
