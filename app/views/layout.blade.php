<html>
	<head>
		{{ HTML::style('packages/bootstrap-3.1.1-dist/css/bootstrap.css') }}
	</head>
	<body>
		<div class="jumbotron">
		      <div class="container">
		        <h1>Laravel Test Blog</h1>
		        <p>This is a test for Laravel and Bootstrap.
		        	We are using bootstrap for minimal modern styles and 
		        	using laravel for data abstraction, authentication, and routing.
		        </p>
<!-- 		        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
 -->		      </div>
		    </div>
		@yield('content')

		{{ HTML::script('http://code.jquery.com/jquery-1.10.1.min.js') }}
		{{ HTML::script('packages/bootstrap-3.1.1-dist/js/bootstrap.js') }}
	</body>
</html>