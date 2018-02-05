<?php
$title = 'SCSS Functions';
$description = 'SCSS functions to help you make styling easier. Functions are mainly used for repetitive tasks.';
$keywords = 'SCSS functions, calculate px to rem';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">SCSS functions</h2>

	<p class="col xs4 m6">
		You can use the following functions in your SCSS.
		The functions should help you create SCSS easier.
		The use of functions also helps to prevent user errors.
	</p>
</section>

<section class="row">
	<h3 class="col xs4">rem-calc($px)</h3>

	<p class="col xs4 m6">
		You can use the function rem-calc() to convert <code class="language-html">px</code> into <code class="language-html">rem</code>.
		The variable <code class="language-html">$font-size</code> which can be found in <code class="language-html">_settings.scss</code> is used to calculate the rem value.
	</p>

	<pre class="language-css col xs4 s12 m6">
		<code>
height: rem-calc(16px);
margin: rem-calc(-16px);
		</code>
	</pre>
</section>

<section class="row">
    <h3 class="col xs4">em-calc($px)</h3>

    <p class="col xs4 m6">
        You can use the function em-calc() to convert <code class="language-html">px</code> into <code class="language-html">em</code>.
        The variable <code class="language-html">$font-size</code> which can be found in <code class="language-html">_settings.scss</code> is used to calculate the em value.
    </p>

    <pre class="language-css col xs4 s12 m6">
		<code>
height: em-calc(16px);
margin: em-calc(-16px);
		</code>
	</pre>
</section>

<section class="row">
    <h3 class="col xs4">color(<span class="xs-hidden">$color, $accent</span>)</h3>

	<p class="col xs4 m6">
		You can use the color function to find a accent color.
		The first parameter is the color of which you would like to find an accent color of.
		The second parameter is the accent you want to get.
	</p>

	<pre class="language-css col xs4 s12 m6">
		<code>
color($blue, 200) // Returns #90CAF9
		</code>
	</pre>
</section>

<section class="row">
    <h3 class="col xs4">decimal-round(<span class="xs-hidden">$number, $decimals</span>)</h3>

    <p class="col xs4 m6">
        You can use the <code class="language-css">decimal-round()</code> function to get a decimal number returned.
    </p>

    <pre class="language-css col xs4 s12 m6">
		<code>
decimal-round(20.02221, 2); // returns 20.02
		</code>
	</pre>
</section>

<section class="row">
    <h3 class="col xs4">in-array(<span class="xs-hidden">$value, $array</span>)</h3>

    <p class="col xs4 m6">
        You can use the <code class="language-css">in-array()</code> function to get check if a value is in an array.
    </p>

    <pre class="language-css col xs4 s12 m6">
		<code>
in-array(1, (29, 10, 3, 4, 3, 1)); // returns true
in-array(1, (29, 10, 3, 4, 3)); // returns false
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';