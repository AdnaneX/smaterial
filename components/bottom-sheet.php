<?php
$title = 'Bottom sheet';
$description = 'Bottom sheet based on Google\'s Material Design. The bottom sheet has several styling options being default, header, grid and music';
$keywords = 'bottom modal, bottom sheet, modal';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">Bottom sheet / modal usage</h2>

	<p class="col xs4 m6">
		You can use the bottom sheet or bottom modal in a couple varieties.
		You can use the default, grid icons and header.
	</p>
</section>

<section class="row">
	<h3 class="col xs4">Default</h3>

	<p class="col xs4 m6">
		If you click on the button you can see the default bottom sheet / modal in action.

		<button type="button" class="raised-button trigger" data-trigger="default">Default</button>
	</p>

	<div class="bottom-sheet" id="default">
		<ul>
            <li><a href="#"><i class="material-icons">cloud</i> Upload</a></li>
            <li><a href="#"><i class="material-icons">home</i> Home</a></li>
			<li><a href="#"><i class="material-icons">print</i> Print</a></li>
		</ul>
	</div>

	<pre class="language-html xs4 s12 m6">
		<code>
&lt;div class="bottom-sheet" id="default">
  &lt;ul>
    &lt;li>&lt;a href="">&lt;i class="material-icons">cloud&lt;/i> Upload&lt;/a>&lt;/li>
    &lt;li>&lt;a href="">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
    &lt;li>&lt;a href="">&lt;i class="material-icons">print&lt;/i> Print&lt;/a>&lt;/li>
  &lt;/ul>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4">Header</h3>

	<p class="col xs4 m6">
		If you click on the button you can see the header bottom sheet / modal in action.

		<button type="button" class="raised-button trigger" data-trigger="header">Header</button>
	</p>

	<div class="bottom-sheet" id="header">
		<ul>
			<li class="bottom-sheet-header">Header</li>
            <li><a href="#"><i class="material-icons">cloud</i> Upload</a></li>
			<li class="divider"></li>
            <li><a href="#"><i class="material-icons">home</i> Home</a></li>
            <li><a href="#"><i class="material-icons">print</i> Print</a></li>
		</ul>
	</div>

	<pre class="language-html xs4 s12 m6">
		<code>
&lt;div class="bottom-sheet" id="header">
  &lt;ul>
    &lt;li class="bottom-sheet-header">Header&lt;/li>
    &lt;li>&lt;a href="#">&lt;i class="material-icons">cloud&lt;/i> Upload&lt;/a>&lt;/li>
    &lt;li class="divider">&lt;/li>
    &lt;li>&lt;a href="#">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
    &lt;li>&lt;a href="#">&lt;i class="material-icons">print&lt;/i> Print&lt;/a>&lt;/li>
  &lt;/ul>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4">Grid</h3>

	<p class="col xs4 m6">
		If you click on the button you can see the grid bottom sheet / modal in action.

	    <button type="button" class="raised-button trigger" data-trigger="grid-icons">Grid </button>
	</p>

	<div class="bottom-sheet-grid" id="grid-icons">
        <div class="row">
            <div class="grid-item">
                <i class="material-icons">home</i>
                <div class="grid-content">Example 1</div>
            </div>

            <div class="grid-item">
                <i class="material-icons">cloud</i>
                <div class="grid-content">Example 2</div>
            </div>

            <div class="grid-item">
                <i class="material-icons">cached</i>
                <div class="grid-content">Example 3</div>
            </div>
        </div>

        <div class="row">
            <a href="#" class="grid-item">
                <i class="material-icons">save</i>
                <div class="grid-content">Example 7</div>
            </a>
        </div>
	</div>

	<pre class=" language-html xs4 s12 m6">
		<code>
&lt;div class="bottom-sheet-grid" id="grid-icons">
  &lt;div class="row">
    &lt;div class="grid-item">
      &lt;div class="grid-icon">
        &lt;i class="material-icons">home&lt;/i>
      &lt;/div>
      &lt;div class="grid-content">Example 1&lt;/div>
    &lt;/div>

    &lt;div class="grid-item">
      &lt;div class="grid-icon">
        &lt;i class="material-icons">cloud&lt;/i>
      &lt;/div>
      &lt;div class="grid-content">Example 2&lt;/div>
    &lt;/div>

    &lt;div class="grid-item">
      &lt;div class="grid-icon">
        &lt;i class="material-icons">cached&lt;/i>
      &lt;/div>
      &lt;div class="grid-content">Example 3&lt;/div>
    &lt;/div>
  &lt;/div>

  &lt;div class="row">
    &lt;a href="#" class="grid-item">
      &lt;div class="grid-icon">
        &lt;i class="material-icons">save&lt;/i>
      &lt;/div>
      &lt;div class="grid-content">Example 7&lt;/div>
    &lt;/a>
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
    <h3 class="col xs4">Grid header</h3>

    <p class="col xs4 s6">
        The grid also provides a header and divider.

        <button class="raised-button trigger" data-trigger="grid-header">Grid header</button>
    </p>

    <div class="bottom-sheet-grid" id="grid-header">
        <div class="bottom-sheet-grid-header">Header</div>
        <div class="row">
            <div class="grid-item">
                <i class="material-icons">home</i>
                <div class="grid-content">Example 1</div>
            </div>

            <div class="grid-item">
                <i class="material-icons">cloud</i>
                <div class="grid-content">Example 2</div>
            </div>

            <div class="grid-item">
                <i class="material-icons">cached</i>
                <div class="grid-content">Example 3</div>
            </div>
        </div>

        <div class="divider"></div>

        <div class="row">
            <a href="#" class="grid-item">
                <i class="material-icons">save</i>
                <div class="grid-content">Example 7</div>
            </a>
        </div>
    </div>
</section>
    <!--
<section class="row">
	<h3 class="col xs4">Music</h3>

	<p class="col sx4 s12 m6">
		You can also use a specific bottom sheet styled for music.
		<button type="button" class="raised-button trigger" data-trigger="music">Music</button>
	</p>

	<pre class="language-html col xs4 s12 m6">
		<code>
&lt;div class="bottom-sheet bottom-sheet-music" id="music">
  &lt;img src="/">

  &lt;div class="determinate">
    &lt;div class="progressbar" style="width:10%">&lt;/div>
  &lt;/div>

  &lt;div class="info">
    &lt;div class="band">Queen&lt;/div>
    &lt;div class="track">Bohemian Rhapsody&lt;/div>
  &lt;/div>

  &lt;div class="controls">
    &lt;i class="material-icons">fast_rewind&lt;/i>
    &lt;i class="material-icons">play_arrow&lt;/i>
    &lt;i class="material-icons">fast_forward&lt;/i>
  &lt;/div>
&lt;/div>
		</code>
	</pre>

	<div class="bottom-sheet bottom-sheet-music" id="music">
		<<?php echo ($amp ? 'amp-img layout="responsive" width="50px" height="50px"' : 'img'); ?> src="/images/album-example.jpg">

		<div class="determinate">
			<div class="progressbar" <?php echo ($amp ? '' : 'style="width:10%"'); ?>></div>
		</div>

		<div class="info">
			<div class="band">Queen</div>
			<div class="track">Bohemian Rhapsody</div>
		</div>

		<div class="controls">
			<i class="material-icons">fast_rewind</i>
			<i class="material-icons">play_arrow</i>
			<i class="material-icons">fast_forward</i>
		</div>
	</div>
</section>-->

<section class="row">
	<h3 class="col xs4">Settings</h3>

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
