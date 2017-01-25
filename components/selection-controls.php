<?php
$title = 'Selection controls';
$description = 'Selection controls based on Google\'s Material Design. Selection controls are checkboxes, radio buttons and switches';
$keywords = 'selection controls, checkbox, radio button, switch';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row" xmlns="http://www.w3.org/1999/html">
	<h2 class="sc-col sc-xs4 sc-s12">Selection controls usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can choose a couple of selection controls.
		The selection controls you can choose from are listed below
	</p>
</section>

<section class="sc-row" id="checkbox">
	<h3 class="sc-col sc-xs4 sc-s12">Checkbox</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		Checkboxes are used when a user has multiple options. If there is only 1 option a <a href="#switch">switch</a> is recommended.
		Checkboxes can be used on their own so there is no need to add a label.
		To use the material checkboxes all you need to do is add the class <code class="language-css">.sc-checkbox</code>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<input type="checkbox" class="sc-checkbox" id="test"><label for="test">Test</label>
		<input type="checkbox" class="sc-checkbox" id="test1" checked><label for="test1">Test1</label>
		<input type="checkbox" class="sc-checkbox" id="test2" disabled><label for="test2">Test2</label>
		<input type="checkbox" class="sc-checkbox" id="test3" disabled checked><label for="test3">Test3</label>
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;input type="checkbox" class="sc-checkbox" id="test">&lt;/label>&lt;label for="test">Test&lt;/label>
&lt;input type="checkbox" class="sc-checkbox" id="test1" checked>&lt;/label>&lt;label for="test1">Test1&lt;/label>
&lt;input type="checkbox" class="sc-checkbox" id="test2" disabled>&lt;/label>&lt;label for="test2">Test2&lt;/label>
&lt;input type="checkbox" class="sc-checkbox" id="test3" disabled checked>&lt;/label>&lt;label for="test3">Test3&lt;/label>
		</code>
	</pre>
</section>

<section class="sc-row" id="radio">
	<h2 class="sc-col sc-xs4 sc-s12">Radio buttons</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can use the radio buttons without the use of an additional class.
		However to support other browsers you need to add an additional class <code class="language-css">.sc-radio</code>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<input type="radio" id="test4" name="radio" class="sc-radio"><label for="test4">Test4</label>
		<input type="radio" id="test5" name="radio" class="sc-radio" checked><label for="test5">Test5</label>
		<input type="radio" id="example2" name="radio" class="sc-radio" disabled><label for="example2">Example2</label>
		<input type="radio" id="example4" name="radio" class="sc-radio" disabled checked><label for="example4">Example4</label>
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;input type="radio" id="test4" name="radio" class="sc-radio">&lt;label for="test4">Test4&lt;/label>
&lt;input type="radio" id="test5" name="radio" class="sc-radio" checked>&lt;label for="test5">Test5&lt;/label>
&lt;input type="radio" id="example2" name="radio" class="sc-radio" disabled>&lt;label for="example2">Example2&lt;/label>
&lt;input type="radio" id="example4" name="radio" class="sc-radio" disabled checked>&lt;label for="example4">Example4</label>
		</code>
	</pre>
</section>

<section class="sc-row" id="switch">
	<h2 class="sc-col sc-xs4 sc-s12">Switch</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The switch is usually used when there is only a need for 1 <a href="#checkbox">checkbox</a>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<div class="sc-switch">
			<label>
				off
				<input type="checkbox">
				<span class="sc-lever"></span>
				on
			</label>
		</div>
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<div class="sc-switch">
			<label>
				off
				<input type="checkbox" disabled>
				<span class="sc-lever"></span>
				on
			</label>
		</div>
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-switch">
  &lt;label>
    off
    &lt;input type="checkbox">
    &lt;span class="sc-lever">&lt;/span>
    on
  &lt;/label>
&lt;/div>

&lt;div class="sc-switch">
  &lt;label>
    off
    &lt;input type="checkbox" disabled>
    &lt;span class="sc-lever">&lt;/span>
    on
  &lt;/label>
&lt;/div>
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';