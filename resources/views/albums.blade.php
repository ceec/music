@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>All Albums <a class="btn btn-success pull-right" href="{{ url('/create/album') }}">Create New</a	></h1>


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
        			<td>{{$album->band_id}}</td>
        			<td>{{$album->name}}</td>
        			<td>{{$album->recorded_date}}</td>
        			<td>{{$album->release_date}}</td>
        			<td>{{$album->number_of_tracks}}</td>
        			<td>{{$album->label}}</td>        			        			        			
        			<td>{{$album->producer}}</td>
        			<td>{{$album->genre}}</td>        			        			
        			<td>
        				<a href="{{ url('/edit/album/'.$album->id) }}">
        					<button class="btn btn-primary">Edit</button>
        				</a>
        			</td>
        			<td>
        				<a href="{{ url('/delete/album/'.$album->id) }}">
        					<button class="btn btn-danger">Delete</button>
        				</a>
        			</td>
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
