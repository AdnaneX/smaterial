<?php
$title = 'Tooltips';
$description = 'Tooltips based on Googles Material Design';
$keywords = 'material design, smaterial, tooltips';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Tooltips usage</h2>

	<p class="sc-col sc-s12 sc-m6">
		You can use tooltips to give the user some extra info about a certain
		<a href="#"><span class="sc-tooltip" title="delete, edit">action</span></a> or
		<a href="#"><span class="sc-tooltip" title="url: google.com">link</span></a>.
	</p>

	<p class="sc-col sc-s12 sc-m6">
		Tooltips only need the class <code>.sc-tooltip</code> and the attribute <code>title</code> in order to work. Because of this it's easy
		to add to a link or span.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
&lt;span class="sc-tooltip" title="delete, edit">
  action
&lt;/span>

&lt;a href="#" class="sc-tooltip" title="link">
  link
&lt;/a>
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>Tooltip settings</h3>

	<table class="sc-col sc-s12 sc-m6">
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
			<tr>
				<td>$tooltip-opacity</td>
				<td>Variable / integer</td>
				<td>Changes the opacity of the tooltip</td>
			</tr>
			<tr>
				<td>$tooltip-small-font</td>
				<td>Variable / integer</td>
				<td>Changes the font size for small screens</td>
			</tr>
			<tr>
				<td>$tooltip-large-font</td>
				<td>Variable / integer</td>
				<td>Changes the font size for large screens</td>
			</tr>
			<tr>
				<td>$tooltip-font-weight</td>
				<td>Variable / integer</td>
				<td>Changes the font weight</td>
			</tr>
			<tr>
				<td>$tooltip-small-top</td>
				<td>Variable / integer</td>
				<td>Changes the top margin for small screens</td>
			</tr>
			<tr>
				<td>$tooltip-large-top</td>
				<td>Variable / integer</td>
				<td>Changes the top margin for large screens</td>
			</tr>
			<tr>
				<td>$tooltip-small-height</td>
				<td>Variable / integer</td>
				<td>Changes the height for small screens</td>
			</tr>
			<tr>
				<td>$tooltip-large-height</td>
				<td>Variable / integer</td>
				<td>Changes the height for large screens</td>
			</tr>
			<tr>
				<td>$tooltip-small-padding</td>
				<td>Variable / integer</td>
				<td>Changes the padding for small screens</td>
			</tr>
			<tr>
				<td>$tooltip-large-padding</td>
				<td>Variable / integer</td>
				<td>Changes the padding for large screens</td>
			</tr>
			<tr>
				<td>$tooltip-z-index</td>
				<td>Variable / integer</td>
				<td>Changes the z-index of the tooltip</td>
			</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';