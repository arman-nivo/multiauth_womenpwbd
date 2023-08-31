<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <div class='container'>
    <div class="row">
        <div class="py-12 col-12">
            <h1 style="text-align: center;font-weight: bold;    color: #4b49ac;">
                Buyer Information
            </h1>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">{{session('user_id')}}</th>
                </tr>
                <tr>
                <th scope="col">Name </th>
                <th scope="col">{{session('user_name')}}</th>
                </tr>
                <tr>
                <th scope="col">E-Course</th> 
                <th scope="col">{{$userCount}}</th>
                
                </tr>  
                <tr> 
                <th scope="col">Law service</th>
                <th scope="col">{{$count}}</th>
                </tr>  
            </thead>
            <tbody>
            
                
            </tbody>

        </table>


       
        </div>
    </div>
    </div>
    

</x-app-layout>
