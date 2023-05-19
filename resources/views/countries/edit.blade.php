@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
<form class="form-horizontal" action="{{route('stories.update', $country)}}" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label class="control-label col-sm-2" for="title">Country</label>
    <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{$country->title}}">
    </div>
    <br>
    
    <div class="form-group">
    <label for="tag">#</label>
    <input type="text" name="tag" placeholder="Enter tags" class="form-control" value="{{$country->tag}}" >
</div>
<br>
    <button class="btn btn-outline-info">Update</button>
@csrf
@method('put')
</form>
</div>
</div>
</div>
@endsection