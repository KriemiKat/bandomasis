
@section('content')

<div class='container'>
    <div class="card">
        <h3 class="fw-bold card-header text-center">
            Šalių sąrašas
        </h3>
        <ul class="list-group">
            @foreach($countries as $value)
            <li class="list-group-item d-flex">
                <div class='fw-bold col'> {{$value->name}}</div>
                <div class='col'> {{$value->season_start}}</div>
                <div class='col'> {{$value->season_end}}</div>
                <div class='col'>
                    <a href='{{route('countries-edit', $value)}}' class="btn btn-outline-primary">Redaguoti</a>
                </div>
                <form action='{{route('countries-destroy', $value)}}' method='post' class='col'>
                    <button type="submit" class="btn btn-outline-danger">Ištrinti</button>
                    @method('delete')
                    @csrf
                </form>

            </li>
            @endforeach
        </ul>
    </div>
</div>


@endsection