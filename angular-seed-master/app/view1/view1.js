'use strict';

angular.module('myApp.view1', ['ngRoute'])

.config(['$routeProvider', function ($routeProvider) {
  $routeProvider.when('/view1', {
    templateUrl: 'view1/view1.html',
    controller: 'View1Ctrl'
  });
}])

.controller('View1Ctrl', function ($scope, $http) {
	$http({method:"GET", url: "http://localhost/HomePersonare/api/get_recent_posts/"})
		.success(function (data, headers){
			$scope.data = data;
			$scope.titlePost = $scope.data.post.title;
		})
		.error(function (data){
			$scope.data = "Request failed!";
			console.log(data);
		});
});