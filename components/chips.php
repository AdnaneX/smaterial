<?php
$title = 'Chips';
$description = 'Chips based on Googles Material Design';
$keywords = 'material design, smaterial, chips';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sm-row">
	<h2>Chips usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		You could use chips for something like tags or contacts
	</p>
</section>

<section class="sm-row">
	<h3>Chip examples</h3>

	<p class="sm-col sm-s12 sm-m6">
		There are a couple of chips. The normal (<code>.sm-chip</code>), the deletable (<code>.sm-chip .sm-chip-deletable</code>),
		the contact (<code>.sm-chip .sm-chip-contact</code>) and the deletable contact (<code>.sm-chip .sm-chip-deletable .sm-chip-contact</code>).
	</p>

	<div class="sm-col sm-s12 sm-m6">
		<div class="sm-chip sm-chip-deletable">
			<span>John Doe</span>
			<i class="material-icons sm-chip-delete">clear</i>
		</div>

		<div class="sm-chip">
			<span>John Doe</span>
		</div>

		<div class="sm-chip sm-chip-contact sm-chip-deletable">
			<img class="sm-left" src="http://lorempixel.com/32/32/abstract" alt="Chip contact example">
			<span>John Doe</span>
			<i class="material-icons sm-chip-delete">clear</i>
		</div>

		<div class="sm-chip sm-chip-contact">
			<img class="sm-left" src="http://lorempixel.com/32/32/abstract" alt="Chip contact example">
			<span>John Doe</span>
		</div>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-chip sm-chip-deletable">
  &lt;span>John Doe&lt;/span>
  &lt;i class="material-icons sm-chip-delete">clear&lt;/i>
&lt;/div>

&lt;div class="sm-chip">
  &lt;span>John Doe&lt;/span>
&lt;/div>

&lt;div class="sm-chip sm-chip-contact sm-chip-deletable">
  &lt;img class="sm-left" src="" alt="">
  &lt;span>John Doe&lt;/span>
  &lt;i class="material-icons sm-chip-delete">clear&lt;/i>
&lt;/div>

&lt;div class="sm-chip sm-chip-contact">
  &lt;img class="sm-left" src="" alt="">
  &lt;span>John Doe&lt;/span>
&lt;/div>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Chip settings</h3>

	<table class="sm-col sm-s12 sm-m6">
		<thead>
			<tr>
				<th>Variable</th>
				<th>Options</th>
				<th>Result</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>$chips-text</td>
				<td>Change to color or variable</td>
				<td>Changes the color of the text</td>
			</tr>
			<tr>
				<td>$chips-text-hover</td>
				<td>Change to color or variable</td>
				<td>Changed the color of text when hovered and deletable</td>
			</tr>
			<tr>
				<td>$chips-background</td>
				<td>Change to color or variable</td>
				<td>Changes the background color of a chip</td>
			</tr>
			<tr>
				<td>$chips-background-hover</td>
				<td>Change to color or variable</td>
				<td>Changes the background color of a chip when hovered and deletable</td>
			</tr>
			<tr>
				<td>$chips-delete-cross</td>
				<td>Change to color or variable</td>
				<td>Changes the delete cross color when deletable</td>
			</tr>
			<tr>
				<td>$chips-delete-cross-hover</td>
				<td>Change to color or variable</td>
				<td>Changes the delete cross color when hovered and deletable</td>
			</tr>
			<tr>
				<td>$chips-delete-background</td>
				<td>Change to color or variable</td>
				<td>Changes the delete cross background when deletable</td>
			</tr>
			<tr>
				<td>$chips-delete-background-hover</td>
				<td>Change to color or variable</td>
				<td>Changes the delete cross background when hovered and deletable</td>
			</tr>
		</tbody>
	</table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
