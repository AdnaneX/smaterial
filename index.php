<!DOCTYPE html>
<html>
	<head>
		<title>Home | SMaterial</title>

		<link rel="stylesheet" href="/stylesheets/scss/smaterial.css"> <!-- Stylesheet -->

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="language" content="english">
		<meta http-equiv="language" content="EN-US">
		<meta name="author" content="Derkjan Super">
		<meta name="description" content="Home of SMaterial. The CSS framework based on Googles Material Design">
		<meta name="keyword" content="material design, smaterial, css framework">
		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
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
					<li>Components
						<ul>
							<li><a href="colors.php">Colors</a></li>
							<li><a href="typography.php">Typography</a></li>
							<li><a href="appbar.php">Appbar</a></li>
							<li><a href="sidenav.php">Sidenav</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</aside>

		<!--<script type="text/javascript" src="/js/SMaterial.min.js"></script> <!-- All JavaScript -->
	</body>
</html>