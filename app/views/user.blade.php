@extends('layout');

@section('content');
	<div class="container">
	<p>{{$user->name}}</p>
	<p>{{$user->email}}</p>
	</div><!--/.container-->
@stop