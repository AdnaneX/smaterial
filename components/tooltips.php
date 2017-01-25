<?php
$title = 'Tooltips';
$description = 'Tooltips based on Google\'s Material Design';
$keywords = 'tooltips';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Tooltips usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can use tooltips to give the user some extra info about a certain
		<a href="#"><span class="sc-tooltip" title="delete, edit">action</span></a> or
		<a href="#"><span class="sc-tooltip" title="url: google.com">link</span></a>.
		<a href="#" class="sc-raised-button sc-tooltip" title="button example">Button</a>
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		Tooltips only need the class <code class="language-css">.sc-tooltip</code> and the attribute <code class="language-css">title</code> in order to work. Because of this it's easy
		to add to a link or span.
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;span class="sc-tooltip" title="delete, edit">
  action
&lt;/span>

&lt;a href="#" class="sc-tooltip" title="link">
  link
&lt;/a>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Tooltip settings</h3>

	<table class="sc-col sc-xs4 sc-s12 sc-m6">
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