<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use App\Mail\AccountCreation;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::latest()->get();
        return view('backend.users.users_list', compact('users'));
    }

    public function create(){
        return view('backend.users.addUser');
    }

    public function store(Request $request){

        $request->validate([
            'user_name' => "required || max:40",
            'user_email' => 'required',
            'role' => 'required'
        ],[
            'user_name.required' => "User name is required",
            'user_name.max' => "Name must be 40 characters",
            'user_email.required' => "User email is required",
            'role.required' => "User role is required",
        ]);
        $makePassword = Str::upper(Str::random(8));

        $imageName = Str::lower(Str::random(20)).".".$request->file('profile_photo')->extension();
        $imagePath = "uploads/profiles/".$imageName;
        Image::make($request->file('profile_photo'))->resize(300, 300)->save($imagePath);

      $user_id = User::insertGetId([
        "name" => $request->user_name,
        "email" => $request->user_email,
        'password' => bcrypt($makePassword),
        'role' => $request->role,
        'profile_photo' => $imageName
      ]);


      User::find($user_id)->update([
       "profile_photo" => $imageName
    ]);

    $info = [
      'name' => $request->user_name,
      'email' => $request->user_email,
      'password' => $makePassword,
      'role' => $request->role
    ];


    Mail::to($request->user())->send(new AccountCreation($info));

      return back()->withSuccess('User added Successfully');
    }
}
