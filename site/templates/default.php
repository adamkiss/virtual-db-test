<?php
	layout();
	slot('content');
?>

<h1><?= $page->title() ?></h1>

<?= $page->text()->kt() ?>

<?php endslot() ?>
