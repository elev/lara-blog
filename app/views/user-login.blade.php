@extends('layout')

@section('content')
	<div class="container">
		{{ Form::open(array('url' => 'login-check', 'class' => 'form-horizontal')) }}

			<div class="form-group">
				{{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-5">
					{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'email@example.com')) }}
				</div><!--/.col-sm-5 -->
			</div><!--/.form-group-->

			  <div class="form-group">
			  	{{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }} 
			    <div class="col-sm-5">
			    	{{ Form::password('password',  array('class' => 'form-control', 'placeholder' => 'password')) }}
			    </div><!--/.col-sm-5 -->
			  </div><!--/.form-group-->

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-5">
					{{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
				</div> <!--/.col-sm-5 -->
			</div><!--/.form-group-->

		{{ Form::close() }}
	</div><!--/.container -->
@stop