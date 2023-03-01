<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!--
        Ai khane amra  product niye kaj korbo
        :::::::::::::ADD TO CART :::::::::::::::::::::::::::::
        amra add to cart button niye kaj korbo orthart kono user jodi login thake tahole take add to cart korte dibo r jodi login na thake tahole take amra login kore tarpor add to cart korte bolbo

        steps:1
        First e check korbo je user jodi login thake tahole take add to cart button show koro r jodi login na thake ahole take login button show koro .
                                    auth
                                        <a href="#" class="btn btn-md bg-dark cart-button text-white w-100">Add To
                                            Cart</a>
                                    else
                                        <a href="#" class="btn btn-md bg-dark cart-button text-white w-100">Please
                                            login</a>
                                    endauth
jodi login na thake tahole plase login dekhabe r login thkae add to cart dekhabe


steps:2
        login koranor process
        amra model er maddhome login korabo boostrap theke model nibo (trigger model)
        akhon amra model er moddey form nibo


steps:3
        login korar jonno amder akta form lagbe sei form nilam and  action dilam custom login, jekhetu aita FrontendController er maddhome dekhabo tai FrontendController e giye request diye data dekbo .

                //custom login start
                function custom_login(Request $request){
                // return $request;

                    if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])) {
                        echo "login password milse";
                    }else{
                        echo "login passsworde mile nai";
                    }
                }
                //custom login end

Steps:4
                akhon laravel er akta custom fuction ace jeita diye amra chekc korte parbo je input field er je value diye sei value and database e login kora vlaue ak kina jodi ak hoy tahole loigin e dhubke and na hole error dekhabe

                         //custom login start
                function custom_login(Request $request){
                    if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])) {
                        //echo "login password milse";
                        return back();
                    }else{
                        //echo "login passsworde mile nai";
                        return back()->with('login_error', "Your password and confrim password does't match");
                    }
                }
                //custom login end






















    -->
</body>

</html>
