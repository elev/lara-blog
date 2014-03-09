@extends('layout')

@section('content')
	@foreach($blogs as $blog)
		<p>{{$blog->name}}</p>
		<p>{{$blog->content}}</p>
	@endforeach
@stop