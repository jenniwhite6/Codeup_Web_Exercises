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
	<title>Fave things</title>
</head>
<body>

	<h1>&#9835; These are a few of my favorite things &#9835;</h1>

	<table style="width:80%; text-align: center">
	
		<?php foreach ($favorites as $category => $item): ?>
			<tr>
				<th>
					<?= $category?>
				</th>
				<td> 
					<?= $item[0]?>
				</td>
				<td> 
					<?= $item[1]?>
				</td>
				<td> 
					<?= $item[2]?>
				</td>
				<td> 
					<?= $item[3]?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>

