<?php

$favorites = [
	'Foods:' => [
		'Molten chocolate lava cake',
		'S\'mores',
		'Watermelon',
		'Bread. Muffins. Carbs'
	],
	'Colors:' => [
		'Teal',
		'Turquoise',
		'Cerulean',
		'Red'
	],
	'Places:' => [
		'Albuquerque',
		'Madrid',
		'SA, duh',
		'Taos'
	],
	'Smells:' => [
		'Freshly baked brownies',
		'Rain',
		'My dad\'s cooking',
		'BBQ'
	]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Fave things 2</title>

	<style>
		html {
			font-size: 16px;
		}

		div {
			float: left;
			margin-right: 1rem;
			width: 20%;
		}
	</style>
</head>
<body>

	<h1>&#9835; These are a few of my favorite things &#9835;</h1>

		<?php foreach ($favorites as $category => $item): ?>
			<div>
				<h3>
					<?= $category?>
				</h3>
				<p> 
					<?= $item[0]?>
				</p>
				<p> 
					<?= $item[1]?>
				</p>
				<p> 
					<?= $item[2]?>
				</p>
				<p> 
					<?= $item[3]?>
				</p>
			</div>
		<?php endforeach; ?>

</body>
</html>

