<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductInventoryController extends Controller
{
    function product_inventory(){
        $sizes = Size::latest()->get();
        $colors = Color::latest()->get();
        return view('backend.inventory.add_inventory', compact('sizes', 'colors'));
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



    function product_inventory_color(Request $request){
        $request->validate([
            'color_name' => 'required||unique:colors,color_name',
            'color_code' => 'required||unique:colors,color_code',
        ],[
            'color_name.required' => "Product Name is required",
            'color_code.required' => "Product Color is required",
        ]);

        Color::insert([
            'color_name' => $request->color_name,
            'color_code' => $request->color_code,
            'created_at' => Carbon::now()
        ]);
        return back()->with('color_success', 'Color added successfully');
    }
}
