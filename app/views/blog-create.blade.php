@extends('layout')

@section('content')
	<div class="container">
		<h2>Create A New Blog Entry</h2>
		{{ Form::open(array('action' => 'BlogController@processNew', 'class' => 'form-horizontal')) }}
		<div class="form-group">
			{{ Form::label('name', 'Name', array('class' =>'col-sm-2 control-label')) }}
			<div class="col-sm-5">
				{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('content', 'Content', array('class'=>'col-sm-2 control-label')) }}
			<div class="col-sm-5">	
				{{ Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Content')) }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-5">
				{{ Form::submit('submit', array('class'=> 'btn btn-primary')) }}
			</div>
		</div>
		{{ Form::close() }}
	</div><!--/.container-->
@stop