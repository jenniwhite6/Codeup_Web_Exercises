<?php 

// FUNCTIONS

	function randomArrayValue($array) 
	{
		$index = array_rand($array);
		return $array[$index];
	}

// DATA

	include 'server-name-data.php';

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

		<h3>
			<span class='curly'>{</span> 
			<?= randomArrayValue($adjectives) . ' ' . randomArrayValue($nouns) ?> 
			<span class='curly'>}</span>
		</h3>

		<a class='button' href='javascript:location.reload(true)'>New one, please!</a>

	</main>	

</body>
</html>