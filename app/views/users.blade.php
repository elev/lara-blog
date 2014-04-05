@extends('layout')

@section('content')
	<div class="container">
		<h2>Users</h2>
		<ul class="list-group col-sm-4">
			@foreach($users as $user)
				<li class="list-group-item"><a href="user/user{{$user->id}}">{{$user->name}}</a></li>
			@endforeach
		</ul>
	</div>
@stop