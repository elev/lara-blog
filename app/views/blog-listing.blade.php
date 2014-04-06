@extends('layout')

@section('content')
	<div class="container">
		
		<div class="blog-header">
			<h2 class="blog-title">Blog Entries</h2>
			<p class="lead blog-description">These are blog listings</p>
		</div> <!--/.blog-header-->
		<div class="row">
			<div class="col-sm-8 blog-main">

				@foreach($blogs as $blog)
					<div class="blog-post">
						<h3 class="blog-post-title">{{$blog->name}}</h3>
						<p>{{$blog->content}}</p>
						<hr>
					</div>
				@endforeach

			</div><!--/.blog-main-->
		</div><!--/.row-->
	</div><!--/.container-->
@stop