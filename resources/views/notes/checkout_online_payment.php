<?php
/*
Online payment
Payment Getway
Bangladesh theke kivabe payment getway kora jay seita holo google == > payment getway in bd https://inai.io/blog/top-10-payment-gateways-in-bangladesh

amra shikbo payment getway in SSL COMMERZ use korbo

steps:01 ssl commerz er jonno google ==> ssl commerz https://sslcommerz.com/
steps:02: https://sslcommerz.com/  ==> developers ==> try the sandbox ==> create your account

account create korar jonno
    i. domain name ==> https://www.creativeitinstitute.com/ dibo
    ii. company name  ==> Creative IT
    iii. company address ==> Eiskaton Dhaka Bangladesh
    iv. your name ==> Sanjoy Kundu
    v. your email ==> sanjoykundu187@gmail.com (aita must be real ta dewa lagbe)
    vi. phone number ==> 01873428918
    vii. user name  ==> Joy1
    vii. password ==> sk7904523


steps:3: already account create hoye gece tai amder project e amra ssl commerz add korte chai tai amra google e chole jabo and likbo ssl commerz laravel

steps:4 amra aitar github link e jabo https://github.com/sslcommerz/SSLCommerz-Laravel

steps:5 github steps follow korbo ki ki korte hobe
    Introdruction:
        a. first aita ke dowanload dite hobe
        b. library folder ke copy kore amr project e app direcoty folder er moddey rakte
        c. ai commad chalaw composer dump -o
        d. config er moddey theke   aita sslcommerz.php copy kore amr config folder er moddey paste korbo
        e. amra folder er config er vitor er session.php te jabe seikhane giye  'same_site' => 'none' likhe dibo
        f. env_example theke 3 ta name copy kore amr .env file er moddey bosabo
                                SSLCZ_STORE_ID=creat641c8f5fcdaca
                                SSLCZ_STORE_PASSWORD=creat641c8f5fcdaca@ssl
                                SSLCZ_TESTMODE=true
        ai 3ta bosiye dibo
        g. amr coder middlewere er moddey
                    '/success',
                        '/cancel',
                        '/fail',
                        '/ipn',
                        '/pay-via-ajax',
    copy kore bosiye dibo

    h. SslCommerzPaymentController.php copy kore amr code er controller er moddey rakbo .
    i. web. php te aigula bosabo
                // SSLCOMMERZ Start
            Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
            Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

            Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
            Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

            Route::post('/success', [SslCommerzPaymentController::class, 'success']);
            Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
            Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

            Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
            //SSLCOMMERZ END


    j. ssl file ke kaj korno jonno amder akta table banaite hobe seita hoitece Order
    sql copy korbo my sql e jabo sikhan theke SQL e jabo and jeita compy korcilam seita paste korbo

    k. login er jonno https://sandbox.sslcommerz.com/manage/?request=c2VjdXJpdHllbmNyaXB0ZGFzaGJvYXJkOnZpZXdzZWN1cml0eWVuY3JpcHQ%3D&id=c2VjdXJpdHllbmNyaXB0MXNlY3VyaXR5ZW5jcmlwdA%3D%3D

*/























?>
