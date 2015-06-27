(function(){
	"use strict";

	var app = angular.module('controllerTest', []);

	app.controller('CartController', function() {
		
		this.items = [];

		this.newItem = {
			'quantity': 1,
		};

		this.addNewItem = function(itemForm) {

			this.items.push(this.newItem);

			this.newItem = {
				'quantity': 1,
			};
		};

	});

})();