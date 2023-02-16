<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductInventoryController extends Controller
{
    function product_inventory(){
        return view('backend.inventory.add_inventory');
    }
}
