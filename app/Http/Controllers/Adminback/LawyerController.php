<?php

namespace App\Http\Controllers\Adminback;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    function lawyershow(){
        $all_lawyer = Lawyer::all();
        return view('admin/lawyer', compact('all_lawyer'));
    }
}
