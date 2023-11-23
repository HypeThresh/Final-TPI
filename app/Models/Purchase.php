<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchase';
    use HasFactory;

    public function products(){
        return $this->belongsToMany(Product::class,'products_purchase');
    }

    public function users(){
        return $this->belongsToMany(User::class,'purchase_history');
    }

    public function payment(){
        return $this->belongsToMany(Payment::class,'purchase_payment');
    }
}
