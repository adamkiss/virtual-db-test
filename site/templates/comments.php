<?php
	layout();
	slot('content');
?>

<h1><?= $page->title() ?></h1>

<ul class="comments">
    <?php foreach ($page->children() as $comment): ?>
    <li>
      <a href="<?= $comment->url() ?>">
        <?= $comment->text() ?> <small>by <?= $comment->user() ?></small>
      </a>
    </li>
    <?php endforeach ?>
</ul>

<?php endslot() ?>
