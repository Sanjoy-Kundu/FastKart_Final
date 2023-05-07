<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\FeaturedPhoto;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::latest()->get();
            $products = Product::where('user_id', auth()->user()->id)->latest()->get();

         return view('backend.product.product_list', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return view('backend.product.create_product');
        // return "good";
        // die();
        $categories = Category::all();
        return view('backend.product.create_product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    // return $request;
        $request->validate([
            'product_name' => 'required',
            'product_category' => 'required',
            'product_pruches_price' => 'required',
            'product_regular_price' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'additional_information' => 'required',
            'care_instruction' => 'required',
             'product_image' => 'required',
        ],[
            'product_name.required' => "Product Name is required",
            'product_category.required' => "Category Name is required",
            'product_pruches_price.required' => "Purches price is required",
            'product_regular_price.required' => "Regular price is required",
            'short_description.required' => "Short description is required",
            'long_description.required' => "Long description is required",
            'additional_information.required' => "Additional information is required",
            'care_instruction.required' => "Care Instruction is required",
            'care_instruction.required' => "Care Instruction is required",
        ]);

                //return  $request->product_regular_price;
                if($request->discount){
                    $discount = $request->discount;
                     $discounted_price = $request->product_regular_price - ($request->product_regular_price * ($request->discount /100));
                 }else{
                $discount = 0;
                  $discounted_price = $request->product_regular_price;
                 }

       $product_id =  Product::insertGetId([
             'user_id'=>auth()->user()->id,
            'product_name' => $request->product_name,
            'product_category' => $request->product_category,
            'product_pruches_price' => $request->product_pruches_price,
            'product_regular_price' => $request->product_regular_price,
            'discount' => $discount,
            'discounted_price' => $discounted_price,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'additional_information' => $request->additional_information,
            'care_instruction' => $request->care_instruction,
            'product_image' => $request->product_image,
            'created_at' => Carbon::now()

        ]);

        //::::::::::::::::::::::::::::::::::::::product image start::::::::::::::::::::::::::::
       $productImageName = auth()->id()."-"."product-main-".Str::lower(Str::random(20)).".".$request->file('product_image')->extension();
        $product_imagepath = "uploads/products/mainPhoto/".$productImageName;
        Image::make($request->file('product_image'))->resize(750, 750)->save($product_imagepath);
        //database update
            Product::find($product_id)->update([
                'product_image' => $productImageName
            ]);
        //database update
    //:::::::::::::::::::::::::::::::::::::::product image end :::::::::::::::::::::::::::::::::::




    //::::::::::::::::::::::::::::::Featured photo upload start ::::::::::::::::::::::::::::::::::::
    //return $request->featureds_images;
            foreach($request->featureds_images as $image){
                //echo $image;
                $featured_imageName = $product_id."-".Str::lower(Str::random(20)).".".$image->extension();
                $featured_image_path = "uploads/products/featured_photos/".$featured_imageName;
                Image::make($image)->resize(750, 750)->save($featured_image_path);


                //database update start
                FeaturedPhoto::insert([
                    "product_id" => $product_id,
                    "featured_photo_name" => $featured_imageName,
                    "created_at" => Carbon::now()
                ]);
                //database update end
            }
    //::::::::::::::::::::::::::::::Featured photo upload end ::::::::::::::::::::::::::::::::::::

     return back()->with('success', 'Product inserted successfully!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    //Product inventory start color + size + quantity
    function product_add_inventory($id){
        $product = Product::find($id);
        $sizes = Size::all();
        $colors = Color::all();
     $inventories = Inventory::where('product_id', $id)->with('relationshipWIthProduct', 'relationshipWithSize', 'relationshipWithColor')->latest()->get();
       return view('backend.product_inventory.create', compact('product', 'sizes', 'colors', 'inventories'));
       }


    function product_inventory_insert(Request $request, $id){

    //    // return  $request;

    //    if(Inventory::where([
    //     'product_quantity'=>$request->product_quantity,
    //     'product_size_id'=> $request->product_size,
    //     'product_color_id'=>$request->product_color,
    // ])->exists()){

    //    }else{

    //    }

    if(Inventory::where([
        'product_id' => $id,
        'product_size_id'=> $request->product_size,
        'product_color_id'=>$request->product_color,
    ])->exists()){
        //quantity incriment start hobe
        Inventory::where([
            'product_id' => $id,
            'product_size_id'=> $request->product_size,
            'product_color_id'=>$request->product_color,
        ])->increment('product_quantity', $request->product_quantity);
    //quantity increment end
    }else{
        Inventory::insert([
            'product_id'=>$id,
            'product_quantity' => $request->product_quantity,
            'product_size_id' => $request->product_size,
            'product_color_id' => $request->product_color,
            'created_at' =>Carbon::now(),
        ]);
    }
    // echo    Inventory::where([
    //         'product_quantity'=>$request->product_quantity,
    //         'product_size_id'=> $request->product_size,
    //         'product_color_id'=>$request->product_color,
    //     ])->exists();

    //     die();
    //     Inventory::insert([
    //         'product_id'=>$id,
    //         'product_quantity' => $request->product_quantity,
    //         'product_size_id' => $request->product_size,
    //         'product_color_id' => $request->product_color,
    //         'created_at' =>Carbon::now(),
    //     ]);
        return back()->with('inventory_success', 'Inventory added successfully');
    }
    //Product inventory start color + size + quantity





}
