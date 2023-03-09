@php
    /*
    Add to Cart button niye kaj kobo orthat jokhan keu product + button e click korle 1 kore barbe and - button e click korle 1 kore kombe  aita niye kaj korbo
    amra quantity2 je javascipt code like kaj korabo .

    1. akhon amder kaj hoitece  dhora jak amar stoke e product e 20 ta akhon ami jodi 30ta product select kore add to cart kori tahole amy bolte hobe je product quantity not available.

2.    jodi stock er je value ace tar thke jodi beshi value diye add to cart korte cay tahole se add to cart korte parbe na. aikhne atkaiya dite hobe.

3. Jokhon keu add to cart button e click korbe tokhon ghotona ta ki ghotbe amra setp by step dekbo
add to cart button er upor jokhon keu click kore tokhon setp by step amder je bishoygulo lagbe seita holo

    a. kon color ke choose kortece tar id lagbe
    b. kon size ke choose kortece tar id lagbe
    c. koto pice choose kortece seitao lagbe
    d. and last one stock e koto pice ace seitao amr lagbe.

## sobr age amra ja ja labe tar akta list korbo :
    <p>Size id : <sapn id="d_size_id"></sapn></p>
    <p>Color id <span id = "d_color_id"></p>
    <p>Quantitiy jeita se input dicche </p> quantity lagbe na
  <p>Prodict Id: <span id="d_product_id">{{ $product_details->id }}</p>


  akhon ami jokhon dropdown thkek size + color + quantity + stock choose korbo tokhon  p tag er moddey amy bole dibe size_id =4, color_id = 1, quantity = 10, sock: 8
  ghotona hoitece stock er theke jodi quantity beshi hoye jay tahole amy bolbe product not available in the stock

  akhon
  size dropdown e click korle html er moddy bole dibe size id = 10
  amra chole jabo size dropdown er moddey
           $('#size_dropdown').change(function() {
                $('#add_to_cart_btn').addClass('d-none'); //add_to_cart button hide(2 no steps)
                var size_id = $(this).val();
                var product_id = {{ $product_details->id }};
p tar er moddey  akta id nilam d_size_id name d means dropdown aita ke dhorlma and aitar html size_id set kore dilam
                 $("#d_size_id").html(size_id);
           }


color id dhorar jonno amra color_dropdown e jabo and id ke dhore html er value bosiye dibo
    $("#color_dropdown").change(function() {
                // alert("dropdown alert");
                var color_dropdown_value = $(this).val();
                $("#d_color_id").html(color_dropdown_value);







4.  akhon amr kaj hoitece je ami size choose korbo + color choose korbo quentity choose kore jokhon add to cart e click korbo tokhn ai sobgulo dhorte hobe and database e niye jabo
        amra quntity input er value nibo

      //add to cart niye kaj korbo
            $("#add_to_cart_btn").click(function() {
                alert("hello");
                var quantityNumber = $(".qty-input").val(); //quantity er input ke nilam
                alert(quantityNumber); deklam thik ace ki na
            });
bakigulore dhorlam
         //add to cart niye kaj korbo
            $("#add_to_cart_btn").click(function() {
                // alert("hello");
                var quantityNumber = $(".qty-input").val();
                var d_color_id = $("#d_color_id").html(); html dekhe sathe .html()dilam
                var d_size_id = $("#d_size_id").html();
                var d_product_id = $("#d_product_id").html();
                alert(d_product_id);
            });




5. ajax er maddhome pathabo database pathabo
jokhon kono user add to cart button e click korbe tahole seikhae best kicu bishoy store thabe
        1. uesr kono proudct click kortece tar id thakbe
        2. user kono poruduct er size_choose kotece tar size_id koto thakbe
        3. user kon product er color choose kortece tar color_id koto seita thakbe
ai bishoy gulo niye ajax er maddhome chole jabe database and seikahe giye dekbe je dhora jay amra 3no proudct ke choose koreci sei 3 no product er size_id, color_id ke niye amra ajax er maddhome database jabo

          //add to cart niye kaj korbo
            $("#add_to_cart_btn").click(function() {
                // alert("hello");
                var quantityNumber = $(".qty-input").val();
                var d_color_id = $("#d_color_id").html();
                var d_size_id = $("#d_size_id").html();
                var d_product_id = $("#d_product_id").html();
                // alert(d_product_id);
                ajax setup kore ajax er maddhom data ami database ee nibo


                ajax setup korbo
            //add to cart niye kaj korbo
            $("#add_to_cart_btn").click(function() {
                // alert("hello");
                var quantityNumber = $(".qty-input").val();
                var d_color_id = $("#d_color_id").html();
                var d_size_id = $("#d_size_id").html();
                var d_product_id = $("#d_product_id").html();
                // alert(d_product_id);
                //ajax setup start
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/add/to/cart",
                    data: {
                        d_color_id: d_color_id,
                        d_size_id: d_size_id,
                        d_product_id: d_product_id,
                        quantityNumber: quantityNumber,
                    },
                    success: function(data) {

                        //   alert(data);
                        //  alert(data);
                    }
                });
                //ajax setup end
            });
            });





            ajax setup korar por akta error khabe karon amra url e je link dici seita kintu web.php te create kora nai tai first  e web.php te orthat FrontendController e akta route banabo tarpor sei function niye FrontendControlle eee jabo and method create korbo

            akhon 500 error khabo karon amra frontendController ee mathod banainai.
            web.php
            Route::post('add/to/cart', [FrontendController::class, 'add_to_cart'])->name("add.to.cart");

            FrontendController ee amra add_to_cart name methaod bananbo and dekbo je ajax er maddhome alert ante pari kina

            PRODUCT DETAILS.BLADE.PHP
             $.ajax({
                    type: "POST",
                    url: "/add/to/cart",
                    data: {
                        d_color_id: d_color_id,
                        d_size_id: d_size_id,
                        d_product_id: d_product_id,
                        quantityNumber: quantityNumber,
                    },
                    success: function(data) {
                        alert(data);
                    }


            FRONTENDCONTROLLER
                function add_to_cart(){
                    return "Add to cart ajax working"
                }

                opor pash theke pathano data gulo dhorlam
                 public function add_to_cart(Request $request){
                            // echo $request->d_color_id;
                            // echo $request->d_size_id;
                            // echo $request->d_product_id;
                            // echo $request->quantityNumber;
 ################amra  inventory table ee giye milabo#############
                            $user_quantity = $request->quantityNumber;
                            $real_stock_products =  Inventory::where([
                                "product_id" => $request->d_product_id,
                                'product_size_id' => $request->d_size_id,
                                'product_color_id' => $request->d_color_id,
                            ])->first()->product_quantity; //database quantity er nam
                        // echo $real_stock_products;
                        if($real_stock_products> $user_quantity){
                            echo " add to cart kaj korbe";
                        }else{
                            echo "add to cart kaj korbe na";
                        }
                     }



#################New step::::::::::::::::::
jokhon stoke theke quantity kom thakbe tokhon ei to add_to_cart hobe tai amra akhon add to cart niye kaj korbo. add to cart korar jonno amder besh kicu jinish maintain kortehobe
## sony unser er koto no poruduct 2no product er blue color er large size er 4 ta product ke tumi add to cart koro
tar mane amder
                        a. user_id lagbe
                        b. product_id lagbe
                        c. color_id lagbe
                        d. size_id lagbe
                        e. product_quantity lagbe
aigula niye cart er jonno amke akta migration table and model banate hobe

########MIGRATION TABLE ER JONNO #################
1. php artisan make:model Cart -m dilam
Cart er jonno amder database toyri hoye gelo
        public function up()
            {
                Schema::create('carts', function (Blueprint $table) {
                    $table->id();
                    $table->integer("user_id");
                    $table->integer('product_id');
                    $table->integer('color_id');
                    $table->integer('size_id');
                    $table->integer('quantity');
                    $table->timestamps();
                });
            }

akhon amra data insert korbo kothey korbo jodi kono user add to cart korte pare seitkhane

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








                */
@endphp
