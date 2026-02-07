<ul class='languages'>
<?php foreach($kirby->languages() as $language): ?>
	<li<?php e($kirby->language() == $language, ' class="active"') ?>>
		<a 
			href="<?= $page->urlForLanguage(
				$language->code(), 
				[ 'params' => params() ]
			) ?>" 
			hreflang="<?= $language->code() ?>"
		>
			<?= $language->code() ?>
		</a>
	</li>
<?php endforeach ?>
</ul>