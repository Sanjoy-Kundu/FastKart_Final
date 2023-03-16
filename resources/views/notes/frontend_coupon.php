<?php
/*
frontend e jei coupon ace amder seita niye kaj korte hobe . orthat amader coupon er khetray besh kicu bishoy mathay rakte hobe .
    1. user jodi vul coupon dey tahole bole dite hobe coupon number vul.
            ar valo coupon dile amder main jaygay dhukte dite hobe.
    2. coupon number jodi valo hoy tahole amy coupon er validity chekeck korte hobe
    3. validitry check korar por oi coupon er upor koto persent discount ace seita bolte hobe
    4. coupon er limit jodi 0 hoy taohe ar aita user korea jabe na .


step -01:
    coupon er khete amy age viewCart ee khuje ber korte hobe coupon er bishoy gulo kothey ace seikhane giye ami form er moddey dhukiye dibo and bole dibo je aita GET mehod e jabe orthat link er maddhome amra data dhorbo
    web.php te route banabo Route::get('apply/coupon', [FrontendController::class, 'coupon'])->name('apply.coupon');
    Frontend controller e giye method banabo


a. jehetu link er maddhome pathiye tai data dhorte hole amy get user korte hobe tai $_GET['coupon_name']; liklam
b. akhon ami isset likhe chek korbo je jodi coupon diye submit kore tahole bolo je coupon ace r na diye submit korle bolo je coupon nai.
c. coupon name dile amra chole jabo database er kace seikhane giye user_coupon nama and database e cupon name milabo jodi mile orthat exits kore tahole bolbo exist kore and na mile bolbo exists kore nai.


    ::::::::::::: FrontendController ::::::::::::::::
jeikhan theke cart pate ta load hoitece tar controller ee jete hobe seikhabei coupon niye kaj korbo .
1. function view_cart(){
    return view('frontend.shop.viewCart');
}

ai view cart er moddey amder coupon niye kaj korte hobe
        function view_cart(){
              // return $_GET['coupon_name'];
              if(isset($_GET['coupon_name'])){
                    return "coupon name dice";
                    //exists check
                    if(Coupon::where('coupon_name', $coupon_name)->exists()){
                        $discount = 90; //coupon dile tar discount dhore nilam 90%
                        return redirect('view/cart')->with('error', 'Coupon name does not exists');
                    }else{
                        return "Couon name databse er sathe mile nai";
                    }

              }else{
                $discount = 0; // coupon na dile tar discount dhore nilam 0
                echo "coupon nai";
              }
        return view('frontend.shop.viewCart', compact('discount'));
    }

user jei coupon dibe seita ke dhorte hobe je coupon dice naki deinai.

========================FINAL =============
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
                echo "coupon nai";
              }
        return view('frontend.shop.viewCart', compact('discount'));
    }
========================FINAL =============



*/


?>
