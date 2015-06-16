<?php

	$animals = [
		
		'platypus',
		'sloth',
		'anteater',
		'ferret',
		'rabbit',
		'schnauzer',
	];

	foreach($animals as $animal) {
		echo "Old Mac OSX had a farm, EIEIO! And on that farm she had an $animal! EIEIO!";
	}

	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	foreach($things as $thing) {

		if (is_array($thing)) {
			echo implode(', ', $thing);
		} else {
			echo($thing);
		}	

		if (is_string($thing)) {
			echo(" is a String!");
		}

		if (is_bool($thing)) {
			echo(" is a Boolean!");
		}

		if (is_float($thing)) {
			var_dump(" is a Float (a.k.a. double)!");
		}

		if (is_int($thing)) {
			var_dump(" is an Integer!");
		}

		if (is_null($thing)) {
			var_dump("NULL!");
		}

		if (is_numeric($thing)) {
			var_dump(" is a Numeric!");
		}

		if (is_scalar($thing)) {
			var_dump(" is a Scalar!");
		}

		if (is_array($thing)) {
			echo("ARRAY FTW!");
		}
	}
?>