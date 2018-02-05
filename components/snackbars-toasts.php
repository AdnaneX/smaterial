<?php
$title = 'Snackbars &amp; toasts';
$description = 'Snackbars &amp; toasts based on Google\'s Material Design';
$keywords = 'snackbars, toasts';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">Snackbars & toasts usage</h2>

	<p class="col xs4 m6">
		You can use a snackbars to give the user some feedback about an action by showing a short message.
		Snackbars can contain an action.
	</p>

	<p class="col xs4 m6">
		You can also use toasts which similar to snackbars but they don't contain actions.
	</p>

	<pre class="language-html col s12 m6 offset-m6">
		<code>
&lt;div class="snackbar">
  This is a snackbar
  &lt;a href="#" class="snackbar-action">Undo&lt;/a>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4">Settings</h3>

	<table class="col xs4 m6">
		<thead>
		<th>
			<tr>
				<th>Variable</th>
				<th>Options</th>
				<th>Result</th>
			</tr>
		</th>
		</thead>

		<tbody>
		<tr>
			<td>$snackbar-background</td>
			<td>Variable / color code</td>
			<td>Change background color</td>
		</tr>
		<tr>
			<td>$snackbar-font-color</td>
			<td>Variable / color code</td>
			<td>Change font color</td>
		</tr>
		</tr>
		</tbody>
	</table>
</section>

<div class="snackbar">
	This is a snackbar <a href="#" class="snackbar-action">Undo</a>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';