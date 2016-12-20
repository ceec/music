@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

	        @if ($create) 
	        	<h1>Create Album</h1>
	        @else
	        	<h1>Editing Album: {{$album->name}}</h1>
	        @endif
      
			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			            @foreach ($errors->all() as $error)
			                {{ $error }}<br>
			            @endforeach
			    </div>
			@endif

			<?php
				print '<pre>';
				print_r($bands);
				print '</pre>';
			?>

        	{!! Form::open(['url' => '/album/create']) !!}     
				<div class="form-group">
					<label for="name">Band</label>
					{!! Form::select('band_id',$bands,$album->band_id,['class'=>'form-control','id'=>'name']) !!}

				</div>            	
				<div class="form-group">
					<label for="name">Name</label>
					{!! Form::text('name',$album->name,['class'=>'form-control','id'=>'name']) !!}
				</div>     
				<div class="form-group">
					<label for="recorded-date">Recorded Date</label>
					{!! Form::date('recorded_date',$album->recorded_date,['class'=>'form-control','id'=>'recorded-date']) !!}
				</div>    
				<div class="form-group">
					<label for="release-date">Release Date</label>
					{!! Form::date('release_date',$album->release_date,['class'=>'form-control','id'=>'release-date']) !!}
				</div>    				
				<div class="form-group">
					<label for="number-of-tracks">Number of Tracks</label>
					{!! Form::text('number_of_tracks',$album->number_of_tracks,['class'=>'form-control','id'=>'number-of-tracks']) !!}
				</div>    
				<div class="form-group">
					<label for="label">Label</label>
					{!! Form::text('label',$album->label,['class'=>'form-control','id'=>'label']) !!}
				</div>  
				<div class="form-group">
					<label for="producer">Producer</label>
					{!! Form::text('producer',$album->producer,['class'=>'form-control','id'=>'producer']) !!}
				</div>  
				<div class="form-group">
					<label for="genre">Genre</label>
					{!! Form::text('genre',$album->genre,['class'=>'form-control','id'=>'genre']) !!}
				</div>  								  			                                                               
            	{!! Form::submit('Create',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}      	
        </div>
    </div>
</div>
@endsection
