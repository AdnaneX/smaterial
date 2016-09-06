<?php
$title = 'SCSS mixins';
$description = 'SCSS mixins to help you make styling easier. Mixins are used for repetitive code and prefixing';
$keywords = 'material design, smaterial, SCSS mixins';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>SCSS mixins usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The mixins are made to help you. There are mixins which take care of prefixing.
		There are also mixins that take care of repetitive codes.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The mixins that help with the prefixes are especially useful when you don't use <a href="http://gulpjs.com/" target="_blank">gulp</a>.
		Some mixins are made to prevent repetitive, duplicate code and thereby more code to edit.
		For example to take care of all the typography there is one.
		There is also a mixin that takes care of all default styling of <a href="/components/buttons.php#raised-button">raised</a> and <a href="/components/buttons.php#flat-button">flat</a> buttons.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		To use a comma in the parameter you have to unquote it. For example when you would like to add multiple transitions:
		<code class="language-css">@include transition(color .3s ease-in-out unquote(',') background .3ms ease-in-out)</code>.
	</p>
</section>

<section class="sc-row">
	<h3>box-shadow()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">box-shadow()</code> mixin is used to make box-shadow styling with all the prefixes.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include box-shadow(0 16px 32px 0 rgba(0, 0, 0, 0.27706));
@include box-shadow(0 16px 32px 0 rgba(0, 0, 0, 0.27706) unquote(',') 0 12px 32px 0 rgba(0, 0, 0, 0.224));
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>border-radius()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">border-radius()</code> mixin is used to add all prefixes for the border-radius.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include border-radius(50%);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>box-sizing()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">box-sizing()</code> mixin is used to add all prefixes for the box-sizing.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include box-sizing(border-box);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>transition()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">transition()</code> mixin is used to add all prefixes for the transition.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include transition(height 300ms ease-in-out);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>transform()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">transform()</code> mixin is used to add all prefixes for the transform.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include transform(rotate(7deg));
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>animation()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">animation()</code> mixin is used to add all prefixes for the animation.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include animation(myMove 5s infinite);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>keyframes()</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">keyframes</code> can be used to create a specific animation.
		The mixin adds all prefixes.
		Between the round brackets "<code class="language-css">()</code>" you set the name, between the curly brackets "<code class="language-css">{}</code>" you set what needs to be done.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include keyframes(myMove) {
  0%, 50%, 100% {
    @include transform(scale(1) translateZ(0));
  }

  25%, 75% {
    @include transform(scale(.98) translateZ(0));
  }
}
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>border-top-left-radius</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">border-top-left-radius()</code> mixin is used to add all prefixes to the border radius.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include border-top-left-radius(10px);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>border-top-right-radius</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">border-top-right-radius()</code> mixin is used to add all prefixes to the border radius.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include border-top-right-radius(10px);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>border-radius-top</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">border-radius-top()</code> mixin is used to add all prefixes to the top border radius.
		This mixing includes both <code class="language-css">border-top-right-radius()</code> and <code class="language-css">border-top-left-radius()</code>
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include border-radius-top(10px);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>border-bottom-left-radius</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">border-bottom-left-radius()</code> mixin is used to add all prefixes to the border radius.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include border-bottom-left-radius(10px);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>border-bottom-right-radius</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">border-bottom-right-radius()</code> mixin is used to add all prefixes to the border radius.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
	<code>
@include border-bottom-right-radius(10px);
	</code>
</pre>
</section>

<section class="sc-row">
	<h3>border-radius-bottom</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">border-radius-bottom()</code> mixin is used to add all prefixes to the bottom border radius.
		This mixing includes both <code class="language-css">border-bottom-right-radius()</code> and <code class="language-css">border-bottom-left-radius()</code>.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
		<code>
@include border-radius-bottom(10px);
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>square</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">square()</code> mixin is used to give both width and height equal value.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
		<code>
@include square(12px);
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>range-thumb</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">range-thumb()</code> mixing is used to add all prefixes for the range thumb.
	</p>

	<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
		<code>
@include range-thumb() {
  // Styling goes here
}
		</code>
	</pre>
</section>

	<section class="sc-row">
		<h3>range-track</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			The <code class="language-css">range-track()</code> mixing is used to add all prefixes for the range track.
		</p>

		<pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
		<code>
@include range-track() {
  // Styling goes here
}
		</code>
	</pre>
	</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';