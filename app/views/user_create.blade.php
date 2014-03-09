@extends('layout')

@section('content')
	{{ Form::open(array('action' => 'UserController@processNew')) }}
	<div class="block">	{{ Form::label('name', 'Name') }} {{ Form::text('name') }}</div>
	<div class="block">	{{ Form::label('email', 'Email') }} {{ Form::text('email') }}</div>
	<div class="block">	{{ Form::label('password', 'Password') }} {{ Form::password('password') }}</div>
	<div class="block">	{{ Form::submit('submit') }}</div>
	{{ Form::close() }}
@stop