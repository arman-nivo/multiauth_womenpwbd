<x-app-layout>
    
<div class='container'>
    <div class="row">
        <div class="py-12 col-12">
            <h1 style="text-align: center;font-weight: bold;    color: #4b49ac;">
                Class time info
            </h1>
            <table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">Course Id</th>
            <th scope="col">@if(!empty($time_course[0])) {{ $time_course[0]->course_id }} @endif</th>
        </tr>
        <tr>
            <th scope="col">Course Provider Name</th>
            <th scope="col">@if(!empty($time_course[0])) {{ $time_course[0]->name }} @endif</th>
        </tr>
        <tr>
            <th scope="col">Class Details</th>
            <th scope="col">@if(!empty($time_course[0])) {{ $time_course[0]->course_timig }} @endif</th>
        </tr>
        <tr>
            <th scope="col">Class Link</th>
            <th scope="col">@if(!empty($time_course[0])) <a href="{{ $time_course[0]->liveLink }}">join Class</a>  @endif</th>
        </tr>
    </thead>
    <tbody>
        <!-- You can loop through the remaining elements if needed -->
    </tbody>
</table>



       
        </div>
    </div>
    </div>
</x-app-layout>