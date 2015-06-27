(function() {
	"use strict";
		var app = angular.module('modelTest', []);

		app.controller('ExampleController', function() {
			
			this.users = [];

			this.newUser = {};

			this.saveUser = function() {
				// push newUser to users array + reset newUser
				this.users.push(this.newUser);
				this.newUser = {};
			};
		});

})();