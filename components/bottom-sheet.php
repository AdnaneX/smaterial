<?php
$title = 'Bottom sheet';
$description = 'Bottom sheet based on Google\'s Material Design';
$keywords = 'bottom modal, bottom sheet, modal';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Bottom sheet / modal usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can use the bottom sheet or bottom modal in a couple varieties.
		You can use the default, grid icons and header.
	</p>
</section>

<section class="sc-row">
	<h3>Default</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		If you click on the button you can see the default bottom sheet / modal in action.

		<button type="button" class="sc-raised-button sc-bottom-trigger" data-sc-trigger="default">Default</button>
	</p>

	<div class="sc-bottom-sheet" id="default">
		<ul>
			<li><i class="material-icons">cloud</i> Upload</li>
			<li><i class="material-icons">home</i> Home</li>
			<li><i class="material-icons">print</i> Print</li>
		</ul>
	</div>

	<pre class="language-html sc-xs4 sc-s12 sc-m6">
		<code>
&lt;div class="sc-bottom-sheet" id="default">
  &lt;ul>
    &lt;li>&lt;i class="material-icons">cloud&lt;/i> Upload&lt;/li>
    &lt;li>&lt;i class="material-icons">home&lt;/i> Home&lt;/li>
    &lt;li>&lt;i class="material-icons">print&lt;/i> Print&lt;/li>
  &lt;/ul>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Header</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		If you click on the button you can see the header bottom sheet / modal in action.

		<button type="button" class="sc-raised-button sc-bottom-trigger" data-sc-trigger="header">Header</button>
	</p>

	<div class="sc-bottom-sheet sc-bottom-sheet-header" id="header">
		<ul>
			<li class="sc-header">Header</li>
			<li><i class="material-icons">cloud</i> Upload</li>
			<li class="sc-divider"></li>
			<li><i class="material-icons">home</i> Home</li>
			<li><i class="material-icons">print</i> Print</li>
		</ul>
	</div>

	<pre class="language-html sc-xs4 sc-s12 sc-m6">
		<code>
&lt;div class="sc-bottom-sheet sc-bottom-sheet-header" id="header">
  &lt;ul>
    &lt;li class="sc-header">Header&lt;/li>
    &lt;li>&lt;i class="material-icons">cloud&lt;/i> Upload&lt;/li>
    &lt;li class="sc-divider">&lt;/li>
    &lt;li>&lt;i class="material-icons">home&lt;/i> Home&lt;/li>
    &lt;li>&lt;i class="material-icons">print&lt;/i> Print&lt;/li>
  &lt;/ul>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Grid icons</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		If you click on the button you can see the grid icons bottom sheet / modal in action.

	<button type="button" class="sc-raised-button sc-bottom-trigger" data-sc-trigger="grid-icons">Grid icons</button>
	</p>

	<div class="sc-bottom-sheet sc-bottom-sheet-grid" id="grid-icons">
		<ul>
			<li>
				<div class="sc-grid-item">
					<div class="sc-grid-icon">
						<i class="material-icons">home</i>
					</div>
					<div class="sc-grid-content">Example 1</div>
				</div>

				<div class="sc-grid-item">
					<div class="sc-grid-icon">
						<i class="material-icons">cloud</i>
					</div>
					<div class="sc-grid-content">Example 2</div>
				</div>

				<div class="sc-grid-item">
					<div class="sc-grid-icon">
						<i class="material-icons">cached</i>
					</div>
					<div class="sc-grid-content">Example 3</div>
				</div>
			</li>
			<li>
				<div class="sc-grid-item">
					<div class="sc-grid-icon">
						<i class="material-icons">home</i>
					</div>
					<div class="sc-grid-content">Example 4</div>
				</div>

				<div class="sc-grid-item">
					<div class="sc-grid-icon">
						<i class="material-icons">cloud</i>
					</div>
					<div class="sc-grid-content">Example 5</div>
				</div>

				<div class="sc-grid-item">
					<div class="sc-grid-icon">
						<i class="material-icons">cached</i>
					</div>
					<div class="sc-grid-content">Example 6</div>
				</div>
			</li>
		</ul>
	</div>

	<pre class=" language-html sc-xs4 sc-s12 sc-m6">
		<code>
&lt;div class="sc-bottom-sheet sc-bottom-sheet-grid" id="grid-icons">
  &lt;ul>
    &lt;li>
      &lt;div class="sc-grid-item">
        &lt;div class="sc-grid-icon">
          &lt;i class="material-icons">home&lt;/i>
        &lt;/div>
        &lt;div class="sc-grid-content">Example 1&lt;/div>
      &lt;/div>

      &lt;div class="sc-grid-item">
        &lt;div class="sc-grid-icon">
          &lt;i class="material-icons">cloud&lt;/i>
        &lt;/div>
        &lt;div class="sc-grid-content">Example 2&lt;/div>
      &lt;/div>

      &lt;div class="sc-grid-item">
        &lt;div class="sc-grid-icon">
          &lt;i class="material-icons">cached&lt;/i>
        &lt;/div>
        &lt;div class="sc-grid-content">Example 3&lt;/div>
      &lt;/div>
    &lt;/li>
  &lt;/ul>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Music</h3>

	<p class="sc-col sc-sx4 sc-s12 sc-m6">
		You can also use a specific bottom sheet styled for music.
		<button type="button" class="sc-raised-button sc-bottom-trigger" data-sc-trigger="music">Music</button>
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;div class="sc-bottom-sheet sc-bottom-sheet-music" id="music">
  &lt;img src="/">

  &lt;div class="sc-determinate">
    &lt;div class="sc-progressbar" style="width:10%">&lt;/div>
  &lt;/div>

  &lt;div class="sc-info">
    &lt;div class="sc-band">Queen&lt;/div>
    &lt;div class="sc-track">Bohemian Rhapsody&lt;/div>
  &lt;/div>

  &lt;div class="sc-controls">
    &lt;i class="material-icons">fast_rewind&lt;/i>
    &lt;i class="material-icons">play_arrow&lt;/i>
    &lt;i class="material-icons">fast_forward&lt;/i>
  &lt;/div>
&lt;/div>
		</code>
	</pre>

	<div class="sc-bottom-sheet sc-bottom-sheet-music" id="music">
		<img src="/images/album-example.jpg">

		<div class="sc-determinate">
			<div class="sc-progressbar" style="width:10%"></div>
		</div>

		<div class="sc-info">
			<div class="sc-band">Queen</div>
			<div class="sc-track">Bohemian Rhapsody</div>
		</div>

		<div class="sc-controls">
			<i class="material-icons">fast_rewind</i>
			<i class="material-icons">play_arrow</i>
			<i class="material-icons">fast_forward</i>
		</div>
	</div>
</section>

<section class="sc-row">
	<h3>Settings</h3>

	<table>
		<thead>
		<tr>
			<th>Variable</th>
			<th>Options</th>
			<th>Result</th>
		</tr>
		</thead>

		<tbody>
		<tr>
			<td>$bottom-sheet-background</td>
			<td>Color / variable</td>
			<td>Changes the background color</td>
		</tr>
		<tr>
			<td>$bottom-sheet-font-color</td>
			<td>Color / variable</td>
			<td>Changes the font color</td>
		</tr>
		<tr>
			<td>$bottom-sheet-header-font-color</td>
			<td>Color / variable</td>
			<td>Changes the font color of a title / header</td>
		</tr>
		<tr>
			<td>$bottom-sheet-icons-color</td>
			<td>Color / variable</td>
			<td>Changes the icon color</td>
		</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
