<?php
/*
Aikhane address hoitece Checkout page e jei address likhechi sei address ta.
address er monno amder akta database lagbe and migration table table

1. amra liklam php artisan make:model Address

2. FrontendController address name akta mehod banabo. sei address er kaj hoitece se data dhorte partece ki na.

FrontendController
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
        echo "done";
}


and data dekhano jonno amder jete hobe checkout page er controller er modey addresses ke dhorlam
FrontendController
function checkout(){
    $addresses = Address::where('user_id', auth()->id())->latest()->get();
    if(strpos(url()->previous(), 'view/cart') || strpos(url()->previous(), 'product/details')){
        return view('frontend.checkout.checkout', compact('addresses'));
    }else{
        return view('frontend.errorPage.error');
    }
}



:::::::::::::::::::::::XXXXXXXXXXXXXXX::::::::::::::::::::::::::::
jokhon amra address add korbo tokhon amder echo done lekha asbe . but amder je jinish ta mathay rakte hobe seita holo
return back() korle error khabe . aita jonno bachr jonno
:::::::::::checkout method er amader aita add korte hobe ::::::::::::::
    if(strpos(url()->previous(), 'view/cart') || strpos(url()->previous(), 'product/details') || strpos(url()->previous(), 'product/checkout')){
        //return "wellcome";
        return view('frontend.checkout.checkout', compact('addresses'));
    }else{
        return view('frontend.errorPage.error');
    }


*/


?>
