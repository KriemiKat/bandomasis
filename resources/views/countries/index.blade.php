@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-6">
                <div class="card-header">
                    <h1>List of Countries</h1>
                </div>
    <ul style= "list-style: none">
    @forelse($countries as $country)
    
        <li class="list-group-item" style="text-align: center">
            <h2 style= "color: rgb(44, 44, 74)">{{$country->name}}</h2>
            <div>{{$country->season_start}}</div>
            <div>{{$country->season_end}}</div>
          
            <a href="{{ route('countries.show', $country) }}">Show more</a><br>
            <a href="{{ route('countries.edit', $country) }}">Edit</a>
            <form method="post" action="{{ route('countries.destroy', $country) }}">
                <button type="submit" class="btn btn-outline-danger">Delete</button>
                <br>
                <hr>
               @csrf
               @method('delete')    
               {{-- patch --}}
                
            </form>
        </li>
     @empty
    <li class="list-group-item">
        <div class="client-line">No countries yet</div>
    </li>
    @endforelse
    </ul>
</div>
</div>
</div>
</div>

@endsection