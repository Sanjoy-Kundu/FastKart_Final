<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Color;
use App\Models\Coupon;
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

    function shop($category_id){
        if($category_id == "all"){
            $products = Product::all();
        }else{
            $products = Product::where('product_category', $category_id);
        }
        return view('frontend.shop.shop', compact('products'));
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
                //exists check
                if(Cart::where([
                    "user_id" => auth()->id(),
                    'product_id' => $request->d_product_id,
                    "color_id" => $request->d_color_id,
                    'size_id' => $request->d_size_id,
                ])->exists()){
                    //quantity increment koro
                    Cart::where([
                        "user_id" => auth()->id(),
                        'product_id' => $request->d_product_id,
                        "color_id" => $request->d_color_id,
                        'size_id' => $request->d_size_id,
                    ])->increment('quantity',$user_quantity);
                }else{
                    //if bosanor purbe aita cilo
                    Cart::insert([
                        "user_id" => auth()->id(),
                        'product_id' => $request->d_product_id,
                        "color_id" => $request->d_color_id,
                        'size_id' => $request->d_size_id,
                        "quantity" => $user_quantity,
                        "created_at" => Carbon::now(),
                    ]);
                }
                echo "Successfully";
                }
        }
    }

//view cart
/*
 function view_cart(){
    return view('frontend.shop.viewCart');
}
*/

//view cart e coupon implenet korar por
        function view_cart(){
              // return $_GET['coupon_name'];
              if(isset($_GET['coupon_name'])){
                    $coupon_name = $_GET['coupon_name'];
                    $coupon = Coupon::where('coupon_name', $coupon_name)->first();
                    //exists check start
                   //return  Coupon::where('coupon_name', $coupon_name)->exists();
                   //exists check end
                   $discount = 90;
                     if(Coupon::where('coupon_name', $coupon_name)->exists()){
                       // return Carbon::now();//today date
                       // return $coupon->coupon_expried_date; //database theke expired date nilam
                        //return Carbon::parse($coupon-> $coupon->coupon_expried_date); //parsre er maddhome carbon e convert korlam
                        if(Carbon::now() >= Carbon::parse($coupon->coupon_expried_date)){
                           // return "INvalid coupon";
                            return redirect('view/cart')->with('error', 'This coupon is invalid.Pease try again later.');
                        }else{
                           // return "valid coupon";
                          // return $coupon->coupon_limit; limit ber kore chek dibo
                          if($coupon->coupon_limit >= 0){
                           // return  "good coupon";
                            $discount = $coupon->coupon_discount;
                            $name = $coupon->coupon_name;
                            session(['coupon_name' => $name]);
                            return view('frontend.shop.viewCart', compact('discount', 'name'));
                          }else{
                            //return "Coupon kaj korbe na ";
                            return redirect('view/cart')->with('error', 'Coupon limitation is over');
                        }
                        }
                        // return "coupon name database er coupon er sathe milse";
                   }else{
                    return redirect('view/cart')->with('error', 'Coupon name does not exists');
                    //return "Couon name databse er sathe mile nai";
                   }

              }else{
                $coupon_name = ' ';
                $discount = 0;
               // echo "coupon nai";
              }
        return view('frontend.shop.viewCart', compact('discount'));
    }

    //cart product remove
    function add_to_cart_remove($cart_remove_product){
        Cart::find($cart_remove_product)->forceDelete();
        return back();
    }



    //view_cart.blade.php update cart button working
    function update_cart(Request $request){
    //return $request->quantity;
    foreach ($request->quantity as $cart_id => $cart_quantity) {
        //echo $cart_id;
        // echo "<br/>";
        // echo $cart_quantity;
        Cart::find($cart_id)->update([
            'quantity' => $cart_quantity
        ]);
    }
    return back();
    }



/*checkout start step-01
function checkout(){
    return view('frontend.checkout.checkout');
}
checkout end
*/

//checkout start step-02
function checkout(){
    /*return url()->previous();
    return strpos('hello', 'e');
    return strpos(url()->previous(), 'view/cart');*/
     $addresses = Address::where('user_id', auth()->id())->latest()->get();
    if(strpos(url()->previous(), 'view/cart') || strpos(url()->previous(), 'product/details') || strpos(url()->previous(), 'product/checkout')){
        //return "wellcome";
        return view('frontend.checkout.checkout', compact('addresses'));
    }else{
        return view('frontend.errorPage.error');
    }
}

//checkout start






//checkout address
function address(Request $request){
        Address::insert([
            'user_id'=>auth()->id(),
            'label'=>$request->label,
            'customer_name'=>$request->customer_name,
            'customer_address'=>$request->customer_address,
            'zip_code'=>$request->zip_code,
            'customer_mobile'=>$request->customer_mobile,
            'created_at'=>Carbon::now()
        ]);
        //echo "done";
        return back();
}



//checkout address delete
function address_delete($id){
   // return $id;
Address::find($id)->forceDelete();
return back();
}
}
