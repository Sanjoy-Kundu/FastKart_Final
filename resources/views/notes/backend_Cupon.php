<?php
/*
1. Coupon muloto ke upload korbe  obbosoi vendor or admin upload korbe.
2.abar airokom to hote pare je fastkart website er je ownar se chaile eid uplokkhe total kenakatar upor 10% coupon discount dite pare.

:::::::COUPON ADDING SYSTEM::::::::
1. coupon add korbo mara backend theke
2. Coupon er jonno amder jonno akta database + model controller lagbe php artisan make:model Coupon -mcr
3. jehetu coupon add korbo backend theke tai web.php ==> Route::get('/coupon', [CouponController::class, 'coupon'])->name('coupon');
4. BackendController eee coupon name ata method create korbo
5. return korbe akta view coupon view backend => coupon folder ==> create_coupon.blade.php
6. coupon add korar somoy amder besh kicu bishoy mathay rakte hobe
        i. coupon er akta nam thakbe
        ii. coupon er akta validity date thakbe
        iii. coupon er upor koto percent discount thakbe seita bole dite hobe
        iv. coupon koto jon use korte parbe tar limit bolte dile hobe

7. backend ee form add kore tar data databse nilam.

8.coupon er infromation gula database pathailam CouponController theke
    public function store(Request $request)
    {
        $request->validate([
            'coupon_name' => "required ||unique:coupons,coupon_name",
            'coupon_expried_date' => "required",
            'coupon_discount' => 'required',
            'coupon_limit' => 'required',
        ],[
            'coupon_name.required' => "Coupon Name is required",
            'coupon_name.unique' => "Coupon Name already taken",
            'coupon_expried_date.required' => "Coupon Expired date is required",
            'coupon_discount.required' => "Coupon discount is required",
            'coupon_limit.required' => "Coupon limit is required",
        ]);
       Coupon::insert($request->except('_token') + [
        'user_id' => auth()->id(),
        'created_at' => Carbon::now()
       ]);
       return back()->with('success', "Coupon added Successfully");
    }


Backend coupon niye kaj korlamcoupon niye kaj korlam.


*/

?>
