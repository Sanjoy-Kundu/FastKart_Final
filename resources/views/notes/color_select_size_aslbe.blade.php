<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select color up coming size</title>
</head>

<body>

    <!--
    Steps:01
        amder kaj ki amra color chose korbo and  sei color er koyti size ace ta chole asbe . tar jonno mara javaScript or jequry er help nibo .
        amder every webpage e javascript lekha dorkar porte pare tai ami frontendmaster e akta footer_script name akta content nibo and tar moddey javascript or jquery likbo .


Steps:02
        amra query leklhar somoy frontendmaster e footer_query name akta yield nobo and next amr je pagee dorkar porbe sei page e section diye deke kaj korbo

Steps:03
Frontend master ee
 <!-Custom js made by Sanjoy
 yield(footer_script) nilam and amr jehetu product_details e js lekha lagbe tai product_details page e ami section diye deke  nibo


 Steps:04
 custom javascript kaj kore kina seita dekhar jonno amr amra product_details e giye dekbo je hello world alert hishe ase ki na
 product_details.blade.php aikhane page reload dile hello world asbe
 section('footer_script')
    <script>
        alert('Hello Sanjoy');
    </script>
endsection

Steps:05
akhon amra aitar moddey jquery likbo
jquery likhar style
<button id="hello">Hello</button>
section('footer_script')
    <script>
        $(document).ready(function() {
            $('#hello_btn').click(function() {
                alert('Hello world');
            });
        });
    </script>
endsection

Steps:06
aikhne hello button e click korlei hello world alert dibe
but amra to aita chai na
amra cahi dropdowon size e select kolre hello lekhar alert dekhabe

amra ki korbo amra
            <select id="size_dropdown">
                            <option>hello</sption>
                </select>
        <script>
            $(document).ready(function() {
                $('#size_dropdown').change(function() {
                    alert('dropdown change');
                });
            });
        </script>



Steps:07
amra chai je page reload na niye jokhon size select korbo tokhon oi size er ja color ace seita chole asbe . Page reload na diye database theke amader database theke data niye aste hobe amder ajax er help nite hobe and aita lavel er documentation ei bola ace .
armra chole jabo larvel.com ===>xcrf
            X-CSRF-TOKEN ai toen er use korte hobe
                <meta name="csrf-token" content="{{ csrf_token() }}"> aita use krobo meta tag er moddey
    ajax setup ta likbo scripti code er moody
                $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });


