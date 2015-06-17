<?php 

	$nouns = [
		'mug',
		'elephant',
		'printer',
		'chair',
		'thermos',
		'hat',
		'squirrel',
		'pencil',
		'cable',
		'machine',
		'pencil',
		'silverware',
		'doorway',
		'window',
	];

	$adjectives = [
		'didactic',
		'fastidious',
		'prolific',
		'luminous',
		'obtuse',
		'quiescent',
		'serpentine',
		'turbulent',
		'awesome',
		'zealous',

	];

	$randomAdj = $adjectives[array_rand($adjectives)];
	$randomNoun = $nouns[array_rand($nouns)];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Server Name Gen</title>
	<link rel='stylesheet' href='/css/server-name-gen.css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
</head>

<body>

	<main class='wrap'>
		<h1>Welcome to:</h1>
		<h2 class='title'>Random Server Generator</h2>
		<h3><span class='parens'>{</span> <?php echo $randomAdj . ' ' . $randomNoun ?> <span class='parens'>}</span></h3>
		<a class='button' href='javascript:location.reload(true)'>New one, please!</a>
	</main>	

</body>
</html>