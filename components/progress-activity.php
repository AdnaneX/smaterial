<?php
$title = 'Progress &amp; activity';
$description = 'Progress and activity indicators based on Google\'s Material Design';
$keywords = 'progress, activity, determinate, indeterminate, buffer, circular';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Progress & activity usage</h2>

	<p class="col xs4 s12 m6">
		There are a couple of progress and activity indicator varieties.
		The "determinate", "indeterminate", "buffer", "circular" and "circular on floating button".
	</p>
</section>

<section class="row">
	<h3 class="col xs4 s12">Determinate</h3>

	<p class="col xs4 s12 m6">
		You can easily modify the determinate progress indicator by giving the <code>.progressbar</code> the desired width.
	</p>

	<div class="col xs4 s12 m6">
		<div class="determinate">
			<div class="progressbar" style="width: 10%"></div>
		</div>
	</div>

	<pre class="language-html col s12 m6">
		<code>
&lt;div class="determinate">
  &lt;div class="progressbar" style="width: 10%">&lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Indeterminate</h3>

	<p class="col xs4 s12 m6">
		The indeterminate progress indicator will continue forever.
	</p>

	<div class="col xs4 s12 m6">
		<div class="indeterminate"></div>
	</div>

	<pre class="language-html col s12 m6">
		<code>
&lt;div class="indeterminate">&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Buffer</h3>

	<p class="col xs4 s12 m6">
		The buffer progressbar is still a work in process.
	</p>

	<div class="col xs4 s12 m6">
		<div class="buffer">
			<div class="buffer-progress" style="width: 50%;">
				<div class="progressbar" style="width: 90%;"></div>
			</div>
			<div class="buffering" style="width: 50%; left: 50%;"></div>
		</div>
	</div>

	<pre class="language-html col s12 m6">
		<code>
&lt;div class="buffer">
  &lt;div class="buffer-progress" style="width: 50%;">
    &lt;div class="progressbar" style="width: 90%;">&lt;/div>
  &lt;/div>
  &lt;div class="buffering" style="width: 50%; left: 50%;">&lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Circular</h3>

	<p class="col xs4 s12 m6">
		The circular progress can easily be changed in SCSS. You can change the width of the loader and the color(s).
	</p>

	<div class="col xs4 s12 m6">
		<div class="circular"></div>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;div class="circular">&lt;/div>
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
