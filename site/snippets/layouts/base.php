<?php 
	
	$isPanelUser = $kirby->user() && 
		$kirby->user()->role()->permissions()->for('access', 'panel'); 

	if($site->maintenance()->toBool()) { 
		snippet('layouts/maintenance'); 
		exit();
	} 
?>
<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $page->title() ?> · <?= $site->title() ?></title>
	<link rel="stylesheet" type="text/css" href="<?= url('assets/css/style.css') ?>">
	<link rel="icon" sizes="32x32" href="<?= url('favicon.png') ?>">
	<link rel="icon" type="image/svg+xml" href="<?= url('assets/svg/favicon.svg') ?>">
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

<body>
	<a id='skip-to-content' href='#main'><?= t('theme.skiptocontent') ?></a>
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

			<?php snippet('components/language-switcher'); ?>
		</nav>
	</header>
	<main id='main' tabindex='-1'>
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
	<?php $user_language = $kirby->user()->language(); ?>
	<div class='kirby-admin-bar'>
		<ul role=list>
			<li>
				<a href='<?= $page->panel()->url() ?>'>
					<?= t(
						'theme.admin.editpage', 
						'theme.admin.editpage',
						$user_language 
					) ?>
				</a>
			</li>
			<li>
				<a href='<?= $site->panel()->url() ?>'>
					<?= t(
						'theme.admin.panel',
						'theme.admin.panel',
						$user_language 
					) ?>
				</a>
			</li>
			<li>
				<a href='<?= url('panel/logout') ?>'>
					<?= t(
						'theme.admin.logout',
						'theme.admin.logout',
						$user_language 
					) ?>
				</a>
			</li>
		</ul>
		<details>
			<summary>
				<?= t(
					'theme.admin.rawfields',
					'theme.admin.rawfields',
					$user_language
				) ?>	
			</summary>
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
	</div>
	<?php endif ?>
</body>
</html>