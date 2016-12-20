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
	        			<td><button class="btn btn-primary">Edit</button></td>
	        			<td><button class="btn btn-danger delete-band" data-id="{{$band->id}}">Delete</button></td>
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

	//ajax setup
	$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	})

	//removing band
	$('body').on('click','.delete-band',function() {
	    var bandID = jQuery(this).data('id');

	    $.ajax({
	        type: "POST",
	        url: '/delete/band',
	        data: {band_id:bandID},
	        dataType: 'json',
	        success: function (data) {
	        	//reload the page
	        	console.log(data);
	                 
	        },
	        error: function (data) {
	            console.log('Error:', data);
	        }
	    });
	});
});
</script>
@endsection
