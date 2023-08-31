<?php

namespace App\Http\Controllers\Adminback;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use App\Models\lawservices;
use Illuminate\Http\Request;



class LawserviceController extends Controller
{
    function lawserviceshow(){
        $all_service= lawservices::simplePaginate(6);

        return view("/admin/lawservice",compact('all_service'));
       }
       
    function lawservice_usershow(){
        $all_lawservices= lawservices::all();
        return view("welcome", compact('all_lawservice'));
       }

    function insert_lawservice(Request $request){

        $validatedData = $request->validate([
            'l_name' => 'required|string|max:255',
            'service_provider' => 'required|string',
            'service_price'  => 'required|numeric',
            'service_provider_review' => 'required|numeric',
            'service_provider_details' => 'required|string',
            'service_procedure' => 'required|string',
        ], [
            'name.required' => 'Name is required.',
            'service_provider.required' => 'Service provider name is required.',
            'service_price.required' => 'Price is required.',
            'service_price.numeric'  => 'Price should be a numeric value.',
            'service_provider_review.required' => 'Review is required.',
            'service_provider_review.numeric' => 'Review should be a numeric value.',
            'service_provider_details.required' => 'Details are required.',
            'service_procedure' => 'procedure are required.',
        ]);
        $l_imgPath = '';
        if ($request->hasFile('law_img')) {
            $l_imgPath = $request->getSchemeAndHttpHost(). '/storage/images/'. time().'.'.$request->law_img->extension(); // Adjust the storage path as needed
            $request->law_img->move(public_path('/storage/images/'),$l_imgPath);
    
    
        }
    
        lawservices::insert([
            'l_name' => $validatedData['l_name'],
            'law_img' => $l_imgPath,
            'service_provider' => $validatedData['service_provider'],
            'service_price' => $validatedData['service_price'],
            'service_provider_review' => $validatedData['service_provider_review'],
            'service_provider_details' => $validatedData['service_provider_details'],
            'service_procedure' => $request->service_procedure,
        ]);
    
         return back()->with('add_notic','your Services added successfully !!');
       }

    function deletelawservice($course_id){
        Lawservices::find($course_id) -> delete();
        return back()->with('delete_notic','your product deleted successfully !!');
       }

    function editlawservice($service_id){
        $sercive_ditels = Lawservices::findOrfail($service_id);
        return view("admin/edit_lawservice", compact('sercive_ditels'));
    }




    function editlawserviceinsert(Request $request) {
        // Validate the request data
        $request->validate([
            'l_name' => 'required|string|max:255',
            'service_provider' => 'required|string',
            'service_price'  => 'required|numeric',
            'service_provider_review' => 'required|numeric',
            'service_provider_details' => 'required|string',
            'service_procedure' => 'required|string',
        ], [
            'l_name.required' => 'Name is required.',
            'service_provider.required' => 'Service provider name is required.',
            'service_price.required' => 'Price is required.',
            'service_price.numeric'  => 'Price should be a numeric value.',
            'service_provider_review.required' => 'Review is required.',
            'service_provider_review.numeric' => 'Review should be a numeric value.',
            'service_provider_details.required' => 'Details are required.',
            'service_procedure' => 'procedure are required.',
        ]);

    
        try {
            // Find the product by ID
            $product = Lawservices::find($request->id);
            
            if (!$product) {
                return back()->with('error', 'Product not found!');
            }
    
            // Update the product data
            $product->update([
                'l_name' => $request->l_name,
                'service_provider' =>  $request->service_provider,
                'service_price' =>  $request->service_price,
                'service_provider_review' =>  $request->service_provider_review,
                'service_provider_details' =>  $request->service_provider_details,
                'service_procedure' => $request->service_procedure,
    
            ]);

            return redirect('http://127.0.0.1:8000/admin/lawservice')->with('success', 'survice updated successfully!');
            
        } catch (\Exception $e) {
            // Handle any exceptions or errors here
            return back()->with('error', 'Error updating product: ' . $e->getMessage());
        }



    }
    
    
}