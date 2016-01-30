<?php
$title = 'Typography';
$description = 'Typography of material design';
$keywords = 'material design, smaterial, typography, roboto, noto, font';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sm-row">
	<h2>Typography usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		There are specific settings for Roboto and Noto fonts.
		Because of this you can take a couple of steps to get a specific font and settings or leav it as is to use Roboto.
		If you don't like Roboto or Noto fear not you can just overwrite the settings in your custom css.
	</p>

	<ol class="sm-col sm-s12 sm-m6">
		<li>In _settings.scss edit the $country-code;</li>
		<li>If you're not seeing any changes you might need to turn on the Noto font;</li>
		<li>In _font.scss you can uncomment the required font;</li>
	</ol>
</section>


<section class="sm-row">
	<h3>Roboto</h3>

	<p class="sm-col sm-s12 sm-m6">
		The Roboto font is default for Material Design.
		The font is included in the framework and is turned on as the default font.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		The Roboto font is available in a couple of font weights: 100 (<em>thin</em>),
		300 (<em>light</em>), 400 (<em>regular</em>), 500 (<em>medium</em>), 700 (<em>bold</em>) and 900 (<em>black</em>).
	</p>

	<p class="sm-col sm-s12 sm-m6">
		<img width="100%" src="http://material-design.storage.googleapis.com/publish/material_v_4/material_ext_publish/0Bx4BSt6jniD7SW9CUzR4MnRpOTg/style_typography_roboto1.png" alt="Roboto font example">
	</p>
</section>

<section class="sm-row">
	<h3>Noto</h3>

	<p class="sm-col sm-s12">
		The Noto font is a special font which is capable of handling special characters.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		<img width="100%" src="http://material-design.storage.googleapis.com/publish/material_v_4/material_ext_publish/0B_udO5B8pzrzcWkwSW11bkstZEU/style_typography_noto1.png" alt="Noto font example">
	</p>
</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';