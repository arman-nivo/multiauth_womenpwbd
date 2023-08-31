<?php

namespace App\Http\Controllers\Adminback;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function courseshow(){
        $all_service= Services::all();

        return view("/admin/courses",compact('all_service'));
       }
       
    function courseshow_inuser(){
        $allservice= Services::all();
        return view("welcome",compact('allservice'));
       }

    function insertCourse(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'course_start' => 'required|date',
            'course_end' => 'required|date',
            'service_provider' => 'required|string',
            'service_price'  => 'required|numeric',
            'service_review' => 'required|numeric',
            'service_details' => 'required|string',
            'service_discount' => 'required|numeric',
        ], [
            'name.required' => 'Name is required.',
            'course_start.required' => 'Course start date is required.',
            'course_start.date' => 'Course start date should be a valid date format.',
            'course_end.required' => 'Course end date is required.',
            'course_end.date' => 'Course end date should be a valid date format.',
            'service_provider.required' => 'Service provider name is required.',
            'service_price.required' => 'Price is required.',
            'service_price.numeric'  => 'Price should be a numeric value.',
            'service_review.required' => 'Review is required.',
            'service_review.numeric' => 'Review should be a numeric value.',
            'service_details.required' => 'Details are required.',
            'service_discount.required' => 'Discount is required.',
            'service_discount.numeric' => 'Discount should be a numeric value.',
        ]);
        $imgPath = '';
        if ($request->hasFile('img')) {
            $imgPath = $request->getSchemeAndHttpHost(). '/storage/images/'. time().'.'.$request->img->extension(); // Adjust the storage path as needed
            $request->img->move(public_path('/storage/images/'),$imgPath);
       
    
        }
    
        Services::insert([
            'name' => $validatedData['name'],
            'img' => $imgPath,
            'course_start' => $validatedData['course_start'],
            'course_end' => $validatedData['course_end'],
            'service_provider' => $validatedData['service_provider'],
            'service_price' => $validatedData['service_price'],
            'service_review' => $validatedData['service_review'],
            'service_details' => $validatedData['service_details'],
            'service_discount' => $validatedData['service_discount'],
        ]);
    
         return back()->with('add_notic','your Services added successfully !!');
       }

    function deletecourse($course_id){
        Services::find($course_id) -> delete();
        return back()->with('delete_notic','your product deleted successfully !!');
       }

    function editCourse($course_id){
        $product_ditels = Services::findOrfail($course_id);
        return view("admin/edit_course", compact('product_ditels'));
    }




    function editCourseinsert(Request $request) {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'course_start' => 'required|date',
            'course_end' => 'required|date',
            'service_provider' => 'required|string',
            'service_price'  => 'required|numeric',
            'service_review' => 'required|numeric',
            'service_details' => 'required|string',
            'service_discount' => 'required|numeric',
        ], [
            'name.required' => 'Name is required.',
            'course_start.required' => 'Course start date is required.',
            'course_start.date' => 'Course start date should be a valid date format.',
            'course_end.required' => 'Course end date is required.',
            'course_end.date' => 'Course end date should be a valid date format.',
            'service_provider.required' => 'Service provider name is required.',
            'service_price.required' => 'Price is required.',
            'service_price.numeric'  => 'Price should be a numeric value.',
            'service_review.required' => 'Review is required.',
            'service_review.numeric' => 'Review should be a numeric value.',
            'service_details.required' => 'Details are required.',
            'service_discount.required' => 'Discount is required.',
            'service_discount.numeric' => 'Discount should be a numeric value.',
        ]);

    
        try {
            // Find the product by ID
            $product = Services::find($request->id);
            
            if (!$product) {
                return back()->with('error', 'Product not found!');
            }
    
            // Update the product data
            $product->update([
                'name' => $request->name,
                'course_start' =>  $request->course_start,
                'course_end' =>  $request->course_end,
                'service_provider' =>  $request->service_provider,
                'service_price' =>  $request->service_price,
                'service_review' =>  $request->service_review,
                'service_details' =>  $request->service_details,
                'service_discount' =>  $request->service_discount,
            ]);

            $teacher = Teacher::find($request->service_provider);
            if (!$teacher) {
                return back()->with('error', 'Product not found!');
            }
            $service_id = Services::where('name', $request->name)->firstOrFail();
            $teacher_assigned_course = $teacher->assigned_course . ' '. strval($service_id->id);
            $teacher->update([
                'assigned_course' => $teacher_assigned_course
            ]);  


            
            return redirect('http://127.0.0.1:8000/admin/courses')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            // Handle any exceptions or errors here
            return back()->with('error', 'Error updating product: ' . $e->getMessage());
        }



    }
    
    
}
