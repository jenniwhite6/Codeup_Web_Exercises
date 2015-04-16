<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Favorite Meal EVER</title>
</head>
<body>
	<header>
		<h1>Larry Don's Famous Chicken Tomatillo Tacos</h1>
	</header>
	<main>
		<section>
			<h2>Ingredients</h2>
			<ol>
				<li>Shredded chicken</li>
				<li>Tomatillos</li>
				<li>Corn tortillas</li>
				<li>Goat cheese crumbles</li>
				<li>Guac</li>
				<li>A little magic</li>
				<li>A lotta love</li>
			</ol>
		</section>
		<section>
			<form method="GET" action="/favorite_meal.php">
				<header>
					<h3>We'd love to hear your suggestions!</h3>
					<p>If you could add one ingredient, which ingredient would you add?</p>
				</header>
				<p>
					<label for="text"></label>
					<input id="text" type="text" name="suggestion" placeholder="Enter ingredient here">
				</p>
				<p>
					<label for="submit"></label>
					<input id="submit" type="submit" value="Send">
				</p>
			</form>
		</section>
	</main>
	<aside>
		<h3>Other foods I like</h3>
		<ul>
			<li><a href="#" title="Salad at chipotle">Salad @ Chipotle</a></li>
			<li><a href="#" title="Barbecue chicken sandwich">BBQ Chicken Sandwich</a></li>
			<li><a href="#" title="Sweet potato and avocado">SP & A</a></li>
		</ul>
	</aside>
<?php
	var_dump($_GET);
?>
</body>
</html>