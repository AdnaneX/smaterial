<?php
$title = 'Slider';
$description = 'Slider based on Google\'s Material Design';
$keywords = 'material design, smaterial, slider';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Slider usage</h2>

	<p class="sc-col sc-s12 sc-m6">

	</p>

	<p class="sc-col sc-s12 sc-m6">
		<input type="range" class="sc-slider">

		<input type="range" class="sc-slider sc-slider-disabled">
	</p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';