<?php

namespace App\Http\Controllers\Userview;

use App\Http\Controllers\Controller;
use App\Models\Classtime;
use App\Models\Coursepayment;
use App\Models\Lawservices;
use App\Models\Lawtime;
use App\Models\Services;
use App\Models\Userpayment;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    function user_law_services(){
        $userId = session('user_id');
        $userPayments = Userpayment::where('user_id', $userId)->get();
        $productIds = [];
        foreach ($userPayments as $userPayment) {
            $productIds[] = $userPayment->product_id;
        }
        $alluser_law = Lawservices::whereIn('id', $productIds)->get();
        
        return view('user_back/law_services', compact('alluser_law'));
    }

    function courseOfUser(){
        $userId = session('user_id');
        $userPayments = Coursepayment::where('user_id', $userId)->get();
        $productIds = [];
        foreach ($userPayments as $userPayment) {
            $productIds[] = $userPayment->product_id;
        }
        $alluser_course = Services::whereIn('id', $productIds)->get();
        
        return view('user_back/User_course', compact('alluser_course'));
    }


    function coursetime($usercourse_id){
        $time_course =Classtime::where('course_id', $usercourse_id)->get();
        return view('user_back/showtime',compact('time_course'));
    }

    function lawtime($userlaw_id){
        $time_law = Lawtime::where('course_id', $userlaw_id)->get();
        return view('user_back/show_time',compact('time_law'));
    }
}
