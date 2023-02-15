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
        :::::::::::::::::::How to make custom helpers Start:::::::::::::::::::::::::::::::::
        ** custom helper er jonno amader laravel documentation e jete hobe sei address holo ==> custom helpes in laravel
        ** ai khan theke laravel new name akta website asbe sei website e jete  hobe . https://laravel-news.com/creating-helpers
        Next Steps :
        ** app/helpes.php  [app folder er moddey helpers.php name akta file toyri korbo ]
        ** helpers.php er moddey akta function declrer korbo and sei function ke call korle sob page e kaj korbe .
        ** auto load newar jonno comoser.json folder er moddey
                "files": [
                "app/helpers.php"
            ],
        ai code dite hobe
        ** new file add korci tai restore korar jonno [composer dump-autoload] ai command dite hobe


       ::::::::::::::::: helpers.php ai file er moddey::::::::::::::::::::::
          < php
        use App\Models\Category;

        function listOfCategories()
        {
            return Category::all();
        }
        ?>
       ::::::::::::::::: helpers.php ai file er moddey::::::::::::::::::::::



        :::::::::::::::::category list show koranor jonno ::::::::::::::::
        foreach(listOfCategories as $category_list)
            <p>$category_list->category_name</p>
        endforeach
        :::::::::::::::::category list show koranor jonno ::::::::::::::::
        ::::::::::::::::::How to make custom helpers End:::::::::::::::::::::::::::::::::









    1. Frontend controller er product details page e vedor er name and image dear joono amder je steps follow korte hobe seita holo.
    amder vendor ber korbo kothey Product details ee tai to

    ::::::::::::::vendor :::::::::::::::::::::: ait holo product_details.blade.php er ta
    function product_details ($id){
        $product_details = Product::find($id);
        $vendor = User::find(product_details er moddey -> user_id); koto number seita ber korate hobe orhtar product ta koto number er
        $vendor = User::find($product_details->user_id);
    }
::::::::::::::vendor end:::::::::::







::::::::::::::::::::::::::::::::::::::::::::Related Product er jonno ::::::::::::::::::::::::::::::::::::::
steps:
1. amra chole jabo frontedController er Product_details(){ function } function er moddey
2. seikhane giye amra product_id  return kore dekbo code:
        function product_details($id){
            return Product::find($id);  aitar moddey amra categoy_id dekte pabo [product_category] akhon ai product categoy ke dhorbo
            return  $product_details->product_category; // aikhane koto number categroy ta dekte pabo
            =========Related product er jonno=======
            Product::where('product_category'aita holo product table er category id , $product_details->product_category [product table er category id])->get();
            ************Finally***********
             Product::where('product_category', $product_details->product_category)->get();

             finally
             $related_products = Product::where('product_category', $product_details->product_category)->where('id', '!=', $id)->get();
             where('id', '!=', $id) => ami bade sokol ke dekhaw

        }



           function product_details ($id){
         $product_details = Product::find($id);
         $product_details->product_category;
        $vendor = User::find($product_details->user_id);
         $featuer_photos = FeaturedPhoto::where('product_id',$id)->get();
        $related_products = Product::where('product_category', $product_details->product_category)->where('id', '!=', $id)->get();
  return view('frontend.products.product_details', compact('product_details', 'featuer_photos', 'vendor', 'related_products'));
    }
:::::::::::::::::::::::::::::::::Related Product End::::::::::::::::::::::::::::::::





    --------->
</body>

</html>
