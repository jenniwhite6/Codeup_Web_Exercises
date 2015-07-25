(function() {
	"use strict";

	var app = angular.module('angularBlog', []);

	app.controller("BlogController", ["$log", "$http", function($log, $http) {

		this.posts = [];

		this.newPost = {};

		var that = this;

        $http.get("/data/blog.json").success(function(data) {

            $log.info("Ajax request completed successfully!");
            $log.debug(data);

            that.posts = data;

            $log.info(that.posts);

	        that.newPost = function(postForm) {

	        	that.newPost = {};

	        	that.posts.push(that.newPost);

	        	console.log(postForm);
	        };

        }).error(function() {
            $log.error("Ajax request failed for some reason!");
        });


    }]);

})();