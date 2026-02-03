<?php snippet('layouts/base', slots: true) ?>
	
<?php slot('content') ?>

<h1><?= $page->title()->value() ?></h1>

<?php endslot('content') ?>

<?php endsnippet('layouts/base') ?>