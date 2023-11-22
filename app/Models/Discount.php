<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{   
    use HasFactory;
    
    protected $table = 'discount_coupon';
    public function users(){
        return $this->belongsToMany(User::class,'user_coupon');
    }
}
