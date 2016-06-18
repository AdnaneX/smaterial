<?php
$title = 'Getting started';
$description = 'How to get started with SMaterial';
$keywords = 'material design, smaterial, getting started, starting, how to use';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Getting started</h2>

	<p class="sc-col sc-s12">
		Smaterial comes in 2 different packages you can choose from.
		You can make a choice depending on your skill levels and what you would like to do with SMaterial.
		Both packages include the <a href="https://bower.io/" target="_blank">bower</a>.json file to manage other files required.
	</p>

	<div class="sc-col sc-s12 sc-m6">
		<h4>CSS</h4>

		<p class="sc-col sc-s12">
			When unfamilier with SCSS it's recommended to use this package.
			<a href="/smaterial-css.zip" class="sc-raised-button">CSS Download <i class="material-icons sc-right">file_download</i></a>
		</p>
	</div>

	<div class="sc-col sc-s12 sc-m6">
		<h4>SCSS</h4>

		<p class="sc-col sc-s12">
			The SCSS version allows you to fully customize the way SMaterial looks.
			You can also change which files are included and which are not. This package also includes Gulp to compress JavaScript an SCSS.
			<a href="/smaterial-scss.zip" class="sc-raised-button">SCSS Download <i class="material-icons sc-right">file_download</i></a>
		</p>
	</div>

	<div class="sc-col sc-s12 sc-m6">
		<h4>Bower</h4>

		<p class="sc-col scs12">
			Do you prefer to use bower? Now you can. You can simply run the following command.
		</p>
	</div>
</section>

<section class="sc-row">
	<h2>Setup</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can get SMaterial up and running in a couple of different ways.

	</p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';

