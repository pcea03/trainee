<!-- File: src/Template/Articles/view.ctp -->
<?php // print_r($article); ?>
<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>