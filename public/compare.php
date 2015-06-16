<?php

// array defining keys as single-letter strings a-d
$a = [
	'a' => 'A',
	'b' => 'B',
	'c' => 'C',
	'd' => 'D'
];

// echoes each index and value
foreach ($a as $lowerCase => $upperCase) {
	echo $lowerCase . PHP_EOL;
	echo $upperCase . PHP_EOL;
}

// echoes specific key/value pair within array
foreach ($a as $letter) {
	echo "Hello, I'm letter:$letter";
}

$students = array(
    array('name' => 'Virginia Potts', 'age' => 29),
    array('name' => 'Elon Musk', 'age' => 42),
    array('name' => 'Rasmus Lerdorf', 'age' => 45),
    array('name' => 'Marissa Mayer', 'age' => 38)
);

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "Student's $key is $value\n";
    }
}

?>