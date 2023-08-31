<?php

namespace App\Http\Controllers\TeachherEdit;

use App\Http\Controllers\Controller;
use App\Models\Classtime;
use App\Models\Lawtime;
use Illuminate\Http\Request;

class TeacherEditController extends Controller
{
    function add_class(){

        return view('teacher/add_class_time');
    }

   function class_time_insert(Request $request){
    Classtime::insert([
        'name'=> $request->name,
        'course_id' => $request->course_id,
        'course_timig' => $request->course_timig,
        'liveLink'=> $request->liveLink,
    ]);

    return back()->with('success','your Class Time add successfully !!');

    }

    function add_lawtime(){
        return view('lawyer/add_lawservice_time');
    }

    function lawtime_insert(Request $request){
        Lawtime::insert([
            'name'=> $request->name,
            'course_id' => $request->course_id,
            'course_timig' => $request->course_timig,
            'liveLink'=> $request->liveLink,
        ]);
    
        return back()->with('success','your Class Time add successfully !!');
    
    }
}
