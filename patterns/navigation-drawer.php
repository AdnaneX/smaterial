<?php
$title = 'Navigation drawer';
$description = 'Navigation drawer with profile and icon support based on Google\'s Material Design';
$keywords = 'drawer, profile, navigation, drawer, navigation drawer';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Navigation drawer usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The navigation drawer has multiple options. Some of the options support a header item.
	</p>
</section>

<section class="sc-row" id="permanent">
	<h3 class="sc-col sc-xs4 sc-s12">Permanent</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The permanent navigation drawer is recommended for desktop.
		The permanent navigation drawer has three alternatives.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;nav id="sc-drawer" class="sc-drawer">
  &lt;a href="#" class="sc-drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="sc-dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="sc-row" id="permanent-full-height">
	<h4 class="sc-col sc-xs4 sc-s12">Full-height</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		In order to use the full height navigation you need to add the <code class="language-css">.sc-drawer-permanent-full-height</code> class
		to your <code class="language-css">.sc-drawer</code>.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;nav id="sc-drawer" class="sc-drawer sc-drawer-permanent-full-height">
  &lt;a href="#" class="sc-drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="sc-dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>

	<p class="sc-col sc-sx4 sc-s12 sc-m6">
		In addition you can use the <code class="language-css">.sc-drawer-header</code> class to an element.
        By using the <code class="language-html">header</code> element the header also works.
        This method works for every navigation drawer type that supports a header.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;nav id="sc-drawer" class="sc-drawer sc-drawer-permanent-full-height">
  &lt;header class="sc-drawer-header">
    &lt;img src="/images/logo.svg" alt="SMalterial logo">
  &lt;/header>

  &lt;a href="#" class="sc-drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="sc-dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="sc-row" id="permanent-clipped">
	<h4 class="sc-col sc-xs4 sc-s12">Clipped</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		In order to use the clipped navigation you need to add the <code class="language-css">.sc-drawer-permanent-clipped</code> class
		to your <code class="language-css">.sc-drawer</code>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The clipped navigation doesn't support a header.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;nav id="sc-drawer" class="sc-drawer sc-drawer-permanent-clipped">
  &lt;a href="#" class="sc-drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="sc-dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="sc-row" id="permanent-floating">
	<h4 class="sc-col sc-xs4 sc-s12">Floating</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		In order to use the floating navigation you need to add the <code class="language-css">.sc-drawer-permanent-floating</code> class
		to your <code class="language-css">.sc-drawer</code>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The clipped navigation doesn't support a header.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6  sc-offset-m6">
		<code>
&lt;nav id="sc-drawer" class="sc-drawer sc-drawer-permanent-floating">
  &lt;a href="#" class="sc-drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="sc-dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="sc-row" id="persistent">
	<h3 class="sc-col sc-xs4 sc-s12">Persistent</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The persistent menu is recommended for all sizes larger than mobile.
		To use the persistent menu add the <code class="language-css">.sc-drawer-persistent</code> class to your <code class="language-css">.sc-drawer</code>.
	</p>

    <p class="sc-col sc-xs4 sc-s12 sc-m6">
        In order to use the profile dropdown you have to use the <a href="/components/menu.php">menu</a> styling as well.
    </p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;nav id="sc-drawer" class="sc-drawer sc-drawer-persistent">
  &lt;header class="sc-drawer-header">
    &lt;img src="/images/profile-icon.jpg" alt="SMaterial profile example" class="sc-drawer-profile-img">
    &lt;div class="sc-drawer-profile-name">John&lt;/div>
    &lt;div id="sc-drawer-profile-more" class="sc-drawer-profile-more">
      &lt;i class="material-icons sc-trigger" data-sc-trigger="sc-profile">arrow_drop_down&lt;/i>

      &lt;nav class="sc-menu" id="sc-profile">
        &lt;a href="#">Facebook&lt;/a>
        &lt;a href="#">Google Plus&lt;/a>
        &lt;a href="#">Add account&lt;/a>
      &lt;/nav>
    &lt;/div>
    &lt;div>&lt;i class="material-icons sc-arrow sc-trigger" data-sc-trigger="sc-drawer">chevron_left&lt;/i>&lt;/div>
  &lt;/header>

  &lt;a href="#" class="sc-drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="sc-dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="sc-row" id="temporary">
	<h3 class="sc-col sc-xs4 sc-s12">Temporary</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		To use the temporary menu add the <code class="language-css">.sc-drawer-temporary</code> class to your <code class="language-css">.sc-drawer</code>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The temporary menu has the most options for the header.
		The <code class="language-css">.sc-scrum</code> class can be added for background images that are light.
        In order to use the profile dropdown you have to use the <a href="/components/menu.php">menu</a> styling as well.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;nav id="sc-drawer" class="sc-drawer sc-drawer-temporary">
  &lt;header class="sc-drawer-header">
    &lt;img src="/images/drawer-background.jpg" class="sc-drawer-profile-background">
      &lt;div class="sc-scrim">&lt;/div>
      &lt;img src="/images/profile-icon.jpg" class="sc-drawer-profile-img">
      &lt;div class="sc-drawer-profile-name">John Doe&lt;/div>
      &lt;div class="sc-drawer-profile-email">johndoe&#64;gmail.com&lt;/div>
      &lt;div class="sc-drawer-profile-more">
        &lt;i class="material-icons sc-trigger" data-sc-trigger="sc-profile">arrow_drop_down&lt;/i>

         &lt;nav class="sc-menu" id="sc-profile">
           &lt;a href="#">Facebook&lt;/a>
           &lt;a href="#">Google Plus&lt;/a>
           &lt;a href="#">Add account&lt;/a>
         &lt;/nav>
      &lt;/div>
  &lt;/header>

  &lt;a href="#" class="sc-drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="sc-dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';