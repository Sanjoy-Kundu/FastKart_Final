<?php
/*
Cash on delivary er age amder besh kicu edit korte hobe seigula amra edit kore nei jemon dahara bahire 60 ta and dhakra moddey 120 tk aigula likhe nei.
amder checkout page e ki ki thakbe
1. customer address  // akadhik thake amder set kore dite hobe
2. dhakar moddey 60 dahkar bahire 120 taka // aita amra hate likhe dibo
3. payment option cash on delivary (COD) or banking system
4. ki ki product niyece seigula thabe
5. sob gulo niye akta invoice genarate korte hobe .


:::::::Customer address set korbo  ::::::::::::::
1. akadhik thakte je kono akta set korbo ki kore
 <input class="form-check-input" type="radio" name="address_id" {{$loop-> index == 0 ? 'checked' : ' '}}> jodi $loop->index == 0 hoy tahole check koro and tar value dila vlalue ={{$address->id }}

 2. Delivery Option jekhetu 2 ta akta dharar moody hole ki hobe r akta dharar bahire hole ki hobe
    name ="delivary_option" value="one" and second tar value value="two"

3. abar invoice powar jonno amra sokol information ke akta form er moddey raklam and tar mehod post kore dilam form hoitece 75 number line e
4. frontendController e akta route banailam Route::post('final/checkout', [FrontendController::class, 'final_checkout'])->name('final.checkout');

5. frontendController e akta mehod bainai final_checkout name;
    function final_checkout(Request $request){
        return $request;
    }

6.final_checkout mehod er moddey je request gula pabo seigulo niye amra invoice banabo . Invoice banano jonno amrder akta invoice table and model lagbe

7. akhon amra invoice er jonno amra model and migration table bananbo . php artisan make:model Invoice -m

8. invoice table amr ja ja lagbe
        a. user name ==> ke poroudct purchere kortece orhta auth()->user()->name
        b. user address
        c. user_coupon_name
        d. user_coupon_discount percent
        e. user_coupon_discount_money
        f.user_Subtotal
        g. user_total_amount
        h. delivery_charge
        i.user_payment_option
        j. user_payment_status

        invoice er jonno ai jinish gula lagbe


9. invoice table er jonno FrontendController thake nicher gula insert korlam
        function final_checkout(Request $request){
                //return session('s_coupon_name');
                //return session('s_discount');
                // return session('s_sub_total');
                //return session('s_checkout_discounted_amount');
                // return session('s_total_amount');
                //return $request;
            Invoice::insert([
                'user_id' => auth()->user()->name,
                'address_id' => $request -> address_id,
                'coupon_name' => session('s_coupon_name'),
                'coupon_discount' => session('s_discount'),
                'coupon_discounted_amount' =>  session('s_checkout_discounted_amount'),
                'delivery_charge' => $request -> delivery_charge,
                'payment_option' => $request -> payment_option,
                //'payment_status' => $request -> name,
                'subtotal' => session('s_sub_total'),
                'total_amount' =>session('s_total_amount'),
                'created_at' =>Carbon::now(),
            ]);

            echo "Done";
    }

    aita dile amder sob kaj korbe and amader kakj hoiteje je jokhonei invoice inset hobe tokhon amder Invoice_id dekhabe.
    tar jonno
    if($request->payment_option == "cod"){
        //echo "cash on delivary";
        $invoice_id = Invoice::insertGetId([
            'user_id' => auth()->id(),
            'invoice_number' => $invoice_number,
            'address_id' => $request -> address_id,
            'coupon_name' => session('s_coupon_name'),
            'coupon_discount' => session('s_coupon_discount'),
            'coupon_discounted_amount' =>  session('s_discounted_amount'),
            'delivery_charge' => $delivery_charge,
            'payment_option' => $request -> payment_option,
            //'payment_status' => $request -> name,
            'subtotal' => session('s_subtotal'),
            'total_amount' =>session('s_total'),
            'created_at' =>Carbon::now(),
        ]);
        //if coupon used then - coupon limit  start
        if(session('s_coupon_name')){
          Coupon::where('coupon_name', session('s_coupon_name'))->decrement('coupon_limit');
        }
        //if coupon used then - coupon limit  end
        echo $invoice_id;
    }else{
        echo "online payment";
    }

    ====================Invoice Number Genarate Kora ===================
invoice hobe and sathe sathe akta numbr genarate hobe  tar jonno amder migration table and frontendController e change korte  hobe .


:::::::::::::::Next Steps ::::::::::::::
Jokhon CASH ON DELIVARY HOBE
orthat cashon delivary hobe age then jodi sei user coupon_use kore tahole 1 remove hobe .
    if(session('s_coupon_name')){
          Coupon::where('coupon_name', session('s_coupon_name'))->decrement('coupon_limit');
        }

Coupon minus howar por amra aigula niye alada akta invoice_details table er moddey rakbo Tarmane amra akhon akta model+migration table banabo invoice_details name
php artisan make:model invoice_details -m
akhon ai invoice_details table er moddey amra ki rakbo amra rakbo hoice view_cart table er je information gulo cilo seigula + product_table theke tar price lable
Cart table theke
            $table->integer("user_id");
            $table->integer(invoice_number");
            $table->integer('product_id');
            $table->integer('color_id');
            $table->integer('size_id');
            $table->integer('quantity');
            $table->integer("product_purches_price);

            ai jinish gula lagbe
 Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->integer("invoice_number");
            $table->integer("user_id");
            $table->integer('product_id');
            $table->integer('color_id');
            $table->integer('size_id');
            $table->integer('quantity');
            $table->integer("product_purches_price");
            $table->timestamps();
        });

Akhon coupon user hole coupon er limit katar por invoice_details e invoice er details information pathaite hobe.






*/


?>
