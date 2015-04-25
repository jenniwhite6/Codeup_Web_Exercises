// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
"use strict";

var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

console.log(color);

var favorite = 'blue'; // TODO: change this to your favorite color from the list

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

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
