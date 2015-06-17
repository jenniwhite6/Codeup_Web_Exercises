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

	<style>

		html {
			font-size: 16px;
		}

		body {
			background-color: gray;
			color: white;
			text-align: center;
		}

		h1 {
			margin-top: 10rem;
			font-size: 3rem;
		}

		table {
			background-color: rgb(171, 166, 203);
			padding: 2rem;
			width: 80%;
			margin: 3rem auto;
			text-align: center;
			border-radius: 2rem;
		}

		th {
			font-size: 2rem;
			text-shadow: .1rem .1rem black;
		}

		td {
			padding: 1rem;
			font-size: 1.5rem;
			border-radius: 1rem;
		}

		tr:nth-child(2) > td:nth-child(2):hover {
			background-color: teal;
		}

		tr:nth-child(2) > td:nth-child(3):hover {
			background-color: turquoise;
		}

		tr:nth-child(2) > td:nth-child(4):hover {
			background-color: blue;
		}
		tr:nth-child(2) > td:nth-child(5):hover {
			background-color: red;
		}
	</style>

</head>
<body>

	<h1>&#9835; These are a few of my favorite things &#9835;</h1>

	<table>
	
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

