@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Create Album</h1>
        	{!! Form::open(['url' => '/album/create']) !!}     
				<div class="form-group">
					<label for="name">Band Id</label>
					{!! Form::text('band_id','',['class'=>'form-control','id'=>'name']) !!}
				</div>            	
				<div class="form-group">
					<label for="name">Name</label>
					{!! Form::text('name','',['class'=>'form-control','id'=>'name']) !!}
				</div>     
				<div class="form-group">
					<label for="recorded-date">Recorded Date</label>
					{!! Form::text('recorded_date','',['class'=>'form-control','id'=>'recorded-date']) !!}
				</div>    
				<div class="form-group">
					<label for="release-date">Release Date</label>
					{!! Form::text('release_date','',['class'=>'form-control','id'=>'release-date']) !!}
				</div>    				
				<div class="form-group">
					<label for="number-of-tracks">Number of Tracks</label>
					{!! Form::text('number_of_tracks','',['class'=>'form-control','id'=>'number-of-tracks']) !!}
				</div>    
				<div class="form-group">
					<label for="label">Label</label>
					{!! Form::text('label','',['class'=>'form-control','id'=>'label']) !!}
				</div>  
				<div class="form-group">
					<label for="producer">Producer</label>
					{!! Form::text('producer','',['class'=>'form-control','id'=>'producer']) !!}
				</div>  
				<div class="form-group">
					<label for="label">Genre</label>
					{!! Form::text('genre','',['class'=>'form-control','id'=>'genre']) !!}
				</div>  								  			                                                               
            	{!! Form::submit('Create',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}      	
        </div>
    </div>
</div>
@endsection
