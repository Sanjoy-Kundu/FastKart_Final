<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <!-----

       :::::::::::::::::::::: Question:::::::::::
        amder je user jei product upload korbe tar porduct list e sei product dekhabe seita kora jonno amra ProductController ee jabo
        Product controller e giye
           $products = Product::where('user_id', auth()->user()->id)->latest()->get();  and compact kore pathiye dibo
        Example:
             public function index()
                {
                    // $products = Product::latest()->get();
                        $products = Product::where('user_id', auth()->user()->id)->latest()->get();
                    return view('backend.product.product_list', compact('products'));
                }
        Notes:: aikhane Product::where jekhnae ('user_id', auth()->user()->id)  er mile and get kore niye output dekhaw .








::::::::::::::Category Name Show :::::::::::::::::

        Product list er modey amder categroy name dekhaite hobe ,
        but product table to amder category name nai category name er poriborte category_id ace . tai amder category  name er poriborte name er jaygay category_id show kortece . akhon amder ai  category_id diye amder category name ber korte hobe .

        Category Name ace kothey Category Table

        Category Name niye asar koushol
        amr query chaiteci kon table e Product Table e tai amra chole jabo Product table er Model  eee.

        ai khane ase orthat (Product Model) product model e amder akta (function declear korte hobe) sei function er madhome ader poructTable er shathe CategoryTable er relation ghotaite hobe

            akta product er shathe akta catagory er to relation thakbe  seita hoitece one to one
            kenona akta product er to aktai category thakbe.

            function relationwithCategory(){
                return $this->somporko ta ki hobe(hasOne hobe naki hasMany hobe seita bolte hobe)(kar sathe somporko korbo Category er sahte tai Category::class, 'cateogry_id', 'product table er cateogry_id')
            }

            finally
            function relationshipCategory(){
                reurn $this->hasOne(Category::class, 'id', 'product_category');
            }
            finally tader somporko tori holo
            akhon function er name jekhane dakbo seikhnei output dekhabe .

            :::::::::::::::::::Category  name show end ::::::::::::::::::::::::::::






        ------>
</body>

</html>
