
'user strict';
 
 /* blog controller */
 var blogApp = angular.module('blogApp', [], function($interpolateProvider){
 	$interpolateProvider.startSymbol('<%');
 	$interpolateProvider.endSymbol('%>');
 });

 blogApp.controller('BlogListCtrl', function($scope, $http) {
	$http.get('get-blogs').success(function(data){
		$scope.blogs = data;
	});
$scope.header = "These are blog posts";
$scope.orderProp = 'created_at';
});