<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/style.css">
	<link rel="icon" sizes="32x32" href="/favicon.png">
	<link rel="icon" type="image/svg+xml" href="/assets/svg/favicon.svg">
	<style type='text/css'>
		@media (prefers-reduced-motion: no-preference) {
			@view-transition {
				navigation: auto;
			}

			::view-transition-old(root),
			::view-transition-new(root) {
				animation-duration: 0.2s;
			}
		}
	</style>
	<?= $slots->styles() ?>
</head>

<?php 
	$isPanelUser = $kirby->user() && 
		$kirby->user()->role()->permissions()->for('access', 'panel'); 
?>

<body>
	<header>
		<nav>
			<a href='<?= $site->url() ?>'>
				<?= $site->title()->value() ?>
			</a>
			<?php 
				snippet(
					'components/menu', 
					[ 'items' => $site->mainmenu()->toStructure() ]
				); 
			?>
		</nav>
	</header>
	<main>
		<?= $slots->content() ?>
	</main>
	<?= $slots->scripts() ?>
	<footer>
		<?php 
			snippet(
				'components/menu', 
				[ 'items' => $site->socialmenu()->toStructure() ]
			); 
		?>
		<p>&copy; <?= date("Y") ?> <?= $site->title()->value() ?></p>
	</footer>

	<?php if ($isPanelUser): ?>
	<div class='kirby-admin-bar'>
		<details>
			<summary>Raw fields</summary>
			<table>
			<tbody>
			<?php foreach ($page->content()->fields() as $key => $value): ?>
			<tr>
				<th><?= $key ?></th>
				<td style='white-space: pre-wrap;'><?= $value ?></td>
			</tr>
			<?php endforeach ?>
			</tbody>
			</table>
		</details>
		<ul role=list>
			<?php if($isPanelUser): ?>
			<li><a href='<?= $page->panel()->url() ?>'>Edit page</a></li>
			<li><a href='<?= $site->panel()->url() ?>'>Panel</a></li>
			<?php endif ?>
			<li>
				<a href='/panel/logout'>Log out</a>
			</li>
		</ul>
	</div>
	<?php endif ?>
</body>
</html>