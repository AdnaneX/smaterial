<?php
$title = 'Tooltips';
$description = 'Tooltips based on Google\'s Material Design. With tooltips you can easily give your user some more information about for example an action';
$keywords = 'tooltips';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">Tooltips usage</h2>

	<p class="col xs4 m6">
		You can use tooltips to give the user some extra info about a certain
		<a href="#"><span class="tooltip" title="delete, edit">action</span></a> or
		<a href="#"><span class="tooltip" title="url: google.com">link</span></a>.
		<a href="#" class="raised-button tooltip" title="button example">Button</a>
	</p>

	<p class="col xs4 m6">
		Tooltips only need the class <code class="language-css">.tooltip</code> and the attribute <code class="language-css">title</code> in order to work. Because of this it's easy
		to add to a link or span.
	</p>

	<pre class="language-html col s12 m6 offset-m6">
		<code>
&lt;span class="tooltip" title="delete, edit">
  action
&lt;/span>

&lt;a href="#" class="tooltip" title="link">
  link
&lt;/a>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4">Tooltip settings</h3>

	<table class="col xs4 m6">
		<thead>
		<tr>
			<th>Variable</th>
			<th>Options</th>
			<th>Result</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>$tooltip-background</td>
			<td>Color / variable</td>
			<td>Changes the background color</td>
		</tr>
		<tr>
			<td>$tooltip-font-color</td>
			<td>Color / variable</td>
			<td>Changes the font color</td>
		</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';