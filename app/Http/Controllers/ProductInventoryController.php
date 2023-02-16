<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductInventoryController extends Controller
{
    function product_inventory(){
        return view('backend.inventory.add_inventory');
    }

    function product_inventory_size(Request $request){
        $request->validate([
            'size_name' => 'required||unique:sizes,size_name',
        ],[
            'size_name.required' => "Size name is required",
            'size_name.unique' => "Size name already taken"
        ]);

        Size::insert([
            'size_name' => $request->size_name,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Size added successfully');
    }
}
