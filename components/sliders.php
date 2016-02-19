<?php
$title = 'Slider';
$description = 'Slider based on Googles Material Design';
$keywords = 'material design, smaterial, slider';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Slider usage</h2>

	<p class="sm-col sm-s12 sm-m6">

	</p>

	<p class="sm-col sm-s12 sm-m6">
		<input type="range" class="sm-slider">

		<input type="range" class="sm-slider sm-slider-disabled">
	</p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';