<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    
    protected $table = 'wish_list';
    public function product(){
        return $this->belongsToMany(Wishlist::class,'product_wishlist');
    }

    public function users(){
        return $this->belongsToMany(User::class,'user_wishlist');
    }
}
