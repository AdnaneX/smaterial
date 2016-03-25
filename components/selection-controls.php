<?php
$title = 'Selection controls';
$description = 'Selection controls based on Google\'s Material Design';
$keywords = 'material design, smaterial, selection controls, checkbox, radiobutton, switch';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Selection controls usage</h2>

	<p class="sc-col sc-s12 sc-m6">
		You can choose a couple of selection controls.
		The selection controls you can choose from are listed below
	</p>
</section>

<section class="sc-row">
	<h3>Checkbox</h3>

	<p class="sc-col sc-s12 sc-m6">
		<input type="checkbox" id="example" class="sc-checkbox"> <label for="example">Example</label>
		<input type="checkbox" id="example3" class="sc-checkbox sc-checkbox-disabled"> <label for="example3">Example3</label>
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
&lt;input type="checkbox" id="example" class="sc-checkbox">
&lt;label for="example">Example&lt;/label>

&lt;input type="checkbox" id="example3" class="sc-checkbox sc-checkbox-disabled">
&lt;label for="example3">Example3&lt;/label>
		</pre>
	</code>
</section>

<section class="sc-row">
	<h2>Radiobuttons</h2>

	<p class="sc-col sc-s12 sc-m6">
		<input type="radio" id="example1" name="radio" class="sc-radio"> <label for="example1">Example1</label>
		<input type="radio" id="example2" name="radio" class="sc-radio"> <label for="example2">Example2</label>
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
&lt;input type="radio" id="example1" class="sc-radio">
&lt;label for="example1">Example1&lt;/label>
		</pre>
	</code>
</section>

<section class="sc-row">
	<h2>Switch</h2>

	<p class="sc-col sc-s12 sc-m6">
		<div class="sc-switch">
			<label>
				off
				<input type="checkbox">
				<span class="sc-lever"></span>
				on
			</label>
		</div>
	</p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';