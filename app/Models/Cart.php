<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    function relationToProduct(){
        //return $this->hasOne(Product::class, 'cart_id', 'product_id');
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
