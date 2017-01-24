<?php
// Set to true this way no unnecessary code is loaded while testing
define( 'TEST', false );
$file = str_replace( '.php', '', $_SERVER['PHP_SELF'] );

$colors = array('smaterial' => array(
					'color' => '#00BCD4',
					'highlight' => '#00B8D4'
				),
				'style' => array(
					'color' => '#00897B',
					'highlight' => '#00BFA5'
				),
				'layout' => array(
					'color' => '#AD1457',
					'highlight' => '#C51162'
				),
				'components' => array(
					'color' => '#3949AB',
					'highlight' => '#304FFE'
				),
				'patterns' => array(
					'color' => '#FB8C00',
					'highlight' => '#FF6D00'
				),
				'resources' => array(
					'color' => '#039BE5',
					'highlight' => '#0091EA'
				)
);

if( $file == '/index' || $file == '/' ) {
	$folder = 'smaterial';
} else {
	$folder = explode( '/', $_SERVER['PHP_SELF'] )[1];
}
$color = $colors[$folder]['color'];
$highlight = $colors[$folder]['highlight'];

$keywords .= ', smaterial, css, scss, material design';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= $title; ?> | SMaterial</title>

		<link rel="stylesheet" href="/stylesheets/prism.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="/stylesheets/smaterial.css">

		<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="language" content="EN">
		<meta name="author" content="Derkjan Super">
		<meta name="description" content="<?= $description; ?>">
		<meta name="keyword" content="<?= $keywords; ?>">

		<meta property="og:type" content="article">
		<meta property="og:title" content="<?= $title; ?> | SMaterial">
		<meta property="og:site_name" content="SMaterial">
		<meta property="article:section" content="<?php echo $title.' - '.ucfirst($folder); ?>">

		<meta name="theme-color" content="<?php echo $color; ?>">
		<meta name="msapplication-navbutton-color" content="<?php echo $color; ?>">
		<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color; ?>">

		<style>
			.sc-appbar {
				background: <?php echo $color; ?>;
			}

			main h1, main h2, main h3, main h4, main h5, main h6, main a {
				color: <?php echo $color; ?>;
			}

			main a:hover {
				color: <?php echo $highlight; ?>;
			}

			.sc-drawer .sc-active, .sc-drawer a:hover, .sc-drawer a:hover .material-icons {
				color: <?php echo $color; ?> !important;
			}

			.sc-raised-button {
				color: white;
				background: <?php echo $color; ?>;
			}

			.sc-drawer-permanent-full-height .sc-drawer-header img {
				height: 100%;
			}
		</style>
	</head>

	<body>
		<header class="sc-appbar">
			<div class="sc-appbar-nav">
				<a href="#"><i class="material-icons sc-trigger" data-sc-trigger="sc-drawer">menu</i></a>
			</div>

			<div class="sc-appbar-title">
				<h1><?php echo '<span class="sc-xs-hidden sc-s-hidden">'.ucfirst( $folder ).' -</span> '.$title; ?></h1>
			</div>

			<div class="sc-appbar-actions">
				<a href="#" class="sc-ripple sc-search-trigger"><i class="material-icons">search</i></a>

				<div class="sc-search-input">
					<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="sc-single-input">
							<input type="search" name="search" id="search">
							<label for="search">Search</label>
						</div>
					</form>
				</div>
			</div>

			<div class="sc-appbar-menu">
				<a href="#" class="sc-nav-more sc-trigger" data-sc-trigger="sc-nav-more"><i class="material-icons">more_vert</i></a>

				<ul class="sc-appbar-menu-more" id="sc-nav-more">
					<li>Example</li>
				</ul>
			</div>
		</header>

		<?php
		if( $_SERVER['PHP_SELF'] === '/components/tabs.php' ) {
			?>
			<div class="sc-tabs">
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 1</span></a>
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 2</span></a>
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 3</span></a>
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 4</span></a>
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 5</span></a>
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 6</span></a>
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 7</span></a>
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 8</span></a>
				<a href="#" class="sc-tab-icon-text"><i class="material-icons">home</i><span>Example 9</span></a>
			</div>
			<?php
		}
		?>

		<aside id="sc-drawer" class="sc-drawer sc-drawer-permanent-full-height">
			<nav class="sc-drawer-container">
				<ul>
					<div class="sc-drawer-header">
						<img src="/images/logo.svg" alt="SMalterial logo">
					</div>
					<li class="sc-drawer-dropdown">SMaterial <i class="material-icons">expand_more</i>
						<ul>
							<li><a href="/" <?php echo ( $file == '/index' || $file == '/' ? 'class="sc-active"' : '' ); ?>>Introduction</a></li>
							<li><a href="/smaterial/getting-started.php" <?php echo ( $file == '/smaterial/getting-started' ? 'class="sc-active"' : '' ); ?>>Getting started</a></li>
							<li><a href="/smaterial/shadow.php" <?php echo ( $file == '/smaterial/shadow' ? 'class="sc-active"' : '' ); ?>>Elevation and shadows</a></li>
							<li><a href="/smaterial/news.php" <?php echo ( $file == '/smaterial/new' ? 'class="sc-active"' : '' ); ?>>What's new</a></li>
						</ul>
					</li>
					<li class="sc-drawer-dropdown">Style <i class="material-icons">expand_more</i>
						<ul>
							<li><a href="/style/color.php" <?php echo ( $file == '/style/color' ? 'class="sc-active"' : '' ); ?>>Color</a></li>
							<li><a href="/style/icons.php" <?php echo ( $file == '/style/icons' ? 'class="sc-active"' : '' ); ?>>Icons</a></li>
							<li><a href="/style/typography.php" <?php echo ( $file == '/style/typography' ? 'class="sc-active"' : '' ); ?>>Typography</a></li>
							<li><a href="/style/functions.php" <?php echo ( $file == '/style/functions' ? 'class="sc-active"' : '' ); ?>>Functions</a></li>
							<li><a href="/style/mixins.php" <?php echo ( $file == '/style/mixins' ? 'class="sc-active"' : '' ); ?>>Mixins</a></li>
						</ul>
					</li>
					<li class="sc-drawer-dropdown">Components <i class="material-icons">expand_more</i>
						<ul>
							<li><a href="/components/appbar.php" <?php echo ( $file == '/components/appbar' ? 'class="sc-active"' : '' ); ?>>Appbar</a></li>
							<li><a href="/components/bottom-navigation.php" <?php echo ( $file == '/components/bottom-navigation' ? 'class="sc-active"' : '' ); ?>>Bottom navigation</a></li>
							<li><a href="/components/bottom-sheet.php" <?php echo ( $file == '/components/bottom-sheet' ? 'class="sc-active"' : '' ); ?>>Bottom sheet</a></li>
							<li><a href="/components/buttons.php" <?php echo ( $file == '/components/buttons' ? 'class="sc-active"' : '' ); ?>>Buttons</a></li>
							<li><a href="/components/cards.php" <?php echo ( $file == '/components/cards' ? 'class="sc-active"' : '' ); ?>>Cards</a></li>
							<li><a href="/components/chips.php" <?php echo ( $file == '/components/chips' ? 'class="sc-active"' : '' ); ?>>Chips</a></li>
							<li><a href="/components/data-tables.php" <?php echo ( $file == '/components/data-tables' ? 'class="sc-active"' : '' ); ?>>Data tables</a></li>
							<li><a href="/components/dialogs.php" <?php echo ( $file == '/components/dialogs' ? 'class="sc-active"' : '' ); ?>>Dialogs</a></li>
							<li><a href="/components/expansion-panels.php" <?php echo ( $file == '/components/expansion-panels' ? 'class="sc-active"' : '' ); ?>>Expansion panels</a></li>
							<li><a href="/components/grid-lists.php" <?php echo ( $file == '/components/grid-lists' ? 'class="sc-active"' : '' ); ?>>Grid lists</a></li>
							<li><a href="/components/pickers.php" <?php echo ( $file == '/components/pickers' ? 'class="sc-active"' : '' ); ?>>Pickers</a></li>
							<li><a href="/components/progress-activity.php" <?php echo ( $file == '/components/progress-activity' ? 'class="sc-active"' : '' ); ?>>Progress &amp; activity</a></li>
							<li><a href="/components/selection-controls.php" <?php echo ( $file == '/components/selection-controls' ? 'class="sc-active"' : '' ); ?>>Selection controls</a></li>
							<li><a href="/components/sliders.php" <?php echo ( $file == '/components/sliders' ? 'class="sc-active"' : '' ); ?>>Slider</a></li>
							<li><a href="/components/snackbars-toasts.php" <?php echo ( $file == '/components/snackbars-toasts' ? 'class="sc-active"' : '' ); ?>>Snackbar &amp; toasts</a></li>
							<li><a href="/components/steppers.php" <?php echo ( $file == '/components/steppers' ? 'class="sc-active"' : '' ); ?>>Steppers</a></li>
							<li><a href="/components/tabs.php" <?php echo ( $file == '/components/tabs' ? 'class="sc-active"' : '' ); ?>>Tabs</a></li>
							<li><a href="/components/textfields.php" <?php echo ( $file == '/components/textfields' ? 'class="sc-active"' : '' ); ?>>Text fields</a></li>
							<li><a href="/components/tooltips.php" <?php echo ( $file == '/components/tooltips' ? 'class="sc-active"' : '' ); ?>>Tooltips</a></li>
						</ul>
					</li>
					<li class="sc-drawer-dropdown">Layout <i class="material-icons">expand_more</i>
						<ul>
							<li><a href="/layout/grid.php" <?php echo ( $file == '/layout/grid' ? 'class="sc-active"' : '' ); ?>>Responsive grid</a></li>
						</ul>
					</li>
					<li class="sc-drawer-dropdown">Patterns <i class="material-icons">expand_more</i>
						<ul>
							<li><a href="/patterns/navigation-drawer.php" <?php echo ( $file == '/patterns/navigation-drawer' ? 'class="sc-active"' : '' ); ?>>Navigation drawer</a></li>
							<li><a href="/patterns/notifications.php" <?php echo ( $file == '/patterns/notifications' ? 'class="sc-active"' : '' ); ?>>Notifications</a></li>
						</ul>
					</li>
					<li class="sc-drawer-dropdown">Resources <i class="material-icons">expand_more</i>
						<ul>
							<li><a href="/resources/templates.php" <?php echo ( $file == '/resources/templates' ? 'class="sc-active"' : '' ); ?>>Templates</a></li>
							<li><a href="/resources/links.php" <?php echo ( $file == '/resources/links' ? 'class="sc-active"' : '' ); ?>>Links</a></li>
							<li><a href="/resources/showroom.php" <?php echo ( $file == '/resources/showroom' ? 'class="sc-active"' : '' ); ?>>Showroom</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</aside>

		<main>