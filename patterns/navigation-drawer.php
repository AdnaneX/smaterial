<?php
$title = 'Navigation drawer';
$description = 'Navigation drawer with profile and icon support based on Google\'s Material Design';
$keywords = 'drawer, profile, navigation, drawer, navigation drawer';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="row">
	<h2 class="col xs4">Navigation drawer usage</h2>

	<p class="col xs4 m6">
		The navigation drawer has multiple options. Some of the options support a header item.
	</p>
</section>

<section class="row" id="permanent">
	<h3 class="col xs4">Permanent</h3>

	<p class="col xs4 m6">
		The permanent navigation drawer is recommended for desktop.
		The permanent navigation drawer has three alternatives.
	</p>

	<pre class="language-html col xs4 s12 m6">
		<code>
&lt;nav id="drawer" class="drawer">
  &lt;a href="#" class="drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="row" id="permanent-full-height">
	<h4 class="col xs4">Full-height</h4>

	<p class="col xs4 m6">
		In order to use the full height navigation you need to add the <code class="language-css">.drawer-permanent-full-height</code> class
		to your <code class="language-css">.drawer</code>.
	</p>

	<pre class="language-html col xs4 s12 m6">
		<code>
&lt;nav id="drawer" class="drawer drawer-permanent-full-height">
  &lt;a href="#" class="drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>

	<p class="col sx4 s12 m6">
		In addition you can use the <code class="language-css">.drawer-header</code> class to an element.
        By using the <code class="language-html">header</code> element the header also works.
        This method works for every navigation drawer type that supports a header.
	</p>

	<pre class="language-html col xs4 s12 m6">
		<code>
&lt;nav id="drawer" class="drawer drawer-permanent-full-height">
  &lt;header class="drawer-header">
    &lt;img src="/images/logo.svg" alt="SMalterial logo">
  &lt;/header>

  &lt;a href="#" class="drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="row" id="permanent-clipped">
	<h4 class="col xs4">Clipped</h4>

	<p class="col xs4 m6">
		In order to use the clipped navigation you need to add the <code class="language-css">.drawer-permanent-clipped</code> class
		to your <code class="language-css">.drawer</code>.
	</p>

	<p class="col xs4 m6">
		The clipped navigation doesn't support a header.
	</p>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;nav id="drawer" class="drawer drawer-permanent-clipped">
  &lt;a href="#" class="drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="row" id="permanent-floating">
	<h4 class="col xs4">Floating</h4>

	<p class="col xs4 m6">
		In order to use the floating navigation you need to add the <code class="language-css">.drawer-permanent-floating</code> class
		to your <code class="language-css">.drawer</code>.
	</p>

	<p class="col xs4 m6">
		The clipped navigation doesn't support a header.
	</p>

	<pre class="language-html col xs4 s12 m6  offset-m6">
		<code>
&lt;nav id="drawer" class="drawer drawer-permanent-floating">
  &lt;a href="#" class="drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="row" id="persistent">
	<h3 class="col xs4">Persistent</h3>

	<p class="col xs4 m6">
		The persistent menu is recommended for all sizes larger than mobile.
		To use the persistent menu add the <code class="language-css">.drawer-persistent</code> class to your <code class="language-css">.drawer</code>.
	</p>

    <p class="col xs4 m6">
        In order to use the profile dropdown you have to use the <a href="/components/menu.php">menu</a> styling as well.
    </p>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;nav id="drawer" class="drawer drawer-persistent">
  &lt;header class="drawer-header">
    &lt;img src="/images/profile-icon.jpg" alt="SMaterial profile example" class="drawer-profile-img">
    &lt;div class="drawer-profile-name">John&lt;/div>
    &lt;div id="drawer-profile-more" class="drawer-profile-more">
      &lt;i class="material-icons trigger" data-trigger="profile">arrow_drop_down&lt;/i>

      &lt;nav class="menu" id="profile">
        &lt;a href="#">Facebook&lt;/a>
        &lt;a href="#">Google Plus&lt;/a>
        &lt;a href="#">Add account&lt;/a>
      &lt;/nav>
    &lt;/div>
    &lt;div>&lt;i class="material-icons arrow trigger" data-trigger="drawer">chevron_left&lt;/i>&lt;/div>
  &lt;/header>

  &lt;a href="#" class="drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="dropdown">
    &lt;a href="/">Introduction&lt;/a>
    &lt;a href="/">Getting started&lt;/a>
    &lt;a href="/">Elevation and shadows&lt;/a>
  &lt;/div>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="row" id="temporary">
	<h3 class="col xs4">Temporary</h3>

	<p class="col xs4 m6">
		To use the temporary menu add the <code class="language-css">.drawer-temporary</code> class to your <code class="language-css">.drawer</code>.
	</p>

	<p class="col xs4 m6">
		The temporary menu has the most options for the header.
		The <code class="language-css">.scrum</code> class can be added for background images that are light.
        In order to use the profile dropdown you have to use the <a href="/components/menu.php">menu</a> styling as well.
	</p>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;nav id="drawer" class="drawer drawer-temporary">
  &lt;header class="drawer-header">
    &lt;img src="/images/drawer-background.jpg" class="drawer-profile-background">
      &lt;div class="scrim">&lt;/div>
      &lt;img src="/images/profile-icon.jpg" class="drawer-profile-img">
      &lt;div class="drawer-profile-name">John Doe&lt;/div>
      &lt;div class="drawer-profile-email">johndoe&#64;gmail.com&lt;/div>
      &lt;div class="drawer-profile-more">
        &lt;i class="material-icons trigger" data-trigger="profile">arrow_drop_down&lt;/i>

         &lt;nav class="menu" id="profile">
           &lt;a href="#">Facebook&lt;/a>
           &lt;a href="#">Google Plus&lt;/a>
           &lt;a href="#">Add account&lt;/a>
         &lt;/nav>
      &lt;/div>
  &lt;/header>

  &lt;a href="#" class="drawer-dropdown">SMaterial &lt;i class="material-icons">expand_more&lt;/i>&lt;/a>
  &lt;div class="dropdown">
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