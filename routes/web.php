<?php

use App\Http\Controllers\Adminback\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeachherEdit\TeacherEditController;
use App\Http\Controllers\Userview\ServiceviewController;
use App\Models\Classtime;
use App\Models\Coursepayment;
use App\Models\lawservices;
use App\Models\Lawtime;
use App\Models\Services;
use App\Models\Userpayment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'Showservice'])->name('welcome');
Route::get('/aboutus', [UserController::class, 'Showabout'])->name('about_us');

Route::get('/product_view', [UserController::class, 'product_diteals_show'])->name('welcome');
Route::get('/course/Ditels_view/{course_id}', [ServiceviewController::class, 'service_view'])->name('welcome');
Route::get('/lawservice/Ditels_view/{service_id}', [ServiceviewController::class, 'lawservice_view'])->name('welcome.law');


// User route // User route// User route
// User route // User route// User route
function lawservice_usershow(){
    $all_lawservices= lawservices::all();
    return view("welcome", compact('all_lawservice'));
   }

// user dashboard controller
Route::get('/dashboard', function () {
    $userId = session('user_id');

    $count = Userpayment::where('user_id', $userId)->count();
    $userCount = Coursepayment::where('user_id', $userId)->count();
    return view('dashboard',compact('count','userCount'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/add-to-law/{law_id}', [App\Http\Controllers\Userview\ServiceADTouserController::class, 'marge_user_lawservice'])->name('add-to-law');
    Route::get('/add-to-course/{cor_id}', [App\Http\Controllers\Userview\ServiceADTouserController::class, 'marge_user_course'])->name('add-to-course');
    Route::get('/success_massage/{law_n_id}', [App\Http\Controllers\Userview\ServiceADTouserController::class, 'success_for_l'])->name('success-law');
    Route::get('/success/{course_n_id}', [App\Http\Controllers\Userview\ServiceADTouserController::class, 'success_for_courc'])->name('success-course');

    Route::get('dashboard/law_services', [App\Http\Controllers\Userview\UserDashboardController::class, 'user_law_services'])->name('user_law_services');
    Route::get('dashboard/courseOfUser', [App\Http\Controllers\Userview\UserDashboardController::class, 'courseOfUser'])->name('course_Of_User');

    Route::get('/dashboard/course/time/{usercourse_id}', [App\Http\Controllers\Userview\UserDashboardController::class, 'coursetime'])->name('course_time');
    Route::get('/dashboard/law/time/{userlaw_id}', [App\Http\Controllers\Userview\UserDashboardController::class, 'lawtime'])->name('law_time');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// admin routes admin routes admin routes 
// admin routes admin routes admin routes 

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin/teacher', [App\Http\Controllers\Adminback\TeacheController::class,'teachershow'])->name('admin.teacher');
    Route::get('/admin/lawyer', [App\Http\Controllers\Adminback\LawyerController::class,'lawyershow'])->name('admin.lawyer');
    Route::get('/admin/courses', [App\Http\Controllers\Adminback\ServiceController::class,'courseshow'])->name('admin.service');
    Route::post('/services/insert', [App\Http\Controllers\Adminback\ServiceController::class,'insertCourse'])->name('admin.courses');
    Route::get('course/delete/{course_id}', [App\Http\Controllers\Adminback\ServiceController::class,'deletecourse'])->name('admin.deletcourses');
    Route::get('produc_edit/insert/{course_id}', [App\Http\Controllers\Adminback\ServiceController::class,'editCourse'])->name('admin.edit_course');
    Route::post('/producedit/insert', [App\Http\Controllers\Adminback\ServiceController::class,'editCourseinsert'])->name('admin.edit_course');
    Route::get('/admin/dashboard', [App\Http\Controllers\Adminback\UserController::class,'usershow'])->name('admin.dashboard');
});
// Lawery add delete in admin panel 
// Lawery add delete in admin panel 

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin/lawservice', [App\Http\Controllers\Adminback\LawserviceController::class,'lawserviceshow'])->name('admin.lawservice');
    Route::post('/law_services/insert', [App\Http\Controllers\Adminback\LawserviceController::class,'insert_lawservice'])->name('admin.lawservice');
    Route::get('law_service/delete/{service_id}', [App\Http\Controllers\Adminback\LawserviceController::class,'deletelawservice'])->name('admin.deletcourses');
    Route::get('law_service_edit/insert/{service_id}', [App\Http\Controllers\Adminback\LawserviceController::class,'editlawservice'])->name('admin.edit_course');
    Route::post('/law_serviceedit/insert', [App\Http\Controllers\Adminback\LawserviceController::class,'editlawserviceinsert'])->name('admin.edit_course');
    Route::get('welcome', [App\Http\Controllers\Adminback\UserController::class,'lawservice_usershow'])->name('admin.welcome');
});


// admin routes admin routes admin routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/adminauth.php';

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard/teacher', 'App\Http\Controllers\Adminback\TeacheController@teachershow');

});


// Lawyer routes Lawyer routes Lawyer routes 
// Lawyer routes Lawyer routes Lawyer routes 

Route::get('/lawyer/dashboard', function () {
    $al_law = Lawtime::all();
    return view('lawyer.dashboard',compact('al_law'));
})->middleware(['auth:lawyer', 'verified'])->name('lawyer.dashboard');

Route::middleware('auth:lawyer')->group(function () {
    Route::get('/lawyer/add_class', [TeacherEditController::class, 'add_lawtime'])->name('add_law_time');
    Route::post('/lawyer/time_add', [TeacherEditController::class, 'lawtime_insert'])->name('add_lawservice_edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/lawyerauth.php';

// Teacher routes Teacher routes Teacher routes 
// Teacher routes Teacher routes Teacher routes 

Route::get('/teacher/dashboard', function () {
    $allclass = Classtime::all();
    return view('teacher.dashboard',compact('allclass'));
})->middleware(['auth:teacher', 'verified'])->name('teacher.dashboard');

Route::middleware('auth:teacher')->group(function () {
    Route::get('/teacher/add_class', [TeacherEditController::class, 'add_class'])->name('add_class_edit');
    Route::post('/teacher/classadd_edit', [TeacherEditController::class, 'class_time_insert'])->name('add_edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/teacherauth.php';