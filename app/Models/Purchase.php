<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchase';
    use HasFactory;

    public function product(){
        return $this->belongsToMany(Purchase::class);
    }
}
