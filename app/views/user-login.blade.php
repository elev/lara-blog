@extends('layout')

@section('content')
	{{ Form::open(array('url' => 'login-check')) }}
		<div class="block">	{{ Form::label('email', 'Email') }} {{ Form::text('email') }}</div>
		<div class="block">	{{ Form::label('password', 'Password') }} {{ Form::password('password') }}</div>
		<div class="block">	{{ Form::submit('submit') }}</div>
	{{ Form::close() }}
@stop