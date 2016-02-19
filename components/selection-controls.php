<?php
$title = 'Selection controls';
$description = 'Selection controls based on Googles Material Design';
$keywords = 'material design, smaterial, selection controls, checkbox, radiobutton, switch';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Selection controls usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		You can choose a couple of selection controls.
		The selection controls you can choose from are listed below
	</p>
</section>

<section class="sm-row">
	<h3>Checkbox</h3>

	<p class="sm-col sm-s12 sm-m6">
		<input type="checkbox" id="example" class="sm-checkbox"> <label for="example">Example</label>
		<input type="checkbox" id="example3" class="sm-checkbox sm-checkbox-disabled"> <label for="example3">Example3</label>
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;input type="checkbox" id="example" class="sm-checkbox">
&lt;label for="example">Example&lt;/label>

&lt;input type="checkbox" id="example3" class="sm-checkbox sm-checkbox-disabled">
&lt;label for="example3">Example3&lt;/label>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h2>Radiobuttons</h2>

	<p class="sm-col sm-s12 sm-m6">
		<input type="radio" id="example1" name="radio" class="sm-radio"> <label for="example1">Example1</label>
		<input type="radio" id="example2" name="radio" class="sm-radio"> <label for="example2">Example2</label>
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;input type="radio" id="example1" class="sm-radio">
&lt;label for="example1">Example1&lt;/label>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h2>Switch</h2>

	<p class="sm-col sm-s12 sm-m6">
		<div class="sm-switch">
			<label>
				off
				<input type="checkbox">
				<span class="sm-lever"></span>
				on
			</label>
		</div>
	</p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';