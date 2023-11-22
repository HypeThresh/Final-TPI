<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $table = 'product';

    public function product(){
        //return a belongsTo relationship for a table called product
        return $this->belongsTo(Product::class);
    }

}
