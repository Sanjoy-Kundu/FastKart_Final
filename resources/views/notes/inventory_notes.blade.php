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
====================PRODUCT ADD INVENTORY End==============================

    -->
</body>

</html>
