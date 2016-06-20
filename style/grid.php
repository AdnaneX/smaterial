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

	<table>
		<thead>
			<tr>
				<th>Breakpoint</th>
				<th>Window</th>
				<th>Columns</th>
				<th>Gutter</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>0</td>
				<td>xs</td>
				<td>4</td>
				<td>16</td>
			</tr>
			<tr>
				<td>480</td>
				<td>xs</td>
				<td>4</td>
				<td>16</td>
			</tr>
			<tr>
				<td>600</td>
				<td>s</td>
				<td>8</td>
				<td>16</td>
			</tr>
			<tr>
				<td>720</td>
				<td>s</td>
				<td>12</td>
				<td>24</td>
			</tr>
		   	<tr>
				<td>960</td>
				<td>s</td>
				<td>12</td>
				<td>24</td>
			</tr>
			<tr>
				<td>1280</td>
				<td>m</td>
				<td>12</td>
				<td>24</td>
			</tr>
			<tr>
				<td>1600</td>
				<td>l</td>
				<td>12</td>
				<td>24</td>
			</tr>
			<tr>
				<td>1920</td>
				<td>xl</td>
				<td>12</td>
				<td>24</td>
			</tr>
		</tbody>
	</table>
</section>

<section class="sc-row">
	<h3>Row</h3>

	<p class="sc-col sc-s12 sc-m6">
		You can use <code>.sc-row</code> so that it's all in one line.
	</p>
</section>

<section class="sc-row">
	<h3>Columns</h3>

	<div class="sc-row">
		<p class="sc-col sc-s12 sc-m6">
			There are 5 breakpoints <code>.sc-xs</code>, <code>.sc-s</code>, <code>.sc-m</code>, <code>.sc-l</code> and <code>.sc-xl</code>
			to suit your needs.
			In order to make the columns work you need to wrap it inside a <code>.sc-row</code>
		</p>

		<pre class=" language-html sc-col sc-s12 sc-m6">
			<code>
&lt;div class="sc-row">
  &lt;div class="sc-col sc-s12 sc-m6">
    Example
  &lt;/div>
&lt;/div>
			</code>
		</pre>
	</div>

	<div class="sc-row">
		<p class="sc-col sc-s12 sc-m6">
			You can also use the row and columns in SCSS by simply extending the class.
		</p>

		<code class="sc-col sc-s12 sc-m6">
			<pre>
@extend .sc-col, .sc-s12, .sc-m6;
			</pre>
		</code>
	</div>

	<p class="sc-col sc-s12 sc-m6">
		To follow the <a href="//www.google.com/design/spec/layout/responsive-ui.html" target="_blank">Material Design</a>
		specifications as closely as possible some breakpoints have different settings.
		<code>.sc-xs</code> Only has 4 columns, <code>sc-s</code> has 8 to 12 columns depending on the width of the screen.
	</p>
</section>

<section class="sc-row">
	<h3>Push, pull and offset</h3>

	<p class="sc-col sc-s12 sc-m6">
		You can also push, pull and offset which work the same as the columns.
		So <code>.sc-push-s</code>, <code>.sc-pull-s</code>, <code>.sc-offset-s</code> these examples are for small screen but they work with all sizes named before.
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
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
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Hidden</h3>

	<p class="sc-col sc-s12 sc-m6">
		If you want an element to be hidden for a certain device you can use the following classes:
		<code>.sc-xs-hidden</code>, <code>.sc-s-hidden</code>, <code>.sc-m-hidden</code>, <code>.sc-l-hidden</code> and <code>.sc-xl-hidden</code>.
	</p>

	<div class="sc-row">
		<div class="sc-col sc-s2 sc-xs-hidden">
			XSmall hidden
		</div>

		<div class="sc-col sc-s4 sc-s-hidden">
			Small hidden
		</div>

		<div class="sc-col sc-s4 sc-m-hidden">
			Medium hidden
		</div>

		<div class="sc-col sc-s4 sc-l-hidden">
			Large hidden
		</div>

		<div class="sc-col sc-s2 sc-xl-hidden">
			XLarge hidden
		</div>
	</div>

	<pre class="language-html sc-col s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-col sc-s4 sc-s-hidden">
  Small hidden
&lt;/div>

&lt;div class="sc-col sc-s4 sc-m-hidden">
  Medium hidden
&lt;/div>

&lt;div class="sc-col sc-s4 sc-l-hidden">
  Large hidden
&lt;/div>
		</code>
	</pre>
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