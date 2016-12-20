@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
	        @if ($create) 
	        	<h1>Create Band</h1>
	        @else
	        	<h1>Editing Band: {{$band->name}}</h1>
	        @endif

			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			            @foreach ($errors->all() as $error)
			                {{ $error }}<br>
			            @endforeach
			    </div>
			@endif

			@if ($create)
        		{!! Form::open(['url' => '/band/create']) !!}     
        	@else
        		{!! Form::open(['url' => '/band/edit']) !!}  
        		{!! Form::hidden('band_id',$band->id) !!}
        	@endif
				<div class="form-group">
					<label for="name">Name</label>
					{!! Form::text('name',$band->name,['class'=>'form-control','id'=>'name']) !!}
				</div>     
				<div class="form-group">
					<label for="start-date">Start Date</label>
					{!! Form::text('start_date',$band->start_date,['class'=>'form-control','id'=>'start-date']) !!}
				</div>    
				<div class="form-group">
					<label for="name">Website</label>
					{!! Form::text('website',$band->website,['class'=>'form-control','id'=>'name']) !!}
				</div>    
				<div class="form-group">
					<label for="active">Active</label>
					{!! Form::select('still_active',array('0' => 'No', '1' => 'Yes'),$band->still_active,['class'=>'form-control','id'=>'name']) !!}
				</div>    						                                                               
				@if ($create)				 			                                                               
            		{!! Form::submit('Create',['class'=>'btn btn-success']) !!}
            	@else
            		{!! Form::submit('Update',['class'=>'btn btn-success']) !!}
            	@endif	
            {!! Form::close() !!}      	
        </div>
    </div>
</div>
@endsection
