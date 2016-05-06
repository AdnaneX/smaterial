<?php
$title = 'Grid';
$description = 'Grid responsive based on Google\'s Material Design';
$keywords = 'material design, smaterial, grid, push, pull, offset, columns, hidden';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Grid</h2>

	<p class="sc-col sc-s12 sc-m6">
		To make your website responsive you can use a grid.
		You can adjust breakpoints, gutter and column amount.
	</p>
</section>

<section class="sc-row">
	<h3>Row</h3>

	<p class="sc-col sc-s12 sc-m6">
		You can use <code>.sc-row</code> so that it's all in one line.
	</p>
</section>

<section class="sc-row">
	<h3>Columns</h3>

	<p class="sc-col sc-s12 sc-m6">
		There are 5 breakpoints <code>.sc-xs</code>, <code>.sc-s</code>, <code>.sc-m</code>, <code>.sc-l</code> and <code>.sc-xl</code>
		to suit your needs. <strong>NOTE*</strong> that <code>.sc-xs</code> and <code>.sc-xl</code> are not jet completely supported.
		In order to make the columns work you need to wrap it inside a <code>.sc-row</code>
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
&lt;div class="sc-row">
  &lt;div class="sc-col sc-s12 sc-m6">
    Example
  &lt;/div>
&lt;/div>
		</pre>
	</code>

	<p class="sc-col sc-s12 sc-m6">
		You can also use the row and columns in SCSS by simply extending the class.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
@extend .sc-col, .sc-s12, .sc-m6;
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>Push, pull and offset</h3>

	<p class="sc-col sc-s12 sc-m6">
		You can also push, pull and offset which work the same as the columns.
		So <code>.sc-push-s</code>, <code>.sc-pull-s</code>, <code>.sc-offset-s</code> these examples are for small screen but they work with all sizes named before.
	</p>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
&lt;div class="sc-row">
	&lt;div class="sc-col sc-s12 sc-m6 sc-offset-m6">
		Example
	&lt;/div>
&lt;/div>

@extend .sc-col, .sc-s12, .sc-m6, sc-offset-m6;

&lt;div class="sc-row">
  &lt;div class="sc-col sc-s12 sc-m6 sc-push-m6">
    Display 1
  &lt;/div>

  &lt;div class="sc-col sc-s12 sc-m6 sc-pull-m6">
    Display 2
  &lt;/div>
&lt;/div>
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>Hidden</h3>

	<p class="sc-col sc-s12 sc-m6">
		If you want an element to be hidden for a certain device you can use the following classes:
		<code>.sc-s-hidden</code>, <code>.sc-m-hidden</code> and <code>.sc-l-hidden</code>.
	</p>

	<div class="sc-row">
		<div class="sc-col sc-s4 sc-s-hidden">
			Small hidden
		</div>

		<div class="sc-col sc-s4 sc-m-hidden">
			Medium hidden
		</div>

		<div class="sc-col sc-s4 sc-l-hidden">
			Large hidden
		</div>
	</div>

	<code class="sc-col s12 sc-m6 sc-offset-m6">
		<pre>
&lt;div class="sc-col sc-s4 sc-s-hidden">
  Small hidden
&lt;/div>

&lt;div class="sc-col sc-s4 sc-m-hidden">
  Medium hidden
&lt;/div>

&lt;div class="sc-col sc-s4 sc-l-hidden">
  Large hidden
&lt;/div>
		</pre>
	</code>
</section>

<section class="sc-row">
	<h3>Media queries</h3>

	<p class="sc-col sc-s12 sc-m6">
		There are also a couple of media queries you can use with SCSS.
		The media queries you can use are listed here.
	</p>

	<p class="sc-col sc-s12 sc-m6">
		You can use the media queries like the following example: <code>@media #{$medium-up}</code>.
	</p>

	<ul class="sc-col sc-s12 sc-m6">
		<li>$xsmall-only</li>
		<li>$small-only</li>
		<li>$medium-only</li>
		<li>$large-only</li>
		<li>$xlarge-only</li>
		<li class="sc-divider"></li>
		<li>$xsmall-down</li>
		<li>$small-down</li>
		<li>$medium-down</li>
		<li>$large-down</li>
		<li>$xlarge-down</li>
		<li class="sc-divider"></li>
		<li>$xsmall-up</li>
		<li>$small-up</li>
		<li>$medium-up</li>
		<li>$large-up</li>
		<li>$xlarge-up</li>
	</ul>
</section>

<section class="sc-row">
	<h3>Grid settings</h3>

	<table>
		<thead>
			<tr>
				<th>Variable</th>
				<th>Options</th>
				<th>Results</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>$xsmall-screen</td>
				<td>Variable / </td>
				<td>Change the width of xsmall screens</td>
			</tr>
			<tr>
				<td>$small-screen</td>
				<td>Variable / </td>
				<td>Change the width of small screens</td>
			</tr>
			<tr>
				<td>$medium-screen</td>
				<td>Variable / </td>
				<td>Change the width of medium screens</td>
			</tr>
			<tr>
				<td>$large-screen</td>
				<td>Variable / </td>
				<td>Change the width of large screens</td>
			</tr>
			<tr>
				<td>$xlarge-screen</td>
				<td>Variable / </td>
				<td>Change width of xlarge screen</td>
			</tr>
			<tr>
				<td>$gutter</td>
				<td>Variable / </td>
				<td>Change the width of the gutter (space between columns)</td>
			</tr>
			<tr>
				<td>$large-gutter</td>
				<td>Variable / </td>
				<td>Change the width of the gutter for medium and up</td>
			</tr>
			<tr>
				<td>$columns</td>
				<td>Variable / integer</td>
				<td>Change the amount of columns</td>
			</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';