<?php

namespace App\Http\Controllers\Adminback;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\lawservices;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function Showservice() {
        $allservice= Services::all();
        $all_lawservice= lawservices::all();
        return view("welcome",compact(['all_lawservice', 'allservice'])); 
    }

    function usershow() {
        $alladmin= Admin::all();
        return view("/admin/dashboard",compact("alladmin")); 
    }

    function product_diteals_show() {
        return view("/user_front/product_details"); 
    }
    function Showabout() {
        return view("/user_front/aboutus"); 
    }
    
    



}
