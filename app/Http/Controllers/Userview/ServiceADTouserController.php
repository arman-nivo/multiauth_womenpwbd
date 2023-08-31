<?php

namespace App\Http\Controllers\Userview;
use App\Models\Userpayment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Coursepayment;
use App\Models\lawservices;
use App\Models\Services;
use App\Models\User;

use Illuminate\Http\Request;


class ServiceADTouserController extends Controller
{
    function marge_user_lawservice($law_id){
        
        $payfor_law = lawservices::findOrfail($law_id);
        return view('user_front/payment', compact('payfor_law'));
    }

    function marge_user_course($course_id){
        $payfor_course = Services::findOrfail($course_id);

        return view('user_front/paymentForCourse' , compact('payfor_course'));
    }

    function success_for_l($law_n_id){
            $product_ditels = lawservices::findOrfail($law_n_id);
            $username = session('user_name');
            $userId =  session('user_id');

            $existingPayment = Userpayment::where('user_id', $userId)->where('product_id', $product_ditels->id)->first();
            if ($existingPayment) {
                return redirect('/dashboard'); 
            } else {
                Userpayment::insert([
                    'product_id' => $product_ditels->id,
                    'user_id' => $userId,
                    'user_name' => $username,
                    'pay' => $product_ditels->service_price,
                    'created_at' => now(),
                ]);
    
            }

            // Now $userId contains the ID of the logged-in 
             return view('user_front/Successfull', compact('username','product_ditels'));
        
        }
    


    function success_for_courc($course_n_id){
        $product_ditels = Services::findOrfail($course_n_id);
        $username = session('user_name');
        $userId =  session('user_id');

        $existingPayment = Coursepayment::where('user_id', $userId)->where('product_id', $product_ditels->id)->first();
        if ($existingPayment) {
            return redirect('/dashboard'); 
        } else {
            Coursepayment::insert([
                'product_id' => $product_ditels->id,
                'user_id' => $userId,
                'user_name' => $username,
                'pay' => $product_ditels->service_price,
                'created_at' => now(),
            ]);

        }
        

        return view('user_front/Successfull', compact('username','product_ditels'));
    }
}



