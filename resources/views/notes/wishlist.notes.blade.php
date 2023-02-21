<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wishlist</title>
</head>

<body>
    <!-------
        Wishlist jinish ta ki wishlist ta holo je
        amr kicu poruduct pochondo hoyece ami seita wishlist kore rakbo and pore dkbo

        WISHLIT ACE PRODUCT_DETAILS ER MODDHE

        Steps:1 { route('product.wishlist.add', $product_details->id) }}
        jehetu ata frontend er part tai tai Route obbosoi FrontendController ee and kon porudct add hoise sei product er id pass korete hobe
        Route::get('product/wishlist/add/{id}', [FrontendController::class, 'product_wishlist_add'])->name('product.wishlist.add');
        FrontendController e product_wishlist_add name function banabo

        FrontendController
        function product_wishlist_add($id){
            return $id;
        }

        Steps:2
        Akhon ami je product ke wishlist e rakbo tar jonno amr database lagbe seitar moddey amr product er id and user_id pathaite hobe karon product er id diye kono product add hoise seita dekbo and user_id diye dekbo ke product ke add korche.
        akhon amra akta migration table banabo
        and seikhane data insert korbo
    //Product wishlist start
        function product_wishlist_add($id){
        //  return $id;
        // return auth()->user()->name;
            Wishlist::insert([
                'user_id'=>auth()->user()->id,
                'product_id' => $id,
                'created_at' => Carbon::now(),
            ]);
            return back();
        }
    //Product wishlist end

    Steps-03
    ami cai je product akbar wishlist korbo seita ar wishlist e add kora jabe na akbar wishlist utha dekhale ase all ready added to wishlist
    wishlist tokhonei dekhabe jokhon login kora thake tai aita check korbo auth diye
                                    auth
                                        <div class="buy-box">
                                            <a href="{ route('product.wishlist.add', $product_details->id) }}">
                                                <i data-feather="heart"></i>
                                                <span>Add To Wishlist</span>
                                            </a>
                                        </div>
                                    endauth


    Setps-04
    akhon auth er moddey check dibo  jodi ai product ti add to whishlist e korea thake tahole amra dekhba je already added to wishlist

    if er moddey check korte hobe je jodi App\Models\Wishlist::where(['user_id' => auth()->id() and 'product_id' => $product_details->id ]) hoy tahole show koro already added to wishlist or else hoy add koro
                                auth
                                        <div class="buy-box">
                                            if (App\Models\Wishlist::where(['user_id' => auth()->id(), 'product_id' => $product_details->id]))
                                                <a href="#">
                                                    <i data-feather="heart" class="text-danger"></i>
                                                    <span class="text-danger">Already Added to wishlist</span>
                                                </a>
                                            else
                                                <a href="{ route('product.wishlist.add', $product_details->id) }}">
                                                    <i data-feather="heart"></i>
                                                    <span>Add To Wishlist</span>
                                                </a>
                                            endif

                                        </div>
                                endauth


    Stes-05
    Wishlist er kotogulo product add koreci seita dekhnor joono
    web.php te forntendCotnroller er link banabo

        function wishlist(){
        $wishlists = Wishlist::where('user_id', auth()->id())->latest()->get();
        return view('frontend.whishlist.wishlist', compact('wishlists'));
    }


    steps:06
    Akhon wishlist.blade.php te foreach chailei hobe.
    jodi    { $wishlist } print dei tahole amay product er id dekahbe product er name powar joono amy Wishlist Model er sahte Product er model er relation ghotaite hobe

    akhon amay Product Model er sathe  Product er Relation kore data show korte hobe
        function relationshipWithProduct(){
        return $this->hasOne(Product::class, "id", 'product_id');
         }

    steps:07
    product er data show korar jonno
                foreach ($wishlists as $wishlist)
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                                                    <img src="{ asset('uploads/products/mainPhoto') }}/{$wishlist->relationshipWithProduct->product_image }}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <span
                                                    class="span-name">{ $wishlist->relationshipWithProduct->relationshipwithCategory->category_name }}</span>
                                                <a href="product-left-thumbnail.html">
                                                    <h5 class="name">{ $wishlist->relationshipWithProduct->product_name }}</h5>
                                                </a>
                                            </div>

            endforeach



        -------->
</body>

</html>
