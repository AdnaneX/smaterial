<?php
$title = 'Bottom navigation';
$description = 'Bottom navigation based on Google\'s Material Design. The bottom navigation has a default and shifting option';
$keywords = 'bottom navigation, bottom menu, bottom shifting';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="row">
	<h2 class="col xs4 s12">Bottom navigation usage</h2>

	<p class="col xs4 s12 m6">
		You can use the bottom navigation to easily switch between top-level views in a single tap.
		There are two types of bottom navigation you can use (default and shifting)
	</p>
</section>

<section class="row">
	<h3 class="col xs4 s12">Default bottom navigation</h3>

	<p class="col xs4 s12 m6">
		<button class="raised-button trigger" data-trigger="bottom-nav">Show</button>
	</p>

	<pre class="language-html xs4 s12 m6">
		<code>
&lt;nav class="bottom-nav">
  &lt;a href="#">
    &lt;i class="material-icons">favorite&lt;/i>

    &lt;div class="content">
      Favorite
    &lt;/div>
  &lt;/a>
  &lt;a href="#" class="active">
    &lt;i class="material-icons">cloud&lt;/i>

    &lt;div class="content">
      Cloud
    &lt;/div>
  &lt;/a>
  &lt;a href="#">
    &lt;i class="material-icons">file_upload&lt;/i>

    &lt;div class="content">
      Upload
    &lt;/div>
  &lt;/a>
&lt;/nav>
		</code>
	</pre>
</section>

<Section class="row">
	<h3 class="col xs4 s12">Shifting bottom navigation</h3>

	<p class="col xs4 s12 m6">
		<button class="raised-button trigger" data-trigger="shifting-nav">Show</button>
	</p>

	<pre class="language-html xs4 s12 m6">
		<code>
&lt;nav class="bottom-shifting">
  &lt;a href="#">
    &lt;i class="material-icons">favorite&lt;/i>

    &lt;div class="content">
      Favorite
    &lt;/div>
  &lt;/a>
  &lt;a href="#" class="active">
    &lt;i class="material-icons">cloud&lt;/i>

    &lt;div class="content">
      Cloud
    &lt;/div>
  &lt;/a>
  &lt;a href="#">
    &lt;i class="material-icons">file_upload&lt;/i>

    &lt;div class="content">
      Upload
    &lt;/div>
  &lt;/a>
&lt;/nav>
		</code>
	</pre>
</Section>

<section class="row">
	<h3 class="col xs4 s12">Settings</h3>

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
				<td>$bottom-nav-background</td>
				<td>Color / variable</td>
				<td>Changes the background color</td>
			</tr>
			<tr>
				<td>$bottom-nav-font-color</td>
				<td>Color / variable</td>
				<td>Changes the font color</td>
			</tr>
		</tbody>
	</table>
</section>

<nav class="bottom-nav" id="bottom-nav">
    <a href="#">
        <i class="material-icons">favorite</i>

        <div class="content">
            Favorite
        </div>
    </a>
    <a href="#" class="active">
        <i class="material-icons">cloud</i>

        <div class="content">
            Cloud
        </div>
    </a>
    <a href="#">
        <i class="material-icons">file_upload</i>

        <div class="content">
            Upload
        </div>
    </a>
</nav>

<nav class="bottom-shifting" id="shifting-nav">
    <a href="#">
        <i class="material-icons">favorite</i>

        <div class="content">
            Favorite
        </div>
    </a>
    <a href="#" class="active">
        <i class="material-icons">cloud</i>

        <div class="content">
            Cloud
        </div>
    </a>
    <a href="#">
        <i class="material-icons">file_upload</i>

        <div class="content">
            Upload
        </div>
    </a>
</nav>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';