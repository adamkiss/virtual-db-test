<!DOCTYPE html>
<html lang="sk" class="no-js">
<?php snippet('_assets'); ?>

<head>
	<?php snippet('layouts/head'); ?>
</head>

<body class="antialiased dark:bg-gray-900 dark:text-white">
	<div class="container">
		<nav>
			<a href="/">Home</a>
			<a href="/comments">Comments</a>
		</nav>
		<hr>
	<?php slot('content'); endslot(); ?>

	</div>
	<?= snippet('layouts/debug'); ?>
</body>
</html>
