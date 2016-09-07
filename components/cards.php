<?php
$title = 'Cards';
$description = 'Cards based on Google\'s Material Design';
$keywords = 'material design, smaterial, cards';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Cards usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		There are many different variations of cards.
		You can make each card with the blocks provided.
		Each block has sub classes to follow the design specs.
	</p>
</section>

<section class="sc-row">
	<h3>Image with text</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		A very basic card with just an image and text.
		The <code class="language-css">.sc-card-top</code> class makes sure the image gets rounded edges.
	</p>

	<div class="sc-col sc-xs4 sc-s12 sc-m2">
		<div class="sc-card">
			<img src="/images/album-example.jpg" class="sc-card-top">

			<div class="sc-card-supporting">
				This is supporting text.
			</div>
		</div>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-card">
  &lt;img src="/images/album-example.jpg" class="sc-card-top">

  &lt;div class="sc-card-supporting">
    This is supporting text.
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Avatar, title and subtitle</h3>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-card">
			<div class="sc-card-primary sc-card-primary-small sc-card-primary-additional">
				This is a title
				<div class="sc-subhead-1">Subhead</div>
			</div>
			<img src="/images/album-example.jpg">

			<div class="sc-card-supporting sc-card-supporting-additional">
				This is supporting text.
			</div>

			<div class="sc-card-actions">
				<button class="sc-flat-button">Action 1</button>
				<button class="sc-flat-button">Action 2</button>
			</div>
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';