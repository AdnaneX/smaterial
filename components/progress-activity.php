<?php
$title = 'Progress &amp; activity';
$description = 'Progress and activity indicators based on Google\'s Material Design';
$keywords = 'material design, smaterial, progress, activity, determinate, indeterminate, buffer, circular';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Progress & activity usage</h2>

	<p class="sc-col sc-s12 sc-m6">
		There are a couple of progress and activity indicator varieties.
		The "determinate", "indeterminate", "buffer", "circular" and "circular on floating button".
	</p>
</section>

<section class="sc-row">
	<h3>Determinate</h3>

	<p class="sc-col sc-s12 sc-m6">
		You can easily modify the determinate progress indicator by giving the <code>.sc-progress</code> the desired width.
	</p>

	<div class="sc-col sc-s12 sc-m6">
		<div class="sc-determinate">
			<div class="sc-progress" style="width: 10%"></div>
		</div>
	</div>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;div class="sc-determinate">
  &lt;div class="sc-progress" style="width: 10%">&lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Indeterminate</h3>

	<p class="sc-col sc-s12 sc-m6">
		The indeterminate progress indicator will continue forever.
	</p>

	<div class="sc-col sc-s12 sc-m6">
		<div class="sc-indeterminate">
			 <div class="sc-progress"></div>
		</div>
	</div>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;div class="sc-indeterminate">
  &lt;div class="sc-progress">&lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Buffer</h3>

	<p class="sc-col sc-s12 sc-m6">

	</p>

	<div class="sc-col sc-s12 sc-m6">
		<div class="sc-buffer">
			<div class="sc-buffer-progress" style="width: 50%;">
				<div class="sc-progress" style="width: 90%;"></div>
			</div>
			<div class="sc-buffering" style="width: 50%; left: 50%;"></div>
		</div>
	</div>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;div class="sc-buffer">
  &lt;div class="sc-buffer-progress" style="width: 50%;">
    &lt;div class="sc-progress" style="width: 90%;">&lt;/div>
  &lt;/div>
  &lt;div class="sc-buffering" style="width: 50%; left: 50%;">&lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-col sc-s12 sc-m6">
	<h3>Circular</h3>

	<p class="sc-col sc-s12 sc-m6">

	</p>

	<div class="sc-col sc-s12 sc-m6">
		<div class="sc-circular">
			<svg >
				<circle></circle>
			</svg>
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
