<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'product_supplier';
    public function category(){
        return $this->hasMany(Supplier::class, 'supplier');
    }
}
