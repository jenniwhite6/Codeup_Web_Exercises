<!DOCTYPE html>
<html>
<head>
	<title>T-T-T-TEMPLATE</title>
	<link rel='stylesheet' href='/css/normalize.css'>
	<link rel='stylesheet' href='/css/template-php.css'>
</head>
<body>

	<?php include 'nav.php'; ?>
	<?php include 'header.php'; ?>

	<main class='main-wrap'>

		<?php include 'template-data.php'; ?>

		<?php foreach ($posts as $postArray => $post): ?>
	 		<?php include 'post.php'; ?>
		<?php endforeach; ?>

	</main>

	<?php include 'footer.php' ?>

</body>
</html>