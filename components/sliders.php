<?php
$title = 'Slider';
$description = 'Slider based on Google\'s Material Design. Sliders have two different types a default and discrete option. However the support is limited';
$keywords = 'slider, discrete slider';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">Slider usage</h2>

	<p class="col xs4 m6">
		There are a couple of different sliders you can use with different styling.
		There is the default slider and the slider which adds more elements with JS.
		The default slider is made to only use the HTML5 <code class="language-html">&lt;input type="range"></code>.
		The sliders look the best in Chrome and Firefox. Both browsers support styling without additional classes but won't support all styling.
		When using <code class="language-css">.slider</code> class you get different styling for range track lower and upper parts.
		You also get different styling depending on value.
		When you also use the <code class="language-css">slider-discrete</code> you get the bubble as well.
		For IE/ Edge the <code class="language-css">slider-discrete</code> will work the best.
	</p>

	<p class="col xs4 m6">
		The disabled styling is also supported.
	</p>

	<p class="col xs4 m6">
		<input type="range">
		<input type="range" class="slider">
		<input type="range" disabled value="0" class="slider">
		<input type="range" disabled class="slider">
		<input type="range" min="0" max="200" class="slider slider-discrete">
		<input type="range" disabled class="slider slider-discrete">
	</p>

	<pre class="language-html col xs4 s12 m6">
	    <code>
&lt;input type="range" class="slider">
&lt;input type="range" disabled value="0" class="slider">
&lt;input type="range" disabled class="slider">
&lt;input type="range" min="0" max="200" class="slider slider-discrete">
&lt;input type="range" disabled class="slider slider-discrete">
	    </code>
    </pre>
</section>

<section class="row">
	<h3 class="col xs4">Default slider</h3>

	<p class="col xs4 m6">
		The default slider can be made in 2 ways. Using default range input or by adding a class <code class="language-css">.slider</code>.
		Adding the class will give more customizing abilities. Of course for both ways there is also disabled styling.
	</p>

	<pre class="language-html col xs4 s12 m6">
	<code>
&lt;input type="range">
&lt;input type="range" disabled>
&lt;input type="range" class="slider">
&lt;input type="range" disabled class="slider">
	</code>
</pre>
</section>

<section class="row">
	<h3 class="col xs4">Discrete slider</h3>

	<p class="col xs4 m6">
		Using the discrete slider will add a "bubble" showing the value. The discrete slider also supports disabled styling.
		<strong>Note</strong> the discrete slider still has some bugs.
	</p>

	<pre class="language-html col xs4 s12 m6">
		<code>
&lt;input type="range" min="0" max="200" class="slider slider-discrete">
&lt;input type="range" disabled class="slider slider-discrete">
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';