<?php
$title = 'Progress &amp; activity';
$description = 'Progress and activity indicators based on Google\'s Material Design';
$keywords = 'material design, smaterial, progress, activity, determinate, indeterminate, buffer, circular';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Progress & activity usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		There are a couple of progress and activity indicator varieties.
		The "determinate", "indeterminate", "buffer", "circular" and "circular on floating button".
	</p>
</section>

<section class="sm-row">
	<h3>Determinate</h3>

	<p class="sm-col sm-s12 sm-m6">
		You can easily modify the determinate progress indicator by giving the <code>.sm-progress</code> the desired width.
	</p>

	<div class="sm-col sm-s12 sm-m6">
		<div class="sm-determinate">
			<div class="sm-progress" style="width: 10%"></div>
		</div>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-determinate">
  &lt;div class="sm-progress" style="width: 10%">&lt;/div>
&lt;/div>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Indeterminate</h3>

	<p class="sm-col sm-s12 sm-m6">
		The indeterminate progress indicator will continue forever.
	</p>

	<div class="sm-col sm-s12 sm-m6">
		<div class="sm-indeterminate">
			 <div class="sm-progress"></div>
		</div>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-indeterminate">
  &lt;div class="sm-progress">&lt;/div>
&lt;/div>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Buffer</h3>

	<p class="sm-col sm-s12 sm-m6">

	</p>

	<div class="sm-col sm-s12 sm-m6">
		<div class="sm-buffer">
			<div class="sm-buffer-progress" style="width: 50%;">
				<div class="sm-progress" style="width: 90%;"></div>
			</div>
			<div class="sm-buffering" style="width: 50%; left: 50%;"></div>
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
