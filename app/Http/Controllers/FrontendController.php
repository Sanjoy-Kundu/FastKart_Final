<?php

namespace App\Http\Controllers;

use App\Models\FeaturedPhoto;
use App\Models\Product;
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
        $featuer_photos = FeaturedPhoto::where('product_id',$id)->get();
      return view('frontend.products.product_details', compact('product_details', 'featuer_photos'));
    }
}
