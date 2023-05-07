<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    //
    function customer_dashboard(){

            //return auth()->user()->id;
            $invoices =  Invoice::where("user_id", auth()->id())->get();
        return view('backend.customer_dashboard.customer_dashboard', compact("invoices"));
    }
}
