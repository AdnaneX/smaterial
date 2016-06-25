<?php
$title = 'Slider';
$description = 'Slider based on Google\'s Material Design';
$keywords = 'material design, smaterial, slider';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Slider usage</h2>

	<p class="sc-col sc-s12 sc-m6">
		The disabled styling can be activated in 2 ways.
		You can give the range the attribute <code class="language-html">disabled</code> and or you give
		it the class <code class="language-css">.sc-slider-disabled</code>.
	</p>

	<p class="sc-col sc-s12 sc-m6">
		<input type="range" class="sc-slider">

		<input type="range" disabled class="sc-slider sc-slider-disabled">
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;input type="range" class="sc-slider">

&lt;input type="range" disabled class="sc-slider sc-slider-disabled">
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';