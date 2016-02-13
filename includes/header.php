<!DOCTYPE html>
<html>
	<head>
		<title><?= $title; ?> | SMaterial</title>

		<link rel="stylesheet" href="/stylesheets/scss/smaterial.css"> <!-- Stylesheet -->
		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="language" content="english">
		<meta http-equiv="language" content="EN-US">
		<meta name="author" content="Derkjan Super">
		<meta name="description" content="<?= $description; ?>">
		<meta name="keyword" content="<?= $keywords; ?>">
	</head>

	<body>
	<header class="sm-appbar">
		<div class="sm-appbar-nav">
			<a href="#" id="sm-nav-button" data-sm-trigger="sm-sidenav"><i class="material-icons">menu</i></a>
		</div>

		<div class="sm-appbar-title">
			<h1><?= $title; ?></h1>
		</div>

		<div class="sm-appbar-actions">
			<div class="sm-appbar-search">
				<a href="#"><i class="material-icons">search</i></a>

				<form action="" method="post">
					<input type="search" name="search">
				</form>
			</div>
		</div>

		<div class="sm-appbar-menu">
			<a href="#" id="sm-menu-button" class="sm-dropdown" data-sm-trigger="sm-nav-more"><i class="material-icons">more_vert</i></a>

			<ul id="sm-nav-more">
				<li>Example</li>
			</ul>
		</div>
	</header>

	<aside id="sm-sidenav" class="sm-sidenav sm-sidenav-left sm-sidenav-left-floating">
		<nav>
			<ul>
				<li class="sm-sidenav-drawer">
					<figure class="sm-sidenav-drawer-img">
						<img alt="SMaterial thumbnail" src="/images/SMaterial-icon.jpg">
					</figure>

					<div class="sm-sidenav-drawer-info">
						<div class="sm-sidenav-drawer-name">
							John Doe
						</div>

						<div class="sm-sidenav-drawer-email">
							johndoe@gmail.com
						</div>
					</div>

					<div class="sm-sidenav-drawer-button">
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
						<li><a href="/components/sidenav.php">Sidenav</a></li>
						<li><a href="/components/appbar.php">Appbar</a></li>
						<li><a href="/components/buttons.php">Buttons</a></li>
						<li><a href="/components/cards.php">Cards</a></li>
						<li><a href="/components/chips.php">Chips</a></li>
						<li><a href="/components/tables.php">Tables</a></li>
					</ul>
				</li>

				<!--
				<li class="sm-sidenav-footer">
					<div class="addthis_sharing_toolbox"></div>
				</li>
				-->
			</ul>
		</nav>
	</aside>
	<main>