<?php
$title = 'Bottom sheet';
$description = 'Bottom sheet based on Googles Material Design';
$keywords = 'material design, smaterial, bottom modal, bottom sheet, modal';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Bottom sheet / modal usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		You can use the bottom sheet or bottom modal in a couple varieties.
		You can use the default, grid icons and header.
	</p>
</section>

<section class="sm-row">
	<h3>Default bottom modal / sheet</h3>

	<p class="sm-col sm-s12 sm-m6">
		If you click on the button you can see the default bottom sheet / modal in action.

		<button type="button" class="sm-raised-button sm-bottom-trigger" data-sm-trigger="default">Default</button>
	</p>

	<div class="sm-bottom-sheet" id="default">
		<ul>
			<li><i class="material-icons">cloud</i> Upload</li>
			<li><i class="material-icons">home</i> Home</li>
			<li><i class="material-icons">print</i> Print</li>
		</ul>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-bottom-sheet" id="default">
  &lt;ul>
    &lt;li>&lt;i class="material-icons">cloud&lt;/i> Upload&lt;/li>
    &lt;li>&lt;i class="material-icons">home&lt;/i> Home&lt;/li>
    &lt;li>&lt;i class="material-icons">print&lt;/i> Print&lt;/li>
  &lt;/ul>
&lt;/div>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Header bottom modal / sheet</h3>

	<p class="sm-col sm-s12 sm-m6">
		If you click on the button you can see the header bottom sheet / modal in action.

		<button type="button" class="sm-raised-button sm-bottom-trigger" data-sm-trigger="header">Header</button>
	</p>

	<div class="sm-bottom-sheet sm-bottom-sheet-header" id="header">
		<ul>
			<li class="sm-header">Header</li>
			<li><i class="material-icons">cloud</i> Upload</li>
			<li class="sm-divider"></li>
			<li><i class="material-icons">home</i> Home</li>
			<li><i class="material-icons">print</i> Print</li>
		</ul>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-bottom-sheet sm-bottom-sheet-header" id="header">
  &lt;ul>
    &lt;li class="sm-header">Header&lt;/li>
    &lt;li>&lt;i class="material-icons">cloud&lt;/i> Upload&lt;/li>
    &lt;li class="sm-divider">&lt;/li>
    &lt;li>&lt;i class="material-icons">home&lt;/i> Home&lt;/li>
    &lt;li>&lt;i class="material-icons">print&lt;/i> Print&lt;/li>
  &lt;/ul>
&lt;/div>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Grid icons bottom sheet / modal</h3>

	<p class="sm-col sm-s12 sm-m6">
		If you click on the button you can see the grid icons bottom sheet / modal in action.

		<button type="button" class="sm-raised-button sm-bottom-trigger" data-sm-trigger="grid-icons">Grid icons</button>
	</p>

	<div class="sm-bottom-sheet sm-bottom-sheet-grid" id="grid-icons">
		<ul>
			<li>
				<div class="sm-grid-item">
					<div class="sm-grid-icon">
						<i class="material-icons">home</i>
					</div>
					<div class="sm-grid-content">Example 1</div>
				</div>

				<div class="sm-grid-item">
					<div class="sm-grid-icon">
						<i class="material-icons">cloud</i>
					</div>
					<div class="sm-grid-content">Example 2</div>
				</div>

				<div class="sm-grid-item">
					<div class="sm-grid-icon">
						<i class="material-icons">cached</i>
					</div>
					<div class="sm-grid-content">Example 3</div>
				</div>
			</li>
			<li>
				<div class="sm-grid-item">
					<div class="sm-grid-icon">
						<i class="material-icons">home</i>
					</div>
					<div class="sm-grid-content">Example 4</div>
				</div>

				<div class="sm-grid-item">
					<div class="sm-grid-icon">
						<i class="material-icons">cloud</i>
					</div>
					<div class="sm-grid-content">Example 5</div>
				</div>

				<div class="sm-grid-item">
					<div class="sm-grid-icon">
						<i class="material-icons">cached</i>
					</div>
					<div class="sm-grid-content">Example 6</div>
				</div>
			</li>
		</ul>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-bottom-sheet sm-bottom-sheet-grid" id="grid-icons">
  &lt;ul>
    &lt;li>
      &lt;div class="sm-grid-item">
        &lt;div class="sm-grid-icon">
          &lt;i class="material-icons">home&lt;/i>
        &lt;/div>
        &lt;div class="sm-grid-content">Example 1&lt;/div>
      &lt;/div>

      &lt;div class="sm-grid-item">
        &lt;div class="sm-grid-icon">
          &lt;i class="material-icons">cloud&lt;/i>
        &lt;/div>
        &lt;div class="sm-grid-content">Example 2&lt;/div>
      &lt;/div>

      &lt;div class="sm-grid-item">
        &lt;div class="sm-grid-icon">
          &lt;i class="material-icons">cached&lt;/i>
        &lt;/div>
        &lt;div class="sm-grid-content">Example 3&lt;/div>
      &lt;/div>
    &lt;/li>
  &lt;/ul>
&lt;/div>
		</pre>
	</code>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
