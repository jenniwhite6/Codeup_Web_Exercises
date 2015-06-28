(function(){
	"use strict";

	var app = angular.module('controllerTest', []);

	app.controller('CartController', function() {
		
		this.items = [];

		this.newItem = {
			'quantity': 0,
		};

		this.addNewItem = function(itemForm) {

			this.items.push(this.newItem);

			this.newItem = {
				'quantity': 1,
				'shipping': 1.25,
			};
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