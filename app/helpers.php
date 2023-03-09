<?php

use App\Models\Cart;
use App\Models\Category;
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
?>
