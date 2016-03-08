<?php
$title = 'Dialogs';
$description = 'Dialogs based on Google\'s Material Design';
$keywords = 'material design, smaterial, dialogs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Dialog usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		Click on the buttons to trigger a dialog.
	</p>
</section>

<section class="sm-row">
	<h3>Default dialog</h3>

	<p class="sm-col sm-s12 sm-m6">
		<button type="button" class="sm-raised-button sm-dialog-trigger sm-ripple" data-sm-trigger="default">Default</button>
	</p>

	<div class="sm-col sm-s12 sm-m6">

	</div>

	<div class="sm-dialog" id="default">
		<div class="sm-dialog-container">
			<div class="sm-dialog-title">
				Example of default dialog
			</div>

			<div class="sm-dialog-content">
				Put dialog content here.
			</div>
		</div>

		<div class="sm-dialog-actions">
			<button type="button" data-ripple-color="#4CAF50" data-sm-trigger="default" class="sm-flat-button sm-ripple sm-dialog-trigger">Agree</button>
			<button type="button" data-ripple-color="#F44336" data-sm-trigger="default" class="sm-flat-button sm-ripple sm-dialog-trigger">Disagree</button>
		</div>
	</div>
</section>

<section class="sm-row">
	<h3>Fullscreen dialog</h3>

	<p class="sm-col sm-s12 sm-m6">
		<button type="button" class="sm-raised-button sm-dialog-trigger sm-ripple" data-sm-trigger="fullscreen">Full screen</button>
	</p>

	<div class="sm-dialog sm-dialog-fullscreen" id="fullscreen">
		<div class="sm-dialog-container">
			<div class="sm-dialog-title">
				Example of full screen dialog
			</div>

			<div class="sm-dialog-content">
				Put dialog content here.
			</div>
		</div>

		<div class="sm-dialog-actions">
			<button type="button" data-ripple-color="#4CAF50" data-sm-trigger="fullscreen" class="sm-flat-button sm-ripple sm-dialog-trigger">Agree</button>
			<button type="button" data-ripple-color="#F44336" data-sm-trigger="fullscreen" class="sm-flat-button sm-ripple sm-dialog-trigger">Disagree</button>
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';