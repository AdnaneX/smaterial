<?php
$title = 'Dialogs';
$description = 'Dialogs based on Google\'s Material Design';
$keywords = 'material design, smaterial, dialogs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
	<section class="sc-row">
		<h2>Dialog usage</h2>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			Click on the buttons to trigger a dialog.
		</p>
	</section>

	<section class="sc-row">
		<h3>Default dialog</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			<button type="button" class="sc-raised-button sc-dialog-trigger sc-ripple" data-sc-trigger="default">Default</button>
		</p>

		<div class="sc-col sc-xs4 sc-s12 sc-m6">

		</div>

		<div class="sc-dialog" id="default">
			<div class="sc-dialog-container">
				<div class="sc-dialog-title">
					Example of default dialog
				</div>

				<div class="sc-dialog-content">
					Put dialog content here.
				</div>
			</div>

			<div class="sc-dialog-actions">
				<button type="button" data-ripple-color="#4CAF50" data-sc-trigger="default" class="sc-flat-button sc-ripple sc-dialog-trigger">Agree</button>
				<button type="button" data-ripple-color="#F44336" data-sc-trigger="default" class="sc-flat-button sc-ripple sc-dialog-trigger">Disagree</button>
			</div>
		</div>
	</section>

	<section class="sc-row">
		<h3>Fullscreen dialog</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			<button type="button" class="sc-raised-button sc-dialog-trigger sc-ripple" data-sc-trigger="fullscreen">Full screen</button>
		</p>

		<div class="sc-dialog sc-dialog-fullscreen" id="fullscreen">
			<div class="sc-dialog-container">
				<div class="sc-dialog-title">
					Example of full screen dialog
				</div>

				<div class="sc-dialog-content">
					Put dialog content here.
				</div>
			</div>

			<div class="sc-dialog-actions">
				<button type="button" data-ripple-color="#4CAF50" data-sc-trigger="fullscreen" class="sc-flat-button sc-ripple sc-dialog-trigger">Agree</button>
				<button type="button" data-ripple-color="#F44336" data-sc-trigger="fullscreen" class="sc-flat-button sc-ripple sc-dialog-trigger">Disagree</button>
			</div>
		</div>
	</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';