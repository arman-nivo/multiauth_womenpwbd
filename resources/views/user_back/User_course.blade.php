<x-app-layout>
    <div style="
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    gap: 39px;
">
    @foreach($alluser_course as $usercourse)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$usercourse->img}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$usercourse->name}}</h5>
            <a href="{{url('/dashboard/course/time', ['usercourse_id' => $usercourse->id])}}" class="btn btn-primary">Go Live</a>
        </div>
        </div>
    @endforeach

    </div>



</x-app-layout>