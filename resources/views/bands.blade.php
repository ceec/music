@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>All Bands <a class="btn btn-success pull-right" href="{{ url('/create/band') }}">Create New</a></h1>
        	<table id="all-bands" class="table">
        		<thead>
        			<th>Band</th>
        			<th>Start Date</th>
        			<th>Wesbite</th>
        			<th>Active</th>
        			<th></th>
        			<th></th>
        		</thead>
        		<tbody>
	        	@foreach($bands as $band)
	        		<tr>
	        			<td>{{$band->name}}</td>
	        			<td>{{$band->start_date}}</td>
	        			<td>{{$band->website}}</td>
	        			<td>
	        				@if ($band->still_active == 1)
	        					Yes
	        				@else
	        					No
	        				@endif
	        			</td>
	        			<td><a class="btn btn-primary" href="{{ url('/edit/band/'.$band->id) }}">Edit</a></td>
	        			<td><a class="btn btn-danger" href="{{ url('/delete/band/'.$band->id) }}">Delete</a></td>
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
	$("#all-bands").tablesorter();
});
</script>
@endsection
