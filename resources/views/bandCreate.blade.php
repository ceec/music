@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Create Band</h1>
        	{!! Form::open(['url' => '/band/create']) !!}     
				<div class="form-group">
					<label for="name">Name</label>
					{!! Form::text('name','',['class'=>'form-control','id'=>'name']) !!}
				</div>     
				<div class="form-group">
					<label for="start-date">Start Date</label>
					{!! Form::text('start_date','',['class'=>'form-control','id'=>'start-date']) !!}
				</div>    
				<div class="form-group">
					<label for="name">Website</label>
					{!! Form::text('website','',['class'=>'form-control','id'=>'name']) !!}
				</div>    
				<div class="form-group">
					<label for="active">Active</label>
					{!! Form::text('still_active','',['class'=>'form-control','id'=>'name']) !!}
				</div>    			                                                               
            	{!! Form::submit('Create',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}      	
        </div>
    </div>
</div>
@endsection
