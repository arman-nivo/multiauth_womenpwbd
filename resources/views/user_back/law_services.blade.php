<x-app-layout>
    <div style="
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    gap: 39px;
">
    @foreach($alluser_law as $userlaw)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$userlaw->law_img}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$userlaw->l_name}}</h5>
            <a href="{{ url('/dashboard/law/time', ['userlaw_id' => $userlaw->id]) }}" class="btn btn-primary">Go Live</a>
        </div>
        </div>
    @endforeach

    </div>



</x-app-layout>