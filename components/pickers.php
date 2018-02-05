<?php
$title = 'Pickers';
$description = 'Date and time pickers based on Google\'s Material Design. Time picker will adjust to user preference (12 / 24 hour notation)';
$keywords = 'date picker, time picker';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">Pickers usage</h2>

	<p class="col xs4 m6">
		Pickers are still in development.
	</p>
</section>

<section class="row">
	<h3 class="col xs4">Date picker</h3>

	<div class="col xs4 m3">
		<div class="picker date-picker">
			<div class="picker-titlebar">
				<div class="picker-titlebar-year"><?php echo date('Y'); ?></div>
				<div class="picker-titlebar-date"><?php echo date('D, M j'); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="row">
	<h3>Time picker</h3>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';