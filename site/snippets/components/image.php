<?php 
/* 
	Thumbs and srcsets are defined in `site/config/config.php`.
*/
?>

<picture>
	<source srcset='<?= $image->srcset('avif') ?>' type='image/avif'>
	<source srcset='<?= $image->srcset('webp') ?>' type='image/webp'>
	<img 
		srcset='<?= $image->srcset() ?>'
		sizes='100vw'
		src="<?= $image->thumb('full')->url() ?>" 
		alt="<?= $image->alt() ?>" 
		style="--focus: <?= $image->focus()->value() ?>"
		width="<?= $image->thumb('full')->width() ?>"
		height="<?= $image->thumb('full')->height() ?>"
	>
</picture>