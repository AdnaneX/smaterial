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
			<a href="#" id="sm-nav-button"><i class="material-icons">menu</i></a>
		</div>

		<div class="sm-appbar-title">
			<h1>Home</h1>
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

	<aside>
		<nav id="sm-sidenav" class="sm-sidenav sm-sidenav-left sm-sidenav-left-floating sm-sidenav-dropdown">
			<ul>
				<li class="sm-sidenav-drawer">
					<div class="sm-sidenav-drawer-img">
						<img alt="thumbnail" src="/images/thumb.jpg">
					</div>

					<div class="sm-sidenav-drawer-info">
						<div class="sm-sidenav-drawer-name">
							John Doe
						</div>

						<div class="sm-sidenav-drawer-email">
							johndoe@gmail.com
						</div>

						<div class="sm-sidenav-drawer-button">
							<i class="material-icons">arrow_drop_up</i>
						</div>
					</div>
				</li>
				<li><a href="/"><i class="material-icons">home</i> Home</a></li>
				<li class="sm-sidenav-dropdown">Style <i class="material-icons sm-right">expand_less</i>
					<ul>
						<li><a href="/style/color.php">Color</a></li>
						<li><a href="/style/typography.php">Typography</a></li>
					</ul>
				</li>
				<li class="sm-sidenav-subheader">Example</li>
				<li class="sm-sidenav-divider"></li>
			</ul>
		</nav>
	</aside>

	<main>