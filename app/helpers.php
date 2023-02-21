<?php

use App\Models\Category;
use App\Models\Wishlist;

function listOfCategories(){
    return Category::all();
}

function total_wishlist(){
    return Wishlist::where('user_id', auth()->user()->id)->count();
}
?>
