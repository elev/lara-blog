@extends('layout')

@section('content')
	{{ Form::open(array('action' => 'BlogController@processNew')) }}
	<div class="block">	{{ Form::label('name', 'Name') }} {{ Form::text('name') }}</div>
	<div class="block">	{{ Form::label('content', 'Content') }} {{ Form::textarea('content') }}</div>
	<div class="block">	{{ Form::submit('submit') }}</div>
	{{ Form::close() }}
@stop