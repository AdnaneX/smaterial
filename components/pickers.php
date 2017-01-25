<?php
$title = 'Pickers';
$description = 'Date and time pickers based on Google\'s Material Design. Time picker will adjust to user preference (12 / 24 hour notation)';
$keywords = 'date picker, time picker';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Pickers usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		Pickers are still in development.
	</p>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Date picker</h3>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-picker sc-date-picker">
			<div class="sc-picker-titlebar">
				<div class="sc-picker-titlebar-year"><?php echo date('Y'); ?></div>
				<div class="sc-picker-titlebar-date"><?php echo date('D, M j'); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="sc-row">
	<h3>Time picker</h3>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';