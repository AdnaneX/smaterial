<?php
$title = 'SCSS Functions';
$description = 'SCSS functions to help you make styling easier';
$keywords = 'material design, smaterial, SCSS functions';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>SCSS functions</h2>

	<p class="sc-col sc-s12 sc-m6">
		You can use the following functions in your SCSS.
		The functions should help you create SCSS easier
	</p>
</section>

<section class="sc-row">
	<h3>remCalc()</h3>

	<p class="sc-col sc-s12 sc-m6">
		You can use the function remCalc() to convert <code>px</code> into <code>rem</code>.
		The variable <code>$font-size-initial</code> which can be found in <code>_settings.scss</code> is used to calculate the rem value.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
height: remCalc(16px);
margin: remCalc(-16px);
		</pre>
	</code>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';