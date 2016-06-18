<?php
// Set to true this way no unnecessary code is loaded while testing
define( 'TEST', false );
$file = str_replace( '.php', '', $_SERVER['PHP_SELF'] );
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $title; ?> | SMaterial</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="/stylesheets/scss/smaterial.css">
		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="language" content="EN">
		<meta name="author" content="Derkjan Super">
		<meta name="description" content="<?= $description; ?>">
		<meta name="keyword" content="<?= $keywords; ?>">

		<meta name="theme-color" content="#2196F3">
		<meta name="msapplication-navbutton-color" content="#2196F3">
		<meta name="apple-mobile-web-app-status-bar-style" content="#2196F3">
	</head>

	<body>
		<header class="sc-appbar">
			<div class="sc-appbar-nav">
				<a href="#" id="sc-nav-button" data-sc-trigger="sc-sidenav"><i class="material-icons sc-ripple">menu</i></a>
			</div>

			<div class="sc-appbar-title">
				<h1><?= $title; ?></h1>
			</div>

			<div class="sc-appbar-actions">
				<div class="sc-search-input">
					<a href="#" class="sc-ripple sc-search-trigger"><i class="material-icons">search</i></a>

					<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
						<input type="search" name="search">
					</form>
				</div>
			</div>

			<div class="sc-appbar-menu">
				<a href="#" class="sc-nav-more sc-ripple" data-sc-trigger="sc-nav-more"><i class="material-icons">more_vert</i></a>

				<ul class="sc-appbar-menu-more" id="sc-nav-more">
					<li>Example</li>
				</ul>
			</div>
		</header>

		<?php
		if( $_SERVER['PHP_SELF'] === '/components/tabs.php' ) {
		?>
			<div class="sc-tabs">
				<a href="#" class="sc-tab-icon"><i class="material-icons">home</i> <span>Tab 1</span></a>
				<a href="#" class="sc-tab-icon"><i class="material-icons">home</i> <span>Tab 2</span></a>
				<a href="#" class="sc-tab-icon"><i class="material-icons">home</i> <span>Tab 3</span></a>
				<a href="#" class="sc-tab-icon"><i class="material-icons">home</i> <span>Tab 4</span></a>
			</div>
		<?php
		}
		?>

		<aside id="sc-sidenav" class="sc-sidenav sc-sidenav-left sc-sidenav-left-floating">
			<nav>
				<ul>
					<li class="sc-sidenav-profile">
						<figure class="sc-sidenav-profile-img">
							<img alt="SMaterial thumbnail" src="/images/SMaterial-icon.jpg">
						</figure>

						<div class="sc-sidenav-profile-info">
							<div class="sc-sidenav-profile-name">
								John Doe
							</div>

							<div class="sc-sidenav-profile-email">
								johndoe&#64;gmail.com
							</div>
						</div>

						<div class="sc-sidenav-profile-button">
							<a href="#"><i class="material-icons">arrow_drop_up</i></a>
						</div>
					</li>
					<li><a href="/"><i class="material-icons" <?php echo ( $file == '/index' ? 'class="sc-active"' : '' ); ?>>home</i> Home</a></li>
					<li><a href="/getting-started.php" <?php echo ( $file == '/getting-started' ? 'class="sc-active"' : '' ); ?>><i class="material-icons">flag</i> Getting started</a></li>
					<li class="sc-sidenav-dropdown">Style <i class="material-icons sc-right">expand_less</i>
						<ul>
							<li><a href="/style/color.php" <?php echo ( $file == '/style/color' ? 'class="sc-active"' : '' ); ?>>Color</a></li>
							<li><a href="/style/icons.php" <?php echo ( $file == '/style/icons' ? 'class="sc-active"' : '' ); ?>>Icons</a></li>
							<li><a href="/style/typography.php" <?php echo ( $file == '/style/typography' ? 'class="sc-active"' : '' ); ?>>Typography</a></li>
							<li><a href="/style/shadow.php" <?php echo ( $file == '/style/shadow' ? 'class="sc-active"' : '' ); ?>>Elevation and shadows</a></li>
							<li><a href="/style/functions.php" <?php echo ( $file == '/style/functions' ? 'class="sc-active"' : '' ); ?>>Functions</a></li>
							<li><a href="/style/mixins.php" <?php echo ( $file == '/style/mixins' ? 'class="sc-active"' : '' ); ?>>Mixins</a></li>
							<li><a href="/style/grid.php" <?php echo ( $file == '/style/grid' ? 'class="sc-active"' : '' ); ?>>Grid</a></li>
						</ul>
					</li>
					<li class="sc-sidenav-dropdown">Components <i class="material-icons sc-right">expand_less</i>
						<ul>
							<li><a href="/components/appbar.php" <?php echo ( $file == '/components/appbar' ? 'class="sc-active"' : '' ); ?>>Appbar</a></li>
							<li><a href="/components/bottom-navigation.php" <?php echo ( $file == '/components/bottom-navigation' ? 'class="sc-active"' : '' ); ?>>Bottom navigation</a></li>
							<li><a href="/components/bottom-sheet.php" <?php echo ( $file == '/components/bottom-sheet' ? 'class="sc-active"' : '' ); ?>>Bottom sheet</a></li>
							<li><a href="/components/buttons.php" <?php echo ( $file == '/components/buttons' ? 'class="sc-active"' : '' ); ?>>Buttons</a></li>
							<li><a href="/components/cards.php" <?php echo ( $file == '/components/cards' ? 'class="sc-active"' : '' ); ?>>Cards</a></li>
							<li><a href="/components/chips.php" <?php echo ( $file == '/components/chips' ? 'class="sc-active"' : '' ); ?>>Chips</a></li>
							<li><a href="/components/dialogs.php" <?php echo ( $file == '/components/dialogs' ? 'class="sc-active"' : '' ); ?>>Dialogs</a></li>
							<li><a href="/components/pickers.php" <?php echo ( $file == '/components/pickers' ? 'class="sc-active"' : '' ); ?>>Pickers</a></li>
							<li><a href="/components/progress-activity.php" <?php echo ( $file == '/components/progress-activity' ? 'class="sc-active"' : '' ); ?>>Progress &amp; activity</a></li>
							<li><a href="/components/selection-controls.php" <?php echo ( $file == '/components/selection-controls' ? 'class="sc-active"' : '' ); ?>>Selection controls</a></li>
							<li><a href="/components/sidenav.php" <?php echo ( $file == '/components/sidenav' ? 'class="sc-active"' : '' ); ?>>Sidenav</a></li>
							<li><a href="/components/sliders.php" <?php echo ( $file == '/components/sliders' ? 'class="sc-active"' : '' ); ?>>Slider</a></li>
							<li><a href="/components/snackbars-toasts.php" <?php echo ( $file == '/components/snackbars-toasts' ? 'class="sc-active"' : '' ); ?>>Snackbar &amp; toasts</a></li>
							<li><a href="/components/steppers.php" <?php echo ( $file == '/components/steppers' ? 'class="sc-active"' : '' ); ?>>Steppers</a></li>
							<li><a href="/components/tables.php" <?php echo ( $file == '/components/tables' ? 'class="sc-active"' : '' ); ?>>Tables</a></li>
							<li><a href="/components/tabs.php" <?php echo ( $file == '/components/tabs' ? 'class="sc-active"' : '' ); ?>>Tabs</a></li>
							<li><a href="/components/textfields.php" <?php echo ( $file == '/components/textfields' ? 'class="sc-active"' : '' ); ?>>Text fields</a></li>
							<li><a href="/components/tooltips.php" <?php echo ( $file == '/components/tooltips' ? 'class="sc-active"' : '' ); ?>>Tooltips</a></li>
						</ul>
					</li>
					<li class="sc-sidenav-dropdown">Resources <i class="material-icons sc-right">expand_less</i>
						<ul>
							<li><a href="/resources/notifications.php" <?php echo ( $file == '/resources/notifications' ? 'class="sc-active"' : '' ); ?>>Notifications</a></li>
							<li><a href="/resources/templates.php" <?php echo ( $file == '/resources/templates' ? 'class="sc-active"' : '' ); ?>>Templates</a></li>
							<li><a href="/resources/links.php" <?php echo ( $file == '/resources/links' ? 'class="sc-active"' : '' ); ?>>Links</a></li>
						</ul>
					</li>
					<li><a href="/showroom.php" <?php echo ( $file == '/showroom' ? 'class="sc-active"' : '' ); ?>><i class="material-icons">photo_album</i> Showroom</a></li>
					<li class="sc-no-hover">
					</li>
				</ul>
			</nav>
		</aside>

		<main>