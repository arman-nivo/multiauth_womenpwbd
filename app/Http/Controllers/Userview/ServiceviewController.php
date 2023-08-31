<?php

namespace App\Http\Controllers\Userview;

use App\Http\Controllers\Controller;
use App\Models\lawservices;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceviewController extends Controller
{
    function service_view($course_id){
        $all_course = Services::findOrfail($course_id);
        return view('user_front/product_details', compact('all_course'));
    }
    function lawservice_view($service_id){
        $all_lawdit= lawservices::findOrfail($service_id);
        return view('user_front/law_details', compact('all_lawdit'));
    }
}
