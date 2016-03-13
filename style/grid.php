<?php
$title = 'Grid';
$description = 'Grid responsive based on Google\'s Material Design';
$keywords = 'material design, smaterial, SCSS functions';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Grid</h2>

	<p class="sm-col sm-s12 sm-m6">
		To make your website responsive you can use a grid.
		You can adjust breakpoints, gutter and column amount.
	</p>
</section>

<section class="sm-row">
	<h3>Row</h3>

	<p class="sm-col sm-s12 sm-m6">
		You can use <code>.sm-row</code> so that it's all in one line.
	</p>
</section>

<section class="sm-row">
	<h3>Columns</h3>

	<p class="sm-col sm-s12 sm-m6">
		There are 5 breakpoints <code>.sm-xs</code>, <code>.sm-s</code>, <code>.sm-m</code>, <code>.sm-l</code> and <code>.sm-xl</code>
		to suit your needs.
		In order to make the columns work you need to wrap it inside a <code>.sm-row</code>
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-row">
  &lt;div class="sm-col sm-s12 sm-m6">
    Example
  &lt;/div>
&lt;/div>
		</pre>
	</code>

	<p class="sm-col sm-s12 sm-m6">
		You can also use the row and columns in SCSS by simply extending the class.
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
@extend .sm-col, .sm-s12, .sm-m6;
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Push & pull</h3>

	<p class="sm-col sm-s12 sm-m6">
		You can also push and pull which work the same as the columns.
		So <code>.sm-push-s</code> or <code>.sm-pull-s</code> these examples are for small screen but they work with all sizes named before.
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-row">
	&lt;div class="sm-col sm-s12 sm-m6 sm-push-m6">
		Example
	&lt;/div>
&lt;/div>

@extend .sm-col, .sm-s12, .sm-m6, sm-push-m6;
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Media queries</h3>

	<p class="sm-col sm-s12 sm-m6">
		There are also a couple of media queries you can use with SCSS.
		The media queries you can use are listed here.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		You can use the media queries like the following example: <code>@media #{$medium-up}</code>.
	</p>

	<ul class="sm-col sm-s12 sm-m6">
		<li>$xsmall-only</li>
		<li>$small-only</li>
		<li>$medium-only</li>
		<li>$large-only</li>
		<li>$xlarge-only</li>
		<li class="sm-divider"></li>
		<li>$xsmall-down</li>
		<li>$small-down</li>
		<li>$medium-down</li>
		<li>$large-down</li>
		<li>$xlarge-down</li>
		<li class="sm-divider"></li>
		<li>$xsmall-up</li>
		<li>$small-up</li>
		<li>$medium-up</li>
		<li>$large-up</li>
		<li>$xlarge-up</li>
	</ul>


</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';