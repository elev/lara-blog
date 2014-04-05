<html>
	<head>
		{{ HTML::style('packages/bootstrap-3.1.1-dist/css/bootstrap.css') }}
	</head>
	<body>
		<h1>Laravel Quickstart</h1>

		@yield('content')

		{{ HTML::script('http://code.jquery.com/jquery-1.10.1.min.js') }}
		{{ HTML::script('packages/bootstrap-3.1.1-dist/js/bootstrap.js') }}
	</body>
</html>