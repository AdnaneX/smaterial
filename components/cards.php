<?php
$title = 'Cards';
$description = 'Cards based on Google\'s Material Design';
$keywords = 'cards';

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

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">.sc-card-avatar</code> class makes sure the image gets the right styling.
		The <code class="language-css">.sc-card-primary-small</code> class makes the title smaller.
		The <code class="language-css">.sc-card-primary-additional</code> and
		<code class="language-css">.sc-card-supporting-additional</code> classes gives the right padding's.
		The <code class="language-css">.sc-card-actions</code> class gives the right margins between actions.
	</p>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-card">
			<img src="/images/profile-icon.jpg" class="sc-card-avatar">
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

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-card">
  &lt;img src="/images/profile-icon.jpg" class="sc-card-avatar">
  &lt;div class="sc-card-primary sc-card-primary-small sc-card-primary-additional">
    This is a title
    &lt;div class="sc-subhead-1">Subhead&lt;/div>
  &lt;/div>
  &lt;img src="/images/album-example.jpg">

  &lt;div class="sc-card-supporting sc-card-supporting-additional">
    This is supporting text.
  &lt;/div>

  &lt;div class="sc-card-actions">
    &lt;button class="sc-flat-button">Action 1&lt;/button>
    &lt;button class="sc-flat-button">Action 2&lt;/button>
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Full background image</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The <code class="language-css">.sc-card-background</code> class will make sure the image has rounded edges and is the background of the card.
		The <code class="language-css">.sc-card-content</code> class is used to make the text white and gives the background an scrim.
		<strong>NOTE*</strong> <code class="language-css">.sc-card-content</code> class might change.
	</p>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-card">
			<img src="/images/album-example.jpg" class="sc-card-background">

			<div class="sc-card-content">
				<div class="sc-card-primary sc-card-primary-additional">
					Title goes here
					<div class="sc-subhead-1">Subtitle goes here</div>
				</div>

				<div class="sc-card-actions">
					<button class="sc-flat-button">Action 1</button>
					<button class="sc-flat-button">Action 2</button>
				</div>
			</div>
		</div>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-card">
  &lt;img src="/images/album-example.jpg" class="sc-card-background">

  &lt;div class="sc-card-content">
    &lt;div class="sc-card-primary sc-card-primary-additional">
      Title goes here
      &lt;div class="sc-subhead-1">Subtitle goes here&lt;/div>
    &lt;/div>

    &lt;div class="sc-card-actions">
      &lt;button class="sc-flat-button">Action 1&lt;/button>
      &lt;button class="sc-flat-button">Action 2&lt;/button>
    &lt;/div>
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';