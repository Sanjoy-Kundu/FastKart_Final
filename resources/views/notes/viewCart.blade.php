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


*/



?>
