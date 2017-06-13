<?php
$title = 'Cards';
$description = 'Cards based on Google\'s Material Design. Each cart consist out of prebuilt blocks. ';
$keywords = 'cards';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Cards usage</h2>

	<p class="col xs4 s12 m6">
		There are many different variations of cards.
		You can make each card with the blocks provided.
		Each block has sub classes to follow the design specs.
	</p>
</section>

<section class="row">
	<h3 class="col xs4 s12">Image with text</h3>

	<p class="col xs4 s12 m6">
		A very basic card with just an image and text.
		The <code class="language-css">.card-top</code> class makes sure the image gets rounded edges.
	</p>

	<div class="col xs4 s12 m2">
		<div class="card">
			<<?php echo ($amp ? 'amp-img layout="responsive"' : 'img'); ?> src="/images/album-example.jpg" class="card-top">

			<div class="card-supporting">
				This is supporting text.
			</div>
		</div>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;div class="card">
  &lt;img src="/images/album-example.jpg" class="card-top">

  &lt;div class="card-supporting">
    This is supporting text.
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Avatar, title and subtitle</h3>

	<p class="col xs4 s12 m6">
		The <code class="language-css">.card-avatar</code> class makes sure the image gets the right styling.
		The <code class="language-css">.card-primary-small</code> class makes the title smaller.
		The <code class="language-css">.card-primary-additional</code> and
		<code class="language-css">.card-supporting-additional</code> classes gives the right padding's.
		The <code class="language-css">.card-actions</code> class gives the right margins between actions.
	</p>

	<div class="col xs4 s12 m3">
		<div class="card">
			<<?php echo ($amp ? 'amp-img layout="responsive"' : 'img'); ?> src="/images/profile-icon.jpg" class="card-avatar">
			<div class="card-primary card-primary-small card-primary-additional">
				This is a title
				<div class="subhead-1">Subhead</div>
			</div>
			<<?php echo ($amp ? 'amp-img layout="responsive"' : 'img'); ?> src="/images/album-example.jpg">

			<div class="card-supporting card-supporting-additional">
				This is supporting text.
			</div>

			<div class="card-actions">
				<button class="flat-button">Action 1</button>
				<button class="flat-button">Action 2</button>
			</div>
		</div>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;div class="card">
  &lt;img src="/images/profile-icon.jpg" class="card-avatar">
  &lt;div class="card-primary card-primary-small card-primary-additional">
    This is a title
    &lt;div class="subhead-1">Subhead&lt;/div>
  &lt;/div>
  &lt;img src="/images/album-example.jpg">

  &lt;div class="card-supporting card-supporting-additional">
    This is supporting text.
  &lt;/div>

  &lt;div class="card-actions">
    &lt;button class="flat-button">Action 1&lt;/button>
    &lt;button class="flat-button">Action 2&lt;/button>
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Full background image</h3>

	<p class="col xs4 s12 m6">
		The <code class="language-css">.card-background</code> class will make sure the image has rounded edges and is the background of the card.
		The <code class="language-css">.card-content</code> class is used to make the text white and gives the background an scrim.
		<strong>NOTE*</strong> <code class="language-css">.card-content</code> class might change.
	</p>

	<div class="col xs4 s12 m3">
		<div class="card">
			<<?php echo ($amp ? 'amp-img layout="responsive"' : 'img'); ?> src="/images/album-example.jpg" class="card-background">

			<div class="card-content">
				<div class="card-primary card-primary-additional">
					Title goes here
					<div class="subhead-1">Subtitle goes here</div>
				</div>

				<div class="card-actions">
					<button class="flat-button">Action 1</button>
					<button class="flat-button">Action 2</button>
				</div>
			</div>
		</div>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;div class="card">
  &lt;img src="/images/album-example.jpg" class="card-background">

  &lt;div class="card-content">
    &lt;div class="card-primary card-primary-additional">
      Title goes here
      &lt;div class="subhead-1">Subtitle goes here&lt;/div>
    &lt;/div>

    &lt;div class="card-actions">
      &lt;button class="flat-button">Action 1&lt;/button>
      &lt;button class="flat-button">Action 2&lt;/button>
    &lt;/div>
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';