<?php
$title = 'Chips';
$description = 'Chips based on Google\'s Material Design';
$keywords = 'material design, smaterial, chips';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

	<section class="sc-row">
		<h2>Chips usage</h2>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			You could use chips for something like tags or contacts.
		</p>
	</section>

	<section class="sc-row">
		<h3>Chip examples</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
		There are a couple of chips. The normal (<code>.sc-chip</code>), the deletable (<code>.sc-chip .sc-chip-deletable</code>),
		the contact (<code>.sc-chip .sc-chip-contact</code>) and the deletable contact (<code>.sc-chip .sc-chip-deletable .sc-chip-contact</code>).
		</p>

		<div class="sc-col sc-xs4 sc-s12 sc-m6">
			<div class="sc-chip sc-chip-deletable">
				<span>John Doe</span>
				<i class="material-icons sc-chip-delete">clear</i>
			</div>

			<div class="sc-chip">
				<span>John Doe</span>
			</div>

			<div class="sc-chip sc-chip-contact sc-chip-deletable">
				<img class="sc-left" src="/images/profile-icon.jpg" alt="Chip contact example">
				<span>John Doe</span>
				<i class="material-icons sc-chip-delete">clear</i>
			</div>

			<div class="sc-chip sc-chip-contact">
				<img class="sc-left" src="/images/profile-icon.jpg" alt="Chip contact example">
				<span>John Doe</span>
			</div>
		</div>

		<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;div class="sc-chip sc-chip-deletable">
  &lt;span>John Doe&lt;/span>
  &lt;i class="material-icons sc-chip-delete">clear&lt;/i>
&lt;/div>

&lt;div class="sc-chip">
  &lt;span>John Doe&lt;/span>
&lt;/div>

&lt;div class="sc-chip sc-chip-contact sc-chip-deletable">
  &lt;img class="sc-left" src="" alt="">
  &lt;span>John Doe&lt;/span>
  &lt;i class="material-icons sc-chip-delete">clear&lt;/i>
&lt;/div>

&lt;div class="sc-chip sc-chip-contact">
  &lt;img class="sc-left" src="" alt="">
  &lt;span>John Doe&lt;/span>
&lt;/div>
		</code>
	</pre>
	</section>

	<section class="sc-row">
		<h3>Chip settings</h3>

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
