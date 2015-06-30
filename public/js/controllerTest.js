(function(){
	"use strict";

	var app = angular.module('controllerTest', []);

	app.controller('CartController', function() {
		
		this.items = [];

		this.newItem = {};

		this.addNewItem = function(itemForm) {

			console.log(itemForm);

			this.items.push(this.newItem);

			this.newItem = {
				'shipping': 1.25,
			};

			itemForm.$setPristine();
			itemForm.$setUntouched();
		};
		
		this.getSubTotal = function() {
		    var subTotal = 0;
		    for(var i = 0; i < this.items.length; i++){
		        var item = this.items[i];
		        subTotal += (item.quantity * item.price);
		    }
		    return subTotal;
		};

		this.getTotal = function() {
		    var total = 0;
		    for(var i = 0; i < this.items.length; i++){
		        var item = this.items[i];
		        total += (item.quantity * item.price * 1.0825 + 1.25);
		    }
		    return total;
		};

	});

})();