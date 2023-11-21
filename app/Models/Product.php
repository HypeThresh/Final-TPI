<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name_product',
        'description_product',
        'img_product',
        'id_supplier',
        'product_price',
        'product_stock',
        'product_cost'

    ];
}
