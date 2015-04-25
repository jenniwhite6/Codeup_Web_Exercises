// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var message;
console.log(color);

/* Passing a value (the value of var color) to the switch
Checks the value of color against the different cases*/
switch (color) {
	case 'red':
		message = color + ' is the color of pepperonis.';
		break;
	case 'orange':
		message = color + ' is the color of oranges.';
		break;
	case 'yellow':
		message = color + ' is da color of da sun, yo.';
		break;
	case 'green':
		message = color + ' is the color of Codeup.';
		break;
	case 'blue':
		message = color + ' is the color of the ocean.';
		break;
	default:
		message = 'I do not know anything that is ' + color + '.';
}

message = message.charAt(0).toUpperCase() + message.slice(1);

console.log(message);

// todo: create a case statement that will handle every color except indigo and violet
// todo: when a color is encountered log a message that tells the color, and an object of that color
//       example: Blue is the color of the sky.

// todo: create a default case that will catch indigo and violet
// todo: for the default case, log: I do not know anything by that color.