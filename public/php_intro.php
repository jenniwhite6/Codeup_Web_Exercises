<?php

	$hiThere = "Welcome to PHP!" . PHP_EOL;

	echo $hiThere;

	$a = 10;
	$b = 20;
	$c = $a + $b . "</br>";

	echo $c . PHP_EOL;

	$firstName = 'Jen';
	$lastName = 'White';
	$address = '123 Any Street';

	echo "$firstName, $lastName, $address" . PHP_EOL;
	echo "{$firstName}{$lastName}{$address}" . PHP_EOL;
	echo "$firstName $lastName /n $address";

	$array = ['Jennifer', 'Taylor', 'White'];

	var_dump($array);

	echo("My name is $array[0] $array[1] $array[2] :)");

	$apollo = [
		'students' => [
			'Fernando',
			'Jenni',
			'Hector',
			'Claire',
			'Paula',
			'Hannah',
			'Josh',
			'Raul'
		],
		'languages' => [
			'CSS',
			'HTML',
			'Javascript'
		]
	];

	var_dump($apollo['students'][0]);
	var_dump($apollo['languages'][2]);
	
	$numberArray1 = [1, 2, 3, 4, 5];

	var_dump($numberArray1);
	print_r($numberArray1);

	$numberArray2 = array(1, 2, 3, 4, 5);

	var_dump($numberArray2);
	print_r($numberArray2);

	echo("</br>" . $numberArray1[3] . "</br>");

	$person1 = [
		'first_name' => 'J',
		'last_name' => 'White',
		'email' => 'jwow@awesome.com',
		'phone' => '111-1111'
	];

	$person2 = [
		'first_name' => 'H',
		'last_name' => 'Westberg',
		'email' => 'hbomb@awesome.com',
		'phone' => '222-2222'
	];

	$person3 = [
		'first_name' => 'C',
		'last_name' => 'Osburn',
		'email' => 'cdiddy@awesome.com',
		'phone' => '333-3333'
	];

	$peeps = [$person1, $person2, $person3];

	echo($person1['email']);

	var_dump($peeps);

?>

