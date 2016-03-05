<!DOCTYPE html>
<html>
	<head>
		<title><?= $title; ?> | SMaterial</title>

		<link rel="stylesheet" href="/stylesheets/scss/smaterial.css">
		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="language" content="EN">
		<meta name="author" content="SMaterial">
		<meta name="description" content="<?= $description; ?>">
		<meta name="keyword" content="<?= $keywords; ?>">

		<meta name="theme-color" content="#2196F3">
		<meta name="msapplication-navbutton-color" content="#2196F3">
		<meta name="apple-mobile-web-app-status-bar-style" content="#2196F3">
	</head>

	<body>
		<header class="sm-appbar">
			<div class="sm-appbar-nav">
				<a href="#" id="sm-nav-button" data-sm-trigger="sm-sidenav"><i class="material-icons sm-ripple">menu</i></a>
			</div>

			<div class="sm-appbar-title">
				<h1><?= $title; ?></h1>
			</div>

			<div class="sm-appbar-actions">
				<div class="sm-search-input">
					<a href="#" class="sm-ripple sm-search-trigger"><i class="material-icons">search</i></a>

					<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
						<input type="search" name="search">
					</form>
				</div>
			</div>

			<div class="sm-appbar-menu">
				<a href="#" class="sm-nav-more sm-ripple" data-sm-trigger="sm-nav-more"><i class="material-icons">more_vert</i></a>

				<ul class="sm-appbar-menu-more" id="sm-nav-more">
					<li>Example</li>
				</ul>
			</div>
		</header>

		<aside id="sm-sidenav" class="sm-sidenav sm-sidenav-left sm-sidenav-left-floating">
			<nav>
				<ul>
					<li class="sm-sidenav-profile">
						<figure class="sm-sidenav-profile-img">
							<img alt="SMaterial thumbnail" src="/images/SMaterial-icon.jpg">
						</figure>

						<div class="sm-sidenav-profile-info">
							<div class="sm-sidenav-profile-name">
								John Doe
							</div>

							<div class="sm-sidenav-profile-email">
								johndoe@gmail.com
							</div>
						</div>

						<div class="sm-sidenav-profile-button">
							<a href="#"><i class="material-icons">arrow_drop_up</i></a>
						</div>
					</li>
					<li><a href="/"><i class="material-icons">home</i> Home</a></li>
					<li class="sm-sidenav-dropdown">Style <i class="material-icons sm-right">expand_less</i>
						<ul>
							<li><a href="/style/color.php">Color</a></li>
							<li><a href="/style/icons.php">Icons</a></li>
							<li><a href="/style/typography.php">Typography</a></li>
							<li><a href="/style/shadow.php">Elevation and shadows</a></li>
						</ul>
					</li>
					<li class="sm-sidenav-dropdown">Components <i class="material-icons sm-right">expand_less</i>
						<ul>
							<li><a href="/components/appbar.php">Appbar</a></li>
							<li><a href="/components/bottom-sheet.php">Bottom sheet</a></li>
							<li><a href="/components/buttons.php">Buttons</a></li>
							<li><a href="/components/cards.php">Cards</a></li>
							<li><a href="/components/chips.php">Chips</a></li>
							<li><a href="/components/dialogs.php">Dialogs</a></li>
							<li><a href="/components/pickers.php">Pickers</a></li>
							<li><a href="/components/progress-activity.php">Progress & activity</a></li>
							<li><a href="/components/selection-controls.php">Selection controls</a></li>
							<li><a href="/components/sidenav.php">Sidenav</a></li>
							<li><a href="/components/sliders.php">Slider</a></li>
							<li><a href="/components/snackbars-toasts.php">Snackbar & toasts</a></li>
							<li><a href="/components/steppers.php">Steppers</a></li>
							<li><a href="/components/tables.php">Tables</a></li>
							<li><a href="/components/tabs.php">Tabs</a></li>
							<li><a href="/components/textfields.php">Text fields</a></li>
							<li><a href="/components/tooltips.php">Tooltips</a></li>
						</ul>
					</li>
					<li class="sm-sidenav-dropdown">Resources <i class="material-icons sm-right">expand_less</i>
						<ul>
							<li><a href="/resources/notifications.php">Notifications</a></li>
							<li><a href="/resources/templates.php">Templates</a></li>
							<li><a href="/resources/links.php">Links</a></li>
						</ul>
					</li>
					<li><a href="/showroom.php">Showroom</a></li>
					<li class="sm-no-hover">
						<div class="addthis_sharing_toolbox"></div>
					</li>
				</ul>
			</nav>
		</aside>

		<main>