Steps:8
    amra ajax use korbo kothey product_details.blade.php te
    section('footer_script')
        <script>
            $(document).ready(function() {
                    $('#size_dropdown').change(function() {
                            size_dropdown er moddey joto rokom karisma ace aitar moodey dekhabo
                            //alert('dropdown change');
                            //ajax setup start
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            //ajax setup end

                            Ajax er moody kono request send korte hole ander likte hobe $.ajax(), akta

                            function
                            next ai $.ajax() er

                            function er moddey {}
                            cury braches dibo.
                            for example:::
                                $.ajax({
                                    aikhne je code dorkar seita likbo
                                })

                            step: 1
                            akhon ami ajax ke bolbo je ajax bondhu tumi server er kace request pthao
                                .Tokhon ajax amy bolbe je bondu ami kon dhoroner request pathbo GET OR POST request konta pathabo
                                .

                            step: 2
                            ajax ke bole dite hobe je ajax tmi kon url er kace jabe seita bolte hobe orhat url bole dite hobe
                                .ami bollam je ajax tumi(
                                    url name) ai url er kace jao and tumi and tmr kono data niye asar dorkar nai
                                .jokhon dorkar hobe tokhon bolbo.

                            step: 3
                            ajax je database er kace gece and se jodi kono data niye ase tahole se to success tai se ki data niye asche seita dekhar jonno amy
                            success: namelessfunction(parameter dibo data name) {
                                alert(data or parameter name)
                            }
                            se jodi kono data niye ase tahole seita dekbo
                            success: function(data) {
                                alert(data)
                            }
                            step: 4
                            ajax er error dekhar jonno amra browser er console a jabo
                                .and dropdown er akta ke select kore debo je 500 error ai akti server error aitar karon se je url er hit korece sei url pai nai
                                .

                            step: 5
                            url toyri korte hobe tai amra chole jabo web.php te seita amra url or route banabo
                                .jehetu aita frontend er part tai amra aita frontend er under e banabo
                            Route::get('get/color/list', [FrontendController::class, 'get_color_list']) - > name(
                                'get.color.list');
                            and frontendConteoller er jabo

                            //working with ajax size to color
                            function get_color_list() {
                                return "good";
                            }

                            good tokhoei kaj korbe jokhon success er moddey functio likhe ta moddey data pass korbo
                                .#ajax({
                                    type: "GET",
                                    url: "get/color/list",
                                    success: function(data) {
                                        alert(data)
                                    }
                                })


                            step: 6
                            but amra to hello pass korte cai na amnra size e jokhon click korbo tokhon oi size er under er oi product er jotogulo color ace sob gulo dekhabe

                            function get_color_list() {
                                return Color::all();
                            }
                            joto color ace sob gulo dekhabe database e total koto gulo color ace sob chole asebe

                            step: 7
                            akhon amr kaj hoise ami je size ke click korci tar id ke dhote parteci ki na orthat jodi small ke click kori tahole small er id te dhorte parteci kina seita dkebo
                                .
                            PRODUCT_DETAILS.blade.php just value set kore dilam
                            tar jonno ami chole jabo size e jekhane foreach chaice tar value diye dibo

                            select name = ""
                            id = "size_dropdown"
                            class = "form-control" >
                                option value = "" > -- --select one size-- - < /option>
                            foreach($inventories - > unique('product_size_id') as $inventory) <
                                option value = "{ $inventory->relationshipWithSize->id }}" > {
                                    $inventory - > relationshipWithSize - > size_name
                                }
                        }
                        /option>
                        endforeach <
                        /select>


                        step8 akhon mader size er id dhorte hobe
                        .size er id amader akta variable er mnoddry rakte hobe $(document).ready(function() {
                            $('#size_dropdown').change(function() {
                                //alert('dropdown change');
                                //ajax setup'
                                ===
                                ===
                                = VARIABLE START === ==
                                    var size_id = $(this).val();
                                alert(size_id); ===
                                ===
                                = VARIABLE END === === alet diye deklam je kono no id
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                $.ajax({
                                    type: "GET",
                                    url: "/get/color/list",
                                    success: function(data) {
                                        alert(data);
                                    }
                                });
                            });

                            step 9:
                                akhon amra ai data ke database e pathiye data niye aste bolbo
                                .tar jonno amy ajax er moddy data: name akta filed nite hobe
                            data: jekono_name size_id:
                                size_id size id ke size id namei pahailam jehetu data pathaichi tait type hobe POST and web
                                .php er type o hobe Post
                            data: {
                                jekono_name: size_id valrialbe name
                            }


                            strep: 10
                            FrontendController e jabo and

                            function get_color_list(Request $request) {
                                return $request - > size_id;
                                //return Color::all();
                            }
                            and amy size_id dkhaibe.


                            $.ajax({
                                type: "GET",
                                url: "link here",
                                success: function(data) {
                                    alert(data)
                                };
                            })
                        });
                    });



                steps: 10 akhon amra kono porduct er color and size dekteci seita dekhar ponno amader product er id lagbe
                .Jahetu Product er sob detais frontendController theke Product_detail er moddey niye aschi tai $product_detaisl -
                >
                id dilei product er id peye jabo.

                $(document).ready(function() {
                        $('#size_dropdown').change(function() {
                                //alert('dropdown change');
                                //ajax setup
                                var size_id = $(this).val();
                                var product_id = {
                                    $product_details - > id
                                }
                            }; alert(product_id);
                        });
                });



            steps: 11
            akhon amra ai product er id ke amra ajax er maddhome onno page e pathabo
            tar jonno amra ajax er moody

            $(document).ready(function() {
                $('#size_dropdown').change(function() {
                        //alert('dropdown change');
                        //ajax setup
                        var size_id = $(this).val();
                        var product_id = {
                            $product_details - > id
                        }
                    }; //product_id ke dhorlam
                    //  alert(product_id);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }); $.ajax({
                        type: "POST",
                        url: "/get/color/list",
                        data: {
                            size_id: size_id,
                            product_id: product_id, //product id pathiye dilam
                        },
                        success: function(data) {
                            alert(data);
                        }
                    });
                });
            });
        </script>


        step:12
        akhon frontendController giye get_color_list() function ke bolbo je tmi inventory te jaw and seikhan theke tumi product_id and product_color_id ke diye aso  and aita ke amra akta variable er  moddey rakbo

       :::::::::::::::: FrontendController::::::::::
        function get_color_list(Request $request){
                    //  return $request->size_id;
                    //  return $request->product_id;
                /*        return   Inventory::where([
                            'product_id' => $request->product_id,
                            'product_size_id' => $request->size_id,
                        ])->get(); */

        function get_color_list(Request $request){

                 $Inventories =   Inventory::where([
                            'product_id' => $request->product_id,
                            'product_size_id' => $request->size_id,
                        ])->get();


        steps:13
        amader Inventories sob gulo ke dekhaite hobe tai amrader foreach loop chailete hobe
            amader aikhne lage prouct er ki ki color ace tai amra Inventroy Model e chole jabo and seikhan theke marm inventroy er sathe je Color er relationship ace seita dhore dak dibo .
        foreach($inventories as $inventory){
            $inventroy->relationshipWIthColor->color_name

        }

        aita korte amder alert er moddey dekhabe but amra alert er moodey dekte chai na . amra dropdown er moodey dekte cai .


        steps:14
        ami jei size click korbo seigulo ke akta html tag er moddy dekhaite cai . tar jonno mai h1 tag er moody nilam Availavle color . and akta id dilam color-test
            Product_details.blade.php
        <h1 id="color_test">Available Color</h1>

        $.ajax({
            jeikhnae code likhe seikhane giye id dhore .html diye data call kore dibo
             success: function(data) {
            $("#test_color").html(data);
        })
    }















        </script>


    endsection










    -->
</body>

</html>
