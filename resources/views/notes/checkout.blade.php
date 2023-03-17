<?php
/*
1.checkout page asar jonno amy product kine proced to checkout page e aste hobe .aita k amder atkaite hobe. karon
    akjon user jokhonei procedd to chekout button e click korbe tokhonei se checkout page e aste parbe na hole parbe na . aita jonno amder se steps nite hobe seita holo

    amra chole jabo FrontendController er checkout method ee
steps:one
chekout page e aste hobe amy previous page hoyei aste hobe. previous page mane view page jeitar moddey Proceed to Checkout Button ace.
previous page janar jonno laravel ei akta builtin function ace seita hoitece  return url()->previous(); aita bolle ai output asbe  http://127.0.0.1:8000/view/cart orthat previous page dekhabe

amra je link paici sei link er moddey  (http://127.0.0.1:8000/view/cart) view/cart name page ace kina jodi thake tahole chekout page e jete dibo r na hole error page e niye jabo


steps:two
purber page ace kina seitar jonno amder

strpos('hello', 'e'); ai link user korte hobe . amader bole hole jodi strpos er moddey view/cart page thake tahole good r na thakle bad return koro.
codition return strpos(url()->previous(), 'view/cart'); now amra if likbo
Follow:
function checkout(){
    return url()->previous();
    return strpos('hello', 'e');
    return strpos(url()->previous(), 'view/cart');
    if(strpos(url()->previous(), 'view/cart')){
        return "wellcome";
    }else{
        return "back";
    }
}

product_details page thekeo chekcout page e aste parbo aitar code hoitece
function checkout(){
    /*return url()->previous();
    return strpos('hello', 'e');
    return strpos(url()->previous(), 'view/cart');
    if(strpos(url()->previous(), 'view/cart') || strpos(url()->previous(), 'product/details')){
        //return "wellcome";
        return view('frontend.checkout.checkout');
    }else{
        return view('frontend.errorPage.error');
    }
}


*/





?>
