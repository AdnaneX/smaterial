<?php
$title = 'Grid lists';
$description = 'Grid lists based on Google\'s Material Design';
$keywords = 'grid lists';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Grid lists usage</h2>

	<div class="sc-grid">
		<img src="/images/album-example.jpg">
		<div class="sc-grid-header sc-grid-single">Single line</div>
	</div>

	<div class="sc-grid">
		<img src="/images/album-example.jpg">
		<div class="sc-grid-footer sc-grid-two">
			<div class="sc-first-large">2 Line large</div>
			<div class="sc-second">Example</div>
		</div>
	</div>

	<div class="sc-grid">
		<img src="/images/album-example.jpg">
		<div class="sc-grid-footer sc-grid-two">
			<div class="sc-first-small">2 Line small</div>
			<div class="sc-second">Example</div>
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';