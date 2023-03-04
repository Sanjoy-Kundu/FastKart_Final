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
            });

                */
@endphp
