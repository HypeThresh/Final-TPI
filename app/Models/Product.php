<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $table = 'product';

    public function purchase(){
        //return a belongsTo relationship for a table called product
        return $this->belongsToMany(Purchase::class,'products_purchase');
    }

    public function category(){
        //return a belongsTo relationship for a table called product
        return $this->belongsToMany(Product::class,'product_category');
    }

}
