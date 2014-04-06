@extends('layout')

@section('content')
	<div class="container">
		{{ Form::open(array('action' => 'UserController@processNew', 'class' => 'form-horizontal')) }}
			<h2>Create A New User</h2>
			<div class="form-group">
				{{ Form::label('name', 'Name', array('class'=> 'col-sm-2 control-label')) }}
				<div class="col-sm-5">
					{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }}
				</div>
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email', array('class'=> 'col-sm-2 control-label')) }} 
				<div class="col-sm-5">
					{{ Form::text('email', null, array('class' => 'form-control', 'placeholder'=> 'email@example.com')) }}
				</div>
			</div>
			
			<div class="form-group">
				{{ Form::label('password', 'Password', array('class'=> 'col-sm-2 control-label')) }}
				<div class="col-sm-5">
					{{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'Password')) }}
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-5">
					{{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
				</div>
			</div>
		
		{{ Form::close() }}
	</div><!--/.container-->
@stop