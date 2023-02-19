<?php

namespace App\Http\Controllers;

use App\Models\FeaturedPhoto;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductInventory;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function index(){
        $products = Product::latest()->get();
        return view('frontend.index.index', compact('products'));
    }


    function product_details ($id){

         $product_details = Product::find($id);
         $product_details->product_category;
        $vendor = User::find($product_details->user_id);
         $featuer_photos = FeaturedPhoto::where('product_id',$id)->get();
        $related_products = Product::where('product_category', $product_details->product_category)->where('id', '!=', $id)->get();
        $product_inventories = Inventory::where('product_id', $id)->get();
        $inventories = Inventory::where('product_id', $id)->get();

  return view('frontend.products.product_details', compact('product_details', 'featuer_photos', 'vendor', 'related_products', 'product_inventories', 'inventories'));
    }
}
