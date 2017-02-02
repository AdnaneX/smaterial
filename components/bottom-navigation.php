<?php
$title = 'Bottom navigation';
$description = 'Bottom navigation based on Google\'s Material Design';
$keywords = 'bottom navigation, bottom menu, bottom shifting';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Bottom navigation usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can use the bottom navigation to easily switch between top-level views in a single tap.
		There are two types of bottom navigation you can use (default and shifting)
	</p>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Default bottom navigation</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<button class="sc-raised-button sc-trigger" data-sc-trigger="bottom-nav">Show</button>
	</p>

	<pre class="language-html sc-xs4 sc-s12 sc-m6">
		<code>
&lt;nav class="sc-bottom-nav">
  &lt;a href="#">
    &lt;i class="material-icons">favorite&lt;/i>

    &lt;div class="sc-content">
      Favorite
    &lt;/div>
  &lt;/a>
  &lt;a href="#" class="sc-active">
    &lt;i class="material-icons">cloud&lt;/i>

    &lt;div class="sc-content">
      Cloud
    &lt;/div>
  &lt;/a>
  &lt;a href="#">
    &lt;i class="material-icons">file_upload&lt;/i>

    &lt;div class="sc-content">
      Upload
    &lt;/div>
  &lt;/a>
&lt;/nav>
		</code>
	</pre>
</section>

<Section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Shifting bottom navigation</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<button class="sc-raised-button sc-trigger" data-sc-trigger="shifting-nav">Show</button>
	</p>

	<pre class="language-html sc-xs4 sc-s12 sc-m6">
		<code>
&lt;nav class="sc-bottom-shifting">
  &lt;a href="#">
    &lt;i class="material-icons">favorite&lt;/i>

    &lt;div class="sc-content">
      Favorite
    &lt;/div>
  &lt;/a>
  &lt;a href="#" class="sc-active">
    &lt;i class="material-icons">cloud&lt;/i>

    &lt;div class="sc-content">
      Cloud
    &lt;/div>
  &lt;/a>
  &lt;a href="#">
    &lt;i class="material-icons">file_upload&lt;/i>

    &lt;div class="sc-content">
      Upload
    &lt;/div>
  &lt;/a>
&lt;/nav>
		</code>
	</pre>
</Section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Settings</h3>

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

<nav class="sc-bottom-nav" id="bottom-nav">
    <a href="#">
        <i class="material-icons">favorite</i>

        <div class="sc-content">
            Favorite
        </div>
    </a>
    <a href="#" class="sc-active">
        <i class="material-icons">cloud</i>

        <div class="sc-content">
            Cloud
        </div>
    </a>
    <a href="#">
        <i class="material-icons">file_upload</i>

        <div class="sc-content">
            Upload
        </div>
    </a>
</nav>

<nav class="sc-bottom-shifting" id="shifting-nav">
    <a href="#">
        <i class="material-icons">favorite</i>

        <div class="sc-content">
            Favorite
        </div>
    </a>
    <a href="#" class="sc-active">
        <i class="material-icons">cloud</i>

        <div class="sc-content">
            Cloud
        </div>
    </a>
    <a href="#">
        <i class="material-icons">file_upload</i>

        <div class="sc-content">
            Upload
        </div>
    </a>
</nav>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';