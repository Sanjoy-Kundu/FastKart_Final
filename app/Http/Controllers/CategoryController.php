<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    //

    public function index(){
        $all_categories = Category::latest()->get();
        $all_trashedCategories = Category::onlyTrashed()->latest()->get();
        return view('backend.category.category_index', compact('all_categories', 'all_trashedCategories'));
    }

    public function create(){
        return view('backend.category.add_category');
    }

    public function insert(Request $request){



        $request->validate([
            'category_name' => "required || max:50||unique:categories,category_name",
            'category_description' => "required"
        ],[
            'category_name.required' => "Category name is required",
            'category_name.max' => "Category name must be 50 character",
            'category_name.unique' => "Category name already name",
            'category_description.required' => "Category description is required",
        ]);

        $category_slug = Str::slug($request->category_name, '-');
        $category_id = Category::insertGetId($request->except('_token') + [
            'category_slug' => $category_slug,
            'created_at' => Carbon::now()
        ]);

        if($request->hasFile('category_image')){
             $imageName = "category-".Str::lower(Str::random(20)).".".$request->file('category_image')->extension();
           $imagePath = "uploads/categories/$imageName";

           Image::make($request->file('category_image'))->resize(300, 300)->save($imagePath);


                Category::find($category_id)->update([
                    'category_image' => $imageName,
                ]);
           }
    return back()->withSuccess('Category Inserted Successfully');
    }



    function edit($category_id){
        //echo $category_id;
        $category_edit = Category::find($category_id);
        return view('backend.category.edit_category', compact('category_edit'));
    }

//=============category update start=================
    function update(Request $request, $category_id){
        if($request->HasFile('update_category_image')){
            $category_image =  Category::find($category_id)->category_image;
            if($category_image != NULL){
                unlink(public_path("uploads/categories/".$category_image));
            }
                $update_imageName = Str::lower(Str::random(20)).'.'.$request->file('update_category_image')->extension();
                $path = "uploads/categories/".$update_imageName;

                Image::make($request->file('update_category_image'))->resize(300, 300)->save($path);

                echo "image upload";
                //database update
                Category::find($category_id)->update([
                    'category_image' => $update_imageName
                ]);
                //database update end
        }
        Category::find($category_id)->update([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description
        ]);

        return back();
    }
//=============category update end ================



//============category general delete ===============
function delete(Request $request, $category_id){
Category::find($category_id)->delete();
return back();
}


//============Category restore ==================
function restore($category_id){
     Category::onlyTrashed()->find($category_id)->restore();
     return back();
}


// =================== permanent delete ========
function permanent_delete($category_id){
    Category::onlyTrashed()->find($category_id)->forceDelete();
    return back();
}




}
