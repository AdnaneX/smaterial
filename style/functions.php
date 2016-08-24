<?php
$title = 'SCSS Functions';
$description = 'SCSS functions to help you make styling easier';
$keywords = 'material design, smaterial, SCSS functions';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
	<section class="sc-row">
		<h2>SCSS functions</h2>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			You can use the following functions in your SCSS.
			The functions should help you create SCSS easier
		</p>
	</section>

	<section class="sc-row">
		<h3>rem-calc()</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			You can use the function rem-calc() to convert <code class="language-html">px</code> into <code
				class="language-html">rem</code>.
			The variable <code class="language-html">$font-size-initial</code> which can be found in <code
				class="language-html">_settings.scss</code> is used to calculate the rem value.
		</p>

		<pre class="language-css sc-col sc-s12 sc-m6">
		<code>
height: rem-calc(16px);
margin: rem-calc(-16px);
		</code>
	</pre>
	</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';