<x-lawyer-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="row">
                    


                    <h1 style="text-align: center;margin:0% 0% 3% 0%; color:white">Show all products</h1>
                    <table class="table table-dark table-hover" >
                    
                    <thead>
                        <tr>
                        <th scope="col">Service provider Name </th>
                        <th scope="col">Class diteals</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($al_law as $alltime)
                        <tr>
                        <td>{{$alltime->name}}</td>
                        <td>{{$alltime->course_timig}}</td>

                        </tr>
                        
                        @endforeach
                     
        
                    </tbody>
        
                </table>
                

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-lawyer-layout>
