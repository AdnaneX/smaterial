<?php
$title = 'Slider';
$description = 'Slider based on Google\'s Material Design';
$keywords = 'slider, discrete slider';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Slider usage</h2>

	<p class="sc-col sc-xs4 sc-m6">
		There are a couple of different sliders you can use with different styling.
		There is the default slider and the slider which adds more elements with JS.
		The default slider is made to only use the HTML5 <code class="language-html">&lt;input type="range"></code>.
		The sliders look the best in Chrome and Firefox. Both browsers support styling without additional classes but won't support all styling.
		When using <code class="language-css">.sc-slider</code> class you get different styling for range track lower and upper parts.
		You also get different styling depending on value.
		When you also use the <code class="language-css">sc-slider-discrete</code> you get the bubble as well.
		For IE/ Edge the <code class="language-css">sc-slider-discrete</code> will work the best.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The disabled styling is also supported.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<input type="range">
		<input type="range" class="sc-slider">
		<input type="range" disabled value="0" class="sc-slider">
		<input type="range" disabled class="sc-slider">
		<input type="range" min="0" max="200" class="sc-slider sc-slider-discrete">
		<input type="range" disabled class="sc-slider sc-slider-discrete">
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
	    <code>
&lt;input type="range" class="sc-slider">
&lt;input type="range" disabled value="0" class="sc-slider">
&lt;input type="range" disabled class="sc-slider">
&lt;input type="range" min="0" max="200" class="sc-slider sc-slider-discrete">
&lt;input type="range" disabled class="sc-slider sc-slider-discrete">
	    </code>
    </pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Default slider</h3>

	<p class="sc-col sc-xs4 sc-m6">
		The default slider can be made in 2 ways. Using default range input or by adding a class <code class="language-css">.sc-slider</code>.
		Adding the class will give more customizing abilities. Of course for both ways there is also disabled styling.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
	<code>
&lt;input type="range">
&lt;input type="range" disabled>
&lt;input type="range" class="sc-slider">
&lt;input type="range" disabled class="sc-slider">
	</code>
</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Discrete slider</h3>

	<p class="sc-col sc-xs4 sc-m6">
		Using the discrete slider will add a "bubble" showing the value. The discrete slider also supports disabled styling.
		<strong>Note</strong> the discrete slider still has some bugs.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;input type="range" min="0" max="200" class="sc-slider sc-slider-discrete">
&lt;input type="range" disabled class="sc-slider sc-slider-discrete">
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';