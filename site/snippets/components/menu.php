<?php if($items->isNotEmpty()):?>
<ul role=list>
<?php foreach($items as $item): 
	$p = $item->link()->toPage();
?>
	<?php if (!$p || $p->isPublished() || $kirby->user()): ?>
	<li>
		<a
			<?php e($p && $p->isOpen(), ' class="active"') ?> 
			href="<?= $item->link()->toUrl() ?>"
		>
			<?php if ($item->title()->value()): ?>
				<?= $item->title()->value() ?>
			<?php elseif ($p && $p->title()): ?>
				<?= $p->title() ?>	
			<?php endif ?>
		</a>
	</li>
	<?php endif ?>
<?php endforeach ?>
</ul>
<?php endif ?>