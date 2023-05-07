<?php
/*
1.
akjon customer hokhon login korbe tokhon take amra customer dashboard e niye jabo
tar jonno amra  chole jabo Fastkart er frontend er moddey  seller_dashboard.php aitai hoitece customer dashboard aita ke amra intrigrate korbo

2.
ami kinto login na korei jodi category/list e hit kori tahole amy sei category list e niye jabe akhon amay aita atkaite hobe . user jodi login kora na thake tahole take amra kono link e hit korte dibo na jodi se kono link e hit korte tahole take login page e niye asbo

3. aita korbo amra middelware er maddhome
akhon amra jodi login na kore category link e hit kori tahole amder category link e dhukte dibe but aitake atkanor jonno amder


dashboard link er thke \\middleware(['auth', 'verified'])->\\ aita copy kore  category name er age diye dibo
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category', [CategoryController::class, 'index'])->middleware(['auth', 'verified'])->name('category.index');

but aivabe hoilo to akta amder maximum gulote airokom kora lagbe tai amra akta group korbo and group er moddey tader ke rekhe dibo


4. aita amra group  middlewere grouping er maddhome
middel were er maddhome amra control korbo jodi customer hoy tahole customer  er dashboard  jaba ar jodi vendor or admin hoy tahole tader dashboard e jabe .

5. akhon amra middelwere group korbo ai jonno amra google e jabo  google theke jabo hoitece larvel er documentation ee
google ==> laravel ==> middleare groups

use App\Http\Middleware\EnsureTokenIsValid;

Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/', function () {
        //
    });

    Route::get('/profile', function () {
        //
    })->withoutMiddleware([EnsureTokenIsValid::class]);
});


6. aita ke custom korte hobe
Route::middleware(["auth"])->group(function () {

});



7.
middelwere group start
//without login cant access using middelwere category start
Route::middleware(['auth'])->group(function () {
//::::::::::::::::::::::::::::::::::::Category part start ::::::::::::::::::::::::::::::::::::::::
Route::get('category', [CategoryController::class, 'index'])->middleware(['auth', 'verified'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name("category.create");
Route::post('category/insert', [CategoryController::class, 'insert'])->name("category.insert");
Route::get('category/edit/{category_id}', [CategoryController::class, 'edit'])->name("category.edit");
Route::post('category/update/{category_id}', [CategoryController::class, 'update'])->name("category.update");
Route::get('category/delete/{category_id}', [CategoryController::class, 'delete'])->name("category.delete");
Route::get('category/restore/{category_id}', [CategoryController::class, 'restore'])->name("category.restore");
Route::get('category/permanent/delete/{category_id}', [CategoryController::class, 'permanent_delete'])->name("category.permanent.delete");
//:::::::::::::::::::::::::::::::::::Category part end :::::::::::::::::::::::::::::::::::::::::::::::::::::::
});
//without login cant access category start
middelwere group end


8. amra middelwere er moddey maximum gulokre dhukailam


9. akhon amder middelwere banante hobe jetar madhhome amra dhorte parbo user  ki customer naki admin customer hole akta dashboard and admin hole admin dashbord e niye jabo

10. MIDDELERE
middelwer kothey tahke
app==> http==> middelwere
aikhane onekgulo middelwere ace amder middelwere banate hobe middelware bananor comment ta holo
php artisan likbo and dekbo make:middleware
amra bolbo php artisan make:middleware CheckCustomer
ailkhane check cutomer name akta middleware toyri holo


11. amra je ChekcCustomer middlewere toyri korechi seita ke amder registration korte hobe registration na korte aita amder kaje dibe na . middlewre registration korbo
 kernel.php te
 kernel.php ace kothey  ==> app==> http==> Kernel.php

 registration korar jonno
 first e Kernel.php te aslam registraion korte them jabo CheckCustomer middelwer ee
     protected $routeMiddleware = [
        'check.customer' => \App\Http\Middleware\CheckCustomer::class,
    ];

12. CheckCustomer middlwere
akhon ami kinto checkCustomer middlewere er moddey kono code likhi nai ami ki krobo kernel.php thke chekc.cutomer ke copy kore web.php ee jekhante grouping korcilam sei auth er pase "check.customer"  and backend auth er pase check customer deiye dibo ke bosiye dibo

akhon ami jodi customer hishebe registrion korbi tahole kono change hoi nai karon ami to CheckCustomer er kace kono code likhi nai


13.
just ChekCustomer eer amy
    public function handle(Request $request, Closure $next)
    {
       // echo "hello";
       if(auth()->user()->role == 'customer'){
        return redirect("customer/dashboard");
       }
        return $next($request);
    }

    and checkCustomer e jege custoemer er dashbord design korte hobe



14. Customer er  dashboard design korar jonno amr akte Controller lagbe
php artisan make:controller CustomerDashboardController

middlewere er bahire amra Route toyri korlam
//Customer Dashboard making start
Route::get('customer/dashboard', [CustomerDashboardController::class, "customer_dashboard"])->name("customer.dashboard");
//Customer Dashboard making end









*/


?>
