@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>All Albums</h1>
            @foreach($albums as $album)
        		{{$album->name}}<br>
        	@endforeach
        </div>
    </div>
</div>
@endsection
