<?php
$title = 'Text fields';
$description = 'Tables based on Googles Material Design';
$keywords = 'material design, smaterial, text fields, input, select, textarea, autocomplete';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Text fields</h2>

	<p class="sm-col sm-s12 sm-m6">
		There are numerous text fields you can use.
		The textfields and the options you can use are listed below.
	</p>
</section>

<section class="sm-row">
	<h3>Input text</h3>

	<div class="sm-col sm-s12 sm-m3">
		<div class="sm-input">
			<input type="text" id="example">
			<label for="example">Example</label>
		</div>

		<div class="sm-input">
			<input type="password" id="example2">
			<label for="example2">Password</label>
		</div>

		<div class="sm-input">
			<input type="number" id="example3">
			<label for="example3">Number</label>
		</div>

		<div class="sm-input">
			<input type="email" id="example4">
			<label for="example4">Email</label>
		</div>
	</div>

	<div class="sm-col sm-s12 sm-m3">
		<div class="sm-input">
			<input type="search" id="example5">
			<label for="example5">Search</label>
		</div>

		<div class="sm-input">
			<input type="tel" id="example6">
			<label for="example6">Telephone</label>
		</div>

		<div class="sm-input">
			<input type="url" id="example7">
			<label for="example7">Url</label>
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';