<?php
$title = 'Bottom navigation';
$description = 'Bottom navigation based on Google\'s Material Design';
$keywords = 'material design, smaterial, bottom navigation, bottom menu, bottom shifting';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Bottom navigation usage</h2>

	<p class="sc-col sc-s12 sc-m6">
		You can use the bottom navigation to easily switch between top-level views in a single tap.
		There are two types of bottom navigation you can use (default and shifting)
	</p>


</section>

<section class="sc-row">
	<h3>Default bottom navigation</h3>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
&lt;nav class="sc-bottom-nav">
  &lt;ul>
    &lt;li>
      &lt;a href="#">
        &lt;i class="material-icons">favorite&lt;/i>

        &lt;div class="sc-content">
          Favorite
        &lt;/div>
      &lt;/a>
    &lt;/li>
    &lt;li>
      &lt;a href="#" class="sc-active">
        &lt;i class="material-icons">cloud&lt;/i>

        &lt;div class="sc-content">
          Cloud
        &lt;/div>
      &lt;/a>
    &lt;/li>
    &lt;li>
      &lt;a href="#">
        &lt;i class="material-icons">file_upload&lt;/i>

        &lt;div class="sc-content">
          Upload
        &lt;/div>
      &lt;/a>
    &lt;/li>
  &lt;/ul>
&lt;/nav>
		</pre>
	</code>
</section>

<Section class="sc-row">
	<h3>Shifting bottom navigation</h3>

	<code class="sc-col sc-s12 sc-m6">
		<pre>
&lt;nav class="sc-bottom-shifting">
  &lt;ul>
    &lt;li>
      &lt;a href="#">
        &lt;i class="material-icons">favorite&lt;/i>

        &lt;div class="sc-content">
          Favorite
        &lt;/div>
      &lt;/a>
    &lt;/li>
    &lt;li>
      &lt;a href="#" class="sc-active">
        &lt;i class="material-icons">cloud&lt;/i>

        &lt;div class="sc-content">
          Cloud
        &lt;/div>
      &lt;/a>
    &lt;/li>
    &lt;li>
      &lt;a href="#">
        &lt;i class="material-icons">file_upload&lt;/i>

        &lt;div class="sc-content">
          Upload
        &lt;/div>
      &lt;/a>
    &lt;/li>
  &lt;/ul>
&lt;/nav>
		</pre>
	</code>
</Section>

<nav class="sc-bottom-nav">
	<ul>
		<li>
			<a href="#">
				<i class="material-icons">favorite</i>

				<div class="sc-content">
					Favorite
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="sc-active">
				<i class="material-icons">cloud</i>

				<div class="sc-content">
					Cloud
				</div>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">file_upload</i>

				<div class="sc-content">
					Upload
				</div>
			</a>
		</li>
	</ul>
</nav>

<nav class="sc-bottom-shifting">
	<ul>
		<li>
			<a href="#">
				<i class="material-icons">favorite</i>

				<div class="sc-content">
					Favorite
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="sc-active">
				<i class="material-icons">cloud</i>

				<div class="sc-content">
					Cloud
				</div>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">file_upload</i>

				<div class="sc-content">
					Upload
				</div>
			</a>
		</li>
	</ul>
</nav>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';