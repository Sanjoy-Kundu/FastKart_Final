<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class UserProfileController extends Controller
{
    //
    function index(){

        return view('backend.profile.profile_index');
    }

    function store(Request $request){
       // return $request;
    $current_id = auth()->user()->id;
            if($request->hasFile('profile_image')){
                 $user_db_image = User::find($current_id)->profile_photo;
                 if($user_db_image != NULL){
                    unlink(public_path('uploads/profiles/').$user_db_image);
                 }

                 $newImageName = auth()->user()->id."-profile-".Str::lower(Str::random(20)).".".$request->file('profile_image')->extension();
                 $imagePath = "uploads/profiles/".$newImageName;
                 Image::make($request->file('profile_image'))->resize(300, 300)->save($imagePath);


                 User::find($current_id)->update([
                    'profile_photo' => $newImageName
                 ]);

            }

            User::find($current_id)->update([
                'name' => $request->profile_name
            ]);

            return back();
       // return $request;

    }


}
