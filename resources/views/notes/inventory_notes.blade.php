<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
</head>

<body>

    <!--
        ==========INVENTORY DESCRIPTION START=========
        INVENTORY:
            amra je porduct niye kaj korbo tar hishab nikashei hoitece inventory aikhane amder je hishab gulo korte hobe seita holo
            Product =========== Size ============== Color
            1. Niye Shoes ======  32  =============== red
                                     ====== 34  =============== green
                                     ======  36  =============== black
                                     ======  32  =============== white
    Nike shoes er khatre color alada hote pare and size o alada hote pare .  aikhane amr color and size duitai matter kore


    Abr amn kicu product ace jar color and size kicui matter kore na
    jemon
    Product  ==============Size ================= Color
    1.    Pen     ============= N/A  ================= N/A (Not Applicable)
pen er khetre pen er size and color konotai matter kore na aita hobe N/A for not applicable


Abr kicu kicu product er sudhu color er uplor depend kore size matter kore na tar jonno
Product ================ Size  ================ Color
        Muri =============== N/A ================= White
                ===============N/A ================== Brown
muri sudhu color matter kore kintu size matter kore na


Abar kicu porduct ace je sudhu size matter kore kinto color matter kore na
    Product ==================Size ================Color
        Vim     ================= Xl    =================Green
                    =================SM    ================Yellow
                    ================= m    ================  Blue

===AKHON AMRA AI PROCESS E AGABO ORTHAT AMDER SIZE AND COLOR TOYRI KORA LAGBE =============




 ==========INVENTORY DESCRIPTION  END=========
        1. Product er inventory add korar jonno
            php artisan make:model PorductInventory -mc (migration table + controller lagbe)
        2. web.php te rote gula delcrear kobo
        3.add inventory te amder 2 ta form thakebe akta hoiteace size er jonno and oporta color er jonno

        4. size er jonno amader alada database lagbe and model lagbe tai amra php artisan make:model Size -m ; baniye nilam and database only size er name thake .

        5. color er jonno amder alada form lagbe and and alada model and migration lagbe php artisan make:model Color -m
            color add korar jonno color_name and color code database e dilam

        6. product size and color list akare show korabo
=================INVENTORY DESCRIPTION END













====================PRODUCT ADD INVENTORY ==============================
1. Product e inventory set korar jonno ProductContoller giye route banabo
Route::get('product/add/inventory', [ProductController::class, 'product_add_inventory'])->name('product.add.inventory');

Inventory mane holo akta product er size and color niye asar jonno ja ja kora lagbe sei gula

ProductController er details and prduct er size and color name and quantity koto hobe seita dekhar jonno
just product_quantiry + product_color + product_size 3ta field nilam



Product er inventory add korar jonno
step:1
Inventory name akta model and migration table banailam and migration table er moddey product_id, color_id and size_id thakbbe
Inventroy Insert korar jonno  amra  chole jabo PorductController er vitore

step:2
'product_id' + 'poduct_quanity' + 'product_size_id' + 'product_color_id' database e insert korte hobe

step:3
product er llist dekhanor jonnno amder Inventory model ke call kore dekhate hobe
        inventories table er product_id === passkora $id
        $inventory = Inventory::where('product_id', $id)->latest()->get(); ai gulo ke show koro

step:4
akhon ai inventory varibale ke amra table er moddey loop chalabo

step:5
akhon amy product er name show korate hobe but amar kace to product name nai tai amy relationship toyri korte hobe . and amader jei bishoy ta mathay rakte hobe seita hoitece je amra loop jekhane chiteci sei table er model er sahote jeita ber korte cai tar model er relation korte hobe


step:6
amra loop guracchi kothey Inventory te amra chole jabo Inventroy er model e seikhane giye kar sathe relation korate chacci Product er sathe tai amra akta function declear korbo
function relationshipwithProduct(){
    return $this->hasOne(Product::class, 'inventory er id', 'inventory te thake product er id')
     return $this->hasOne(Product::class, 'id', 'product_id');
}

steps-7
product er size dekhar joono amder Inventory Model  er sahte Size model er relation ghotaiete hobe
seita holo
    function relationshipWithSize(){
        id = inventroy er id
        return $this->hasOne(Size::class, 'id','product_size_id');
    }

    steps:8
    product er color powar jonno Inventroy er model er sathe Color Model er realtionship toyri korte hobe
 function relationshipWIthColor(){
        return $this->hasOne(Color::class, 'id', 'product_color_id');
    }


    steps -9
    table er product addition ta valo kore lokkho koro

    setps-10
    Relatonshipgulo akebapre page load howar age niye lod dei

    without relationship load
     function product_add_inventory($id){
        $product = Product::find($id);
        $sizes = Size::all();
        $colors = Color::all();
        //inventory theke seigulo ke dekhaw jekhane product_id == $id er soman
        $inventories = Inventory::where('product_id', $id)->latest()->get();
         return view('backend.product_inventory.create', compact('product', 'sizes', 'colors', 'inventories'));
       }

       with relationship load
        function product_add_inventory($id){
        $product = Product::find($id);
        $sizes = Size::all();
        $colors = Color::all();
        //inventory theke seigulo ke dekhaw jekhane product_id == $id er soman
         $inventories = Inventory::where('product_id', $id)->with('relationshipWIthProduct', 'relationshipWithSize', 'relationshipWithColor')->latest()->get();
         return view('backend.product_inventory.create', compact('product', 'sizes', 'colors', 'inventories'));
       }
====================PRODUCT ADD INVENTORY End==============================

    -->
</body>

</html>
