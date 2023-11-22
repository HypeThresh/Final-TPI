<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function coupon(){
        return $this->belongsToMany(Discount::class,'user_coupon');
    }

    public function wishlist(){
        return $this->belongsToMany(Wishlist::class,'wish_list');
    }

    public function purchase(){
        return $this->belongsToMany(Purchase::class,'purchase');
    }
}
