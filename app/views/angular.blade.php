@extends('layout')

@section('content')
		<div class="container" ng-controller="BlogListCtrl" ng-app="blogApp">
			<div class="blog-header">
				<h2 class="blog-title">Blog Entries</h2>
				<p class="lead blog-description">These are blog listings</p>
			</div> <!--/.blog-header-->

			Search: <input ng-model="query">
			Sort by:
			<select ng-model="orderProp">
				<option value="name">Alphabetical</option>
				<option value="created_at">Newest</option>
			</select> 

			<div class="row">
				<div class="col-sm-8 blog-main">
					<div class="blog-post" ng-repeat="blog in blogs | filter:query | orderBy:orderProp">
						<h3 class="blog-post-title"><%blog.name%></h3>
						<p><%blog.content%></p>
						<hr>
					</div><!--/.blog-post-->
				</div><!--/.blog-main-->
			</div><!--/.row-->
		</div>
@stop