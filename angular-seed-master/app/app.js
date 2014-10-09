'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
  'ngRoute',
  'myApp.view1',
  'myApp.view2',
  'myApp.version'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.otherwise({redirectTo: '/view1'});
  $routeProvider.otherwise({redirectTo: '/view2'});
}])
.factory('BlogFactory', ['$http','$q', function($http,$q){
	var blog = {},
	baseUrl = 'http://localhost/';

	blog.sendApi = function(link,method){
		var deferred = $q.defer();
		$http({method: method, url: link}).
		    success(function(data, status, headers, config) {
		      deferred.resolve(data);
		    }).
		    error(function(data, status, headers, config) {
		      deferred.reject("An error occured while fetching items");
		    });
		return deferred.promise;
	};
	
	blog.getRecentPosts = function(){
		var deferred = $q.defer();
		$http({method: 'GET', url: baseUrl + '?json=get_recent_posts'}).
		    success(function(data, status, headers, config) {
		    	console.log(data);
		      deferred.resolve(data);
		    }).
		    error(function(data, status, headers, config) {
		      deferred.reject("An error occured while fetching items");
		    });
		return deferred.promise;
	};

	blog.getPost = function(id){
		var deferred = $q.defer();
		$http({method: 'GET', url: baseUrl + '?json=get_post&post_id='+id}).
		    success(function(data, status, headers, config) {
		      deferred.resolve(data);
		    }).
		    error(function(data, status, headers, config) {
		      deferred.reject("An error occured while fetching items");
		    });
		return deferred.promise;
	};
	

	blog.getCategoryPosts = function(slug){
		var deferred = $q.defer();
		$http({method: 'GET', url: baseUrl + '?json=get_category_posts&slug='+slug}).
		    success(function(data, status, headers, config) {
		      deferred.resolve(data);
		    }).
		    error(function(data, status, headers, config) {
		      deferred.reject("An error occured while fetching items");
		    });
		return deferred.promise;
	};

	blog.getCategories = function(){
		var deferred = $q.defer();
		$http({method: 'GET', url: baseUrl + '?json=get_categories'}).
		    success(function(data, status, headers, config) {
		      deferred.resolve(data);
		    }).
		    error(function(data, status, headers, config) {
		      deferred.reject("An error occured while fetching items");
		    });
		return deferred.promise;
	};

	blog.getCategoriesByType = function(child){
		var deferred = $q.defer(),
		apiUrl = baseUrl + '?json=categories.get_categories_types';

		if( child === false ){
			apiUrl += '&father=1';
		}

		$http({method: 'GET', url: apiUrl}).
		    success(function(data, status, headers, config) {
		      deferred.resolve(data);
		    }).
		    error(function(data, status, headers, config) {
		      deferred.reject("An error occured while fetching items");
		    });
		return deferred.promise;
	};

	blog.getAuthors = function(){
		return blog.sendApi(baseUrl + '?json=authors.get_authors','GET');
	};

	blog.getAuthorById = function(id){
		return blog.sendApi(baseUrl + '?json=authors.get_author_id&author_id='+id,'GET');
	};

	blog.getCategoriesAuthors = function(slug){
	};		

	return blog;
}]);
