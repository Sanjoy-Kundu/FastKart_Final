<?php

use App\Models\Cart;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Wishlist;

function listOfCategories(){
    return Category::all();
}

 function total_wishlist(){
    return Wishlist::where('user_id', auth()->id())->count();
}

function carts(){
    return Cart::where('user_id', auth()->id())->get();
}

function stocks($product_id, $color_id, $size_id){
    //return "xxxx";
    return Inventory::where([
        'product_id' => $product_id,
        'product_color_id' => $color_id,
        'product_size_id' => $size_id,
    ])->first()->product_quantity;

}
?>
