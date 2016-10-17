<?php
$title = 'SCSS Functions';
$description = 'SCSS functions to help you make styling easier. Functions are mainly used for repetitive tasks.';
$keywords = 'SCSS functions, calculate px to rem';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>SCSS functions</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can use the following functions in your SCSS.
		The functions should help you create SCSS easier.
		The use of functions also helps to prevent user errors.
	</p>
</section>

<section class="sc-row">
	<h3>rem-calc()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can use the function rem-calc() to convert <code class="language-html">px</code> into <code class="language-html">rem</code>.
		The variable <code class="language-html">$font-size</code> which can be found in <code class="language-html">_settings.scss</code> is used to calculate the rem value.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
		<code>
height: rem-calc(16px);
margin: rem-calc(-16px);
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>color()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can use the color function to find a accent color.
		The first parameter is the color of which you would like to find an accent color of.
		The second parameter is the accent you want to get.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
		<code>
color($blue, 200) // Returns #90CAF9
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';