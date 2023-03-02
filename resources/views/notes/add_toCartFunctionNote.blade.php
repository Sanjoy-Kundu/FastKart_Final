<?php
/*
::::::::::::::::Notes::::::::::::::::::
Steps:1
1. Akjon user se jodi produc kinte ase se je agei product er  size and color choose na korei add to cart button e click korte partece.
2. but ami cai kono user jodi  product er color and size choose na kore tahole se add to cart button e click korte parbe na. or
3. ami cai je jodi kon user tokhoei add to cart korte parbe jokhon se proudct er color and size choose korbe. fist e add to cart thakbe na tobe user jokhon product er color and size choose korbe tokhonei add to cart button chole asbe.

4. amra chaile add to cart er class disabled dite pari or chaile amra d-none kore dite pari .
5. amra d-none korei agabo .
6. amra add to cart button d-none kore dilam

Steps:2
1.  akhon amader kaj holo amra at fist jokhon size choose korbo size choose korle tar upor base kore color asbe amra color choose korlei add to cart button show hobe .
2. akhon amader jquery te size_dropdown niye kaj  kora ace. amra color dropdown e akta id diye sei id niye kaj korbo .


3. Color dropdown niye kaj kora jonno :
    a. At first <select id="color_dropdown"> </select> select e akta id dilam color_dropdown name.
    b. Then jquery te giye dhorlam aje
        $("#id_name liklam").change(function(){
            alert("dropdown alrert");
        })
        jokhon amra color name change korbo tokhn akta alert dibe .

    c. akhon amra kaj ki jokhon color dropdown keu choose korbe tokhon add to cart button show korbe. aita show korar jonno amra add to cart button ee akta id dilam <button class="d-none"" id="add_to_cart_btn">Add to cart</button>

    d. akhon ai add_to_cart_btn id niye amra arma jquery er jekhane color_dropdown likheci seikhane giye ai id dhore tar je class ace d-none. sei class ke remove kore dibo .

       $("#color_dropdown").change(function() {
                        // alert("dropdown alert");
                        $("#add_to_cart_btn").removeClass('d-none');
                    });
akhon jodi ami size chooose kore color choose kori tahole add to cart button show hobe .

e. dhoro ami fist e jei size choose korlam tar upor base kore color asbe . dhora jak ami first e small color choose korci and color choose koci red. but ami akhn jodi large size choose kori tahole amr add to cart button ke hide korte hobe karon aita tokhoei asbe jokhon ami size er upor base kore color choose korbo . so amr kaj hoitece
jokhon ami size choose korbo tokhon size er vitor add_to_ cart_btn id ke kore tar class ke add kore dibo orthat addClass("d-none");

$("#size_dropdown").change(function(){
    $("#add_to_cart_btn").addClass("d-none");
})

f. akhon amader akta problem ace seita holo amra jodi color select kori tahole amrader add to cart button asbe. otherwise amder kinto add to cart button asar kotha na.

g. dhurun ami size choose korlam and color choose korlam. but ami jodi color choose na kore select one color choose kore tahole kinto add to cart button thakbe na . othart add to cart button tokhonei asbe jkhon ami color choose korbo.

h.amra frontendController eee chole  jabo seikhne giye dekbo je $generated_options = <select  vlaue=" ">--slect one color --</select> select one color er value nei akhon ami ai vlue ke dhorbo.

ajax er moodey giye dhoelam and alert kore deklam value ki ase
   $("#color_dropdown").change(function() {
                // alert("dropdown alert");
                var color_dropdown_value = $(this).val();
                alert(color_dropdown_value);
   }



   i. akhon akta if likbo je jodi value thake tahole add to cart button asbe r jodi vlaue na thake tahole add to cart button asbe na.
   amra akhon  color_dropdown er vlaue dhorbo

   Code :::::
         $("#color_dropdown").change(function() {
                // alert("dropdown alert");
                var color_dropdown_value = $(this).val();
                //alert(color_dropdown_value);
                // $("#add_to_cart_btn").removeClass('d-none'); //add_to_cart button show(setps-1)
                if (color_dropdown_value) {
                    $("#add_to_cart_btn").removeClass('d-none');
                } else {
                    $("#add_to_cart_btn").addClass('d-none');
                }
            });
   Code end ::::


:::::::::::::::::::Example:::::::::::
                $(document).ready(function() {
            $('#size_dropdown').change(function() {
                    $("#add_to_cart_btn").addClass("d-none"); //add to cart button hide (2) no steps
                //alert('dropdown change');
                //ajax setup
                var size_id = $(this).val();
                var product_id = {{ $product_details->id }};
                //  alert(product_id);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/get/color/list",
                    data: {
                        size_id: size_id,
                        product_id: product_id,
                    },
                    success: function(data) {

                        $('#color_dropdown').html(data);
                        //  alert(data);
                    }
                });
            });

            //aikhane color dropdown niye kaj korbo
            //working with color dropdown
                    $("#color_dropdown").change(function() {
                        // alert("dropdown alert");
                        $("#add_to_cart_btn").removeClass('d-none'); //add to cart button show(1) setps
                    });
        });
















*/
?>
