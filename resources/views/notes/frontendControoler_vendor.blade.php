<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <!----
    1. Frontend controller er product details page e vedor er name and image dear joono amder je steps follow korte hobe seita holo.
    amder vendor ber korbo kothey Product details ee tai to

    ::::::::::::::vendor :::::::::::::::::::::: ait holo product_details.blade.php er ta
    function product_details ($id){
        $product_details = Product::find($id);
        $vendor = User::find(product_details er moddey -> user_id); koto number seita ber korate hobe orhtar product ta koto number er
        $vendor = User::find($product_details->user_id);
    }
::::::::::::::vendor:::::::::::end




    --------->
</body>

</html>
