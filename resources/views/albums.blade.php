@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>All Albums <a class="btn btn-success pull-right" href="{{ url('/create/album') }}">Create New</a	></h1>
        {!! Form::open(['url' => '/albums/filter']) !!}     
        	<div class="form-group">
				<label for="filter">Filter by Band</label>
					{!! Form::select('band_id',$bands,'',['class'=>'form-control','id'=>'filter']) !!}
			</div> 
			{!! Form::submit('Filter',['class'=>'btn btn-success']) !!}
			<a class="btn btn-success" href="{{ url('/albums') }}">All Albums</a>
		{!! Form::close() !!}   


       
    	<table id="all-albums" class="table">
    		<thead>
    			<th>Band</th>
    			<th>Name</th>
    			<th>Recorded Date</th>
    			<th>Release Date</th>
    			<th>Tracks</th>
    			<th>Label</th>
    			<th>Producer</th>
    			<th>Genre</th>
    			<th></th>
    			<th></th>
    		</thead>
    		<tbody>
        	@foreach($albums as $album)
        		<tr>
        			<td>{{$album->band['name']}}</td>
        			<td>{{$album->name}}</td>
        			<td>{{$album->recorded_date}}</td>
        			<td>{{$album->release_date}}</td>
        			<td>{{$album->number_of_tracks}}</td>
        			<td>{{$album->label}}</td>        			        			        			
        			<td>{{$album->producer}}</td>
        			<td>{{$album->genre}}</td>        			        			
        			<td><a class="btn btn-primary" href="{{ url('/edit/album/'.$album->id) }}">Edit</a></td>
        			<td><a class="btn btn-danger" href="{{ url('/delete/album/'.$album->id) }}">Delete</a></td>
        		</tr>
        	@endforeach    
        	</tbody>    		
    	</table>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/js/jquery.tablesorter.js"></script>
<script>
$(function(){
	//add tablesorter
	$("#all-albums").tablesorter();
});
</script>
@endsection
