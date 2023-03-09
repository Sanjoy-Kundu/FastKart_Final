<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Color;
use App\Models\FeaturedPhoto;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductInventory;
use App\Models\User;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //
    function index(){
        $products = Product::latest()->get();
        return view('frontend.index.index', compact('products'));
    }

    function shop(){
        return view('frontend.shop.shop');
    }


    function product_details ($id){

         $product_details = Product::find($id);
     //    $product_details->product_category;
        $vendor = User::find($product_details->user_id);
         $featuer_photos = FeaturedPhoto::where('product_id',$id)->get();
        $related_products = Product::where('product_category', $product_details->product_category)->where('id', '!=', $id)->get();
        $product_inventories = Inventory::where('product_id', $id)->get();
        $inventories = Inventory::where('product_id', $id)->get();

  return view('frontend.products.product_details', compact('product_details', 'featuer_photos', 'vendor', 'related_products', 'product_inventories', 'inventories'));
    }






    //Product wishlist start
    function wishlist(){
        $wishlists = Wishlist::where('user_id', auth()->id())->with('relationshipWithProduct')->latest()->get();
        return view('frontend.whishlist.wishlist', compact('wishlists'));
    }


    //wishlist insert start
function product_wishlist_add($id){
  //  return $id;
   // return auth()->user()->name;
    Wishlist::insert([
        'user_id'=>auth()->user()->id,
        'product_id' => $id,
        'created_at' => Carbon::now(),
    ]);
    return back();
}
//wishlist insert end

//wishlist delete start
function wishlist_delete($id){
    Wishlist::find($id)->delete();
    return back()->with('success', 'Product deleted successfully');
}
//wishlist delete end
    //Product wishlist end






    //custom login start
    function custom_login(Request $request){
       // return $request;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])) {
            //echo "login password milse";
            return back();
        }else{
            return back()->with('login_error', 'Your email and password does not match');
        }
    }
    //custom login end




    //working with ajax size to color
    function get_color_list(Request $request){
      //  return $request->size_id;
      //  return $request->product_id;
/*        return   Inventory::where([
            'product_id' => $request->product_id,
            'product_size_id' => $request->size_id,
        ])->get(); */

        $generated_color_options = "<option value=' '>--select color---</option>";

        $Inventories =  Inventory::where([
            'product_id' => $request->product_id,
            'product_size_id' => $request->size_id,
        ])->get();
       // <option value="111">Red</option>
        foreach($Inventories as $inventory){
            //echo $inventory->relationshipWIthColor->color_name;
            $generated_color_options .= "<option value=".$inventory->relationshipWIthColor->id.">".$inventory->relationshipWIthColor->color_name.""."(stock-".$inventory->product_quantity.")"."</option>";
        }
        return $generated_color_options;
    }
    //Add to cart
    public function add_to_cart(Request $request){
        // echo $request->d_color_id;
        // echo $request->d_size_id;
        // echo $request->d_product_id;
        $user_quantity = $request->quantityNumber;
        $real_stock_products =  Inventory::where([
            "product_id" => $request->d_product_id,
            'product_size_id' => $request->d_size_id,
            'product_color_id' => $request->d_color_id,
        ])->first()->product_quantity; //database quantity er nam

       // echo $real_stock_products;
    //    if($real_stock_products> $user_quantity){
    //     echo "finally add to cart working";
    //    }else{
    //     echo "your function error";
    //    }
    //jodi user  product quantity 0 dey tahole bolte hobe je 0 hoitece bad number  aitar jonno amrader akta if likte hobe
        if($user_quantity < 0 ){
            echo "Its a bad number";
        }else{
            if($real_stock_products > $user_quantity){
                Cart::insert([
                    "user_id" => auth()->id(),
                    'product_id' => $request->d_product_id,
                    "color_id" => $request->d_color_id,
                    'size_id' => $request->d_size_id,
                    "quantity" => $user_quantity,
                    "created_at" => Carbon::now(),
                ]);
                echo "Successfully";
            }else{
                echo "Sorry you cant add";
            }
        }
    }

}
