"use strict";

var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

console.log(color);

var favorite = 'blue'; 

var message;

if (color == 'red') {	
	message = color + ' is the color of pepperonis.';
} else if (color == 'orange') {
	message = color + ' is the color of oranges.';
} else if (color == 'yellow') {
	message = color + ' is da color of da sun, yo.';
} else if (color == 'green') {
	message = color + ' is the color of Codeup.';
} else if (color == 'blue') {
	message = color + ' is the color of the ocean.';
} else {
	message = 'I do not know anything by that color.';
}

message = message.charAt(0).toUpperCase() + message.slice(1);

console.log(message);

var message = (favorite == color) ? "Yay! That's my favorite color!" : "Not my favorite color.";

console.log(message);
