<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordChangerController extends Controller
{
    //
    function index(){
     return view('backend.password.password_index');
    }

    function store(Request $request){
        return $request;
    }
}
