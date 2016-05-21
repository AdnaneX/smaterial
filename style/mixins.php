<?php
$title = 'SCSS mixins';
$description = 'SCSS mixins to help you make styling easier';
$keywords = 'material design, smaterial, SCSS mixins';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>SCSS mixins</h2>

	<p class="sc-col sc-s12 sc-m6">
		The mixins are made to help you with for example prefixes.
	</p>

	<p class="sc-col sc-s12 sc-m6">
		To use a comma in the parameter you have to unquote it. For example when you would like to add multiple transitions:
		<code>@include transition(color .3s ease-in-out unquote(',') background .3ms ease-in-out)</code>.
	</p>
</section>

<section class="sc-row">
	<h3>box-shadow()</h3>

	<p class="sc-col sc-s12 sc-m6">
		The <code>box-shadow()</code> mixin is used to make box-shadow styling with all the prefixes.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
@include box-shadow(0 16px 32px 0 rgba(0,0,0,0.27706));
@include box-shadow(0 16px 32px 0 rgba(0,0,0,0.27706) unquote(',') 0 12px 32px 0 rgba(0,0,0,0.224));
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>border-radius()</h3>

	<p class="sc-col sc-s12 sc-m6">
		The <code>border-radius()</code> mixins is use to add all prefixes for the border-radius.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
@include border-radius(50%);
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>box-sizing()</h3>

	<p class="sc-col sc-s12 sc-m6">
		The <code>box-sizing()</code> mixins is use to add all prefixes for the box-sizing.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
@include box-sizing(border-box);
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>transition()</h3>

	<p class="sc-col sc-s12 sc-m6">
		The <code>transition()</code> mixins is use to add all prefixes for the transition.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
@include transition(height 300ms ease-in-out);
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>transform()</h3>

	<p class="sc-col sc-s12 sc-m6">
		The <code>transform()</code> mixins is use to add all prefixes for the transform.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
@include transform(rotate(7deg));
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>animation()</h3>

	<p class="sc-col sc-s12 sc-m6">
		The <code>animation()</code> mixins is use to add all prefixes for the animation.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
@include animation(myMove 5s infinite);
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>keyframes()</h3>

	<p class="sc-col sc-s12 sc-m6">
		The <code>keyframes</code> can be used to create a specific animation.
		The mixin adds all prefixes.
		Between the round brackets "<code>()</code>" you set the name, between the curly brackets "<code>{}</code>" you set what needs to be done.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
@include keyframes(myMove) {
  0%, 50%, 100% {
    @include transform(scale(1) translateZ(0));
  }

  25%, 75% {
    @include transform(scale(.98) translateZ(0));
  }
}
		</pre>
	</code>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';