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











    -->
</body>

</html>
