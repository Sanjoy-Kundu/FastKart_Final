<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    function relationshipWIthProduct(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    function relationshipWithSize(){
        return $this->hasOne(Size::class, 'id','product_size_id');
    }

    function relationshipWIthColor(){
        return $this->hasOne(Color::class, 'id', 'product_color_id');
    }
}
