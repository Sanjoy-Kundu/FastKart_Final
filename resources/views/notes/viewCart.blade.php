<?php
/*
amra jokhon kono product ke add to cart korbo seita add to cart hobe . but amader aikhna kicu  jamela ace seita holo
1.dhora jak ami fist e 100 mouse er moddey theke fistee 10 ta mouse add to cart korlam and ami abar 10 ta mouse add to cart korte chaiteci tar jonno add to cart e new akta row toyri hobe same jinish upore dekhabe and qunatity alada kore dekhabe.
2. aita solve korar jonno
	a. amra cai same product er same size and same color er jonno fist 10 ta porduct nile akta new row hobe and seikhane dekhabe
	b. ami abar oi same product er same size and same color abr 5 ta product nei tahole amy dekte hobe je new akta row toyri hoyece. but new kono row dewa jabe na. same product same color and same size hole akei row hobe just quantity barbe. tar jonno
	::::::::c.
		amader chole jete hobe product_details.blade.php te
        database e find korar age amder chek korte hobe je color_id and size_id jodi exists hoy kina jodi existes hoy tahole quantity baraw r  na hole jevabe ase seivabe cholbe
        amra chole jabo FrontendController er add_to_cart ee
        seikhane giye chek korbo je  same user + same product product_id + porudct er color_id, size_id exists kina jodi exists hoy tahole quantity barow.
aita check korbo database data inset howar age.

1. Cart::where()->exists() kina aita chek korbo
2. jodi nicher gula exists hoy tahole increment koro and aita ke akta if er moddey rakte hobe.
3.          Cart::where([
                    "user_id" => auth()->id(),
                    'product_id' => $request->d_product_id,
                    "color_id" => $request->d_color_id,
                    'size_id' => $request->d_size_id,
                ])->exists();

4. akhon aitake akta if er moddey likbo
  if(Cart::where([
                    "user_id" => auth()->id(),
                    'product_id' => $request->d_product_id,
                    "color_id" => $request->d_color_id,
                    'size_id' => $request->d_size_id,
                ])->exists()){
                    quantity increment koro  increment koro
                    Cart::where([
                    "user_id" => auth()->id(),
                    'product_id' => $request->d_product_id,
                    "color_id" => $request->d_color_id,
                    'size_id' => $request->d_size_id,
                ])->increment('database_quantity', quantity_input_field)

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


:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        FrontendController
        //Add to cart
    public function add_to_cart(Request $request){
        $user_quantity = $request->quantityNumber;
        $real_stock_products =  Inventory::where([
            "product_id" => $request->d_product_id,
            'product_size_id' => $request->d_size_id,
            'product_color_id' => $request->d_color_id,
        ])->first()->product_quantity; //database quantity er nam

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












New Steps :
1.
akhon view cart e ase amr stock er quantity and user quantity milaite hobe jodi user quantity stock er quantiry er thke beshi hoy tahoy oi product er background e akta red color anbo and proceddd to chekout button gayeb kore dibo
Stock anar jonno amder helpers function er help  nite hobe
helper function toyri kore aita ke call kore deklma je output ase ki na
function stocks(){
    return "xxxx";
}

2.
stock/ product_quantity ke pete hole amay jete hobe inventory table eee
prouduct quantity ke pawar jonno amy product_id + color_id + size_id lagbe ai  3 ta ke pele amra product_quanttiy jante parbo
::::::::::helpers.php ::::::::::::::::::::
function stocks($product_id, $color_id, $size_id){
    return "xxx";
}

3.
product_id + color_id + size_id aigula pabo amra view Cart theke
Cart model e porduct + color + size thke relatoinship banailam
product_id , color_id, size_id aigula helpers fucntion stock() er moddey pass kore dilam


4. prdouct_id + color_id + size_id + product_quantity / stock ace kon table e Inventory table e amra sei table hit korbo

5. helpers function e giye stock ke anlam
function stocks($product_id, $color_id, $size_id){
    //return "xxxx";
    return Inventory::where([
        'product_id' => $product_id,
        'product_color_id' => $color_id,
        'product_size_id' => $size_id,
    ])->first()->product_quantity;

}


view cart e user quantity jodi stock thke beshi hoy tahole akta lal error dekhabo






















=====================Sub totla e total amount dekhanor jonno amay je steps nite hobe seita holo ===========
view_cart.blade.php
amy foreach er age
STEPS = 1
@php
 $cart_total = 0;
 @endphp

 amra bolbo jotobar ghurba totalbar aigula gun kore kore agaba
             <td class="subtotal">
                        <h4 class="table-title text-content">Total</h4>
                              <h5> {{$cart->quantity * $cart->relationToProduct->discounted_price}}
                                            @php
                                                    $cart_total += ($cart->quantity * $cart->relationToProduct->discounted_price)
                                            @endphp
                                </h5>
                        </td>

Last sub total er moddey aita call korlei sob gula jog hoye jabe.
*/



/*
=============Update cart button niye kaj korbo =================
1. amader kaj ki amader kaj hoitece amra jokhon updateCart button e click korbo tokhoni sob change krito jinish update hobe jabe  seitar jonno amder akta form dorkar
2. amra akta form nibo and ai form er moddey amra mader sob gulio jinish rakbo orthat foreach er sokol jinish rakbo
3. web.php te route banailam  Route::post('update/cart', [FrontendController::class, 'update_cart'])->name('update.cart');
4. form er method = "POST" dibo and action ta set korbo action = {{route(update.cart)}}

5. FrontendController er moddey update_cart(Request $request){return  $request; } dile amder akta data asbe but amder to 3 ta produdct er quantity asar kotha kinto ta na ase lart er quantity asbe
6. loop  chalanor por amra jdoi akadik datake niye aste chai tahole input field er namer por akta [] faka empty diye dibo

7. input field er moddey name = "quantity[]" array dewar karon hoitece je jotobar aita ghurbe totobarei new field toyri korebe .
8. new field tokhoni korbe jokhonei amra array er moody cart er id diye dhorte parbo je oi prouduct

9. akhon amra foreach chaliye jabo cart database seikhan theke cart id diye find kore quantity barabo


10.akhon query chalabo foreach ($request->quantity as $cart_id => $cart_quantity)  and cart_id diye find kore quantity update korbo .
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


11. process to chekout button guyeb korar jonno amder je jinish lokkho rakte hobe je....
    foreach er purbe akta php blog nibo and seikhane bole je $error = false;
    @php
        $error = false;
    @endphp

    12. foreach er moddey  amder aibar kaj koraite hobe je : jokhonei forech cholbe tokhei error check korbe je jodi user_quantity jodi stock thke beshi hoy tahole error ta true kore dibe

    @php
        $error = false;
    @endphp

      13.               if (stocks($cart->product_id, $cart->color_id, $cart->size_id) < $cart->quantity) {
                                            $error = true;
                                        }
                                    @endphp

14. erpor ai $error ke niye chole jabo button er kace jeikhane seikahne jabo je process to checkout button e $error ke print korle 1 dekhabe jodi error thake r na thakle kicuei dekhabe na .

15. jodi error thake tahole tahole button gayeb hoye jabe. ar error solve korle button asbe .

error print           {{$error}}
                                @if ($error)
                                <li> error thakle aita dekhabo
                                    <button class="btn btn-animation proceed-btn fw-bold">Please solve your error</button>
                                </li>
                                @else error na thakle button dekhabo
                                <li>
                                    <button onclick="location.href = 'checkout.html';"
                                        class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                                </li>
                                @endif


*/


?>
