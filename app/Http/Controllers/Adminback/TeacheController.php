<?php

namespace App\Http\Controllers\Adminback;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacheController extends Controller
{
    function teachershow(){
        $allteacher = Teacher::all();
        return view('admin/teacher',compact('allteacher'));
        
    }
}
