<?php
	layout();
	slot('content');
?>

<h1><?= $page->title() ?></h1>

<div class="comment">
  <?= $page->text()->kt() ?>
  <p><small>by <?= $page->user() ?></small></p>
</div>

<?php endslot() ?>


