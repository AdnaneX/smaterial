<?php
$title = 'Snackbars &amp; toasts';
$description = 'Snackbars &amp; toasts based on Google\'s Material Design';
$keywords = 'material design, smaterial, snackbars, toasts';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Snackbars & toasts usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		You can use a snackbars to give the user some feedback about an action by showing a short message.
		Snackbars can contain an action.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		You can also use toasts which similar to snackbars but they don't contain actions.
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-snackbar">
  This is a snackbar
  &lt;a href="#" class="sm-snackbar-action">Undo&lt;/a>
&lt;/div>
		</pre>
	</code>
</section>

<div class="sm-snackbar">
	This is a snackbar <a href="#" class="sm-snackbar-action">Undo</a>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';