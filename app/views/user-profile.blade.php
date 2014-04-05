@extends('layout')

@section('content')
	<div class="container">	
		<h3>User Information</h3>
		<ul class="list-group col-sm-5">
			<li class="list-group-item"><span class="col-sm-3">Name:</span>{{$user->name}}</li>
			<li class="list-group-item"><span class="col-sm-3">Email:</span>{{$user->email}}</li>
			<li class="list-group-item"><span class="col-sm-3">Created:</span>{{$user->created_at}}</li>
		</ul>
	</div> <!-- ./container-->
@stop