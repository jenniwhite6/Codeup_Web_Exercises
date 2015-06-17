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
	
		<?php foreach ($favorites as $category => $item) { ?>
			<tr>
				<th>
					<?php echo $category?>
				</th>
				<td> 
					<?php echo $item[0]?>
				</td>
				<td> 
					<?php echo $item[1]?>
				</td>
				<td> 
					<?php echo $item[2]?>
				</td>
				<td> 
					<?php echo $item[3]?>
				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>

