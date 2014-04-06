<html>
	<head>
		{{ HTML::style('packages/bootstrap-3.1.1-dist/css/bootstrap.css') }}
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						{{ HTML::link('blogs', 'Home', array('class' => 'navbar-brand')) }}
					</div><!--/.navbar-header-->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>{{ HTML::link('users', 'Users') }}</li>
							<li>{{ HTML::link('user/create', 'Create Users') }}</li>
							<li>{{ HTML::link('blogs', 'Blogs') }}</li>
							<li>{{ HTML::link('blog/create', 'Create Blog Posts') }}</li>
							<li>{{ HTML::link('login', 'Login') }}</li>
						</ul>
					</div><!--/.navbar-collapse-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-->
		</div><!--/.container-->

		<div class="container">
			<div class="jumbotron">
				<div class="container">
					<h1>Laravel Test Blog</h1>
					<p>This is a test for Laravel and Bootstrap.
						We are using bootstrap for minimal modern styles and 
						using laravel for data abstraction, authentication, and routing.
					</p>
				</div><!--/.container-->
			</div><!--/.jumbotron-->
		</div><!--/.container-->
		@yield('content')

		{{ HTML::script('http://code.jquery.com/jquery-1.10.1.min.js') }}
		{{ HTML::script('packages/bootstrap-3.1.1-dist/js/bootstrap.js') }}
	</body>
</html>