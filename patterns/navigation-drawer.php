<?php
$title = 'Navigation drawer';
$description = 'Navigation drawer with profile and icon support based on Google\'s Material Design';
$keywords = 'drawer, profile, navigation, drawer, navigation drawer';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sc-row">
	<h2>Navigation drawer usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The navigation drawer has multiple options. Some of the options support a header item.
	</p>
</section>

<section class="sc-row" id="permanent">
	<h3>Permanent</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The permanent navigation drawer is recommended for desktop.
		The permanent navigation drawer has three alternatives.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;aside class="sc-drawer">
  &lt;nav class="sc-drawer-container">
    &lt;ul>
      &lt;li>&lt;a href="#">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
        &lt;ul>
          &lt;li>&lt;a href="#">Sub menu&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>
</section>

<section class="sc-row" id="permanent-full-height">
	<h4>Full-height</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		In order to use the full height navigation you need to add the <code class="language-css">.sc-drawer-permanent-full-height</code> class
		to your <code class="language-css">.sc-drawer</code>.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;aside class="sc-drawer sc-drawer-permanent-full-height">
  &lt;nav class="sc-drawer-container">
    &lt;ul>
      &lt;li>&lt;a href="#">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
        &lt;ul>
          &lt;li>&lt;a href="#">Sub menu&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>

	<p class="sc-col sc-sx4 sc-s12 sc-m6">
		In addition you can use the <code class="language-css">.sc-drawer-header</code> class to an <code class="language-html">li</code> element.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;aside class="sc-drawer sc-drawer-permanent-full-height">
  &lt;nav class="sc-drawer-container">
    &lt;ul>
	  &lt;li class="sc-drawer-header">header&lt;/li>
      &lt;li>&lt;a href="#">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
        &lt;ul>
          &lt;li>&lt;a href="#">Sub menu&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>
</section>

<section class="sc-row" id="permanent-clipped">
	<h4>Clipped</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		In order to use the clipped navigation you need to add the <code class="language-css">.sc-drawer-permanent-clipped</code> class
		to your <code class="language-css">.sc-drawer</code>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The clipped navigation doesn't support a header.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;aside class="sc-drawer sc-drawer-permanent-clipped">
  &lt;nav class="sc-drawer-container">
    &lt;ul>
      &lt;li>&lt;a href="#">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
        &lt;ul>
          &lt;li>&lt;a href="#">Sub menu&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>
</section>

<section class="sc-row" id="permanent-floating">
	<h4>Floating</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		In order to use the floating navigation you need to add the <code class="language-css">.sc-drawer-permanent-floating</code> class
		to your <code class="language-css">.sc-drawer</code>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The clipped navigation doesn't support a header.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6  sc-offset-m6">
		<code>
&lt;aside class="sc-drawer sc-drawer-permanent-floating">
  &lt;nav class="sc-drawer-container">
    &lt;ul>
      &lt;li>&lt;a href="#">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
        &lt;ul>
          &lt;li>&lt;a href="#">Sub menu&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>
</section>

<section class="sc-row" id="persistent">
	<h3>Persistent</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The persistent menu is recommended for all sizes larger than mobile.
		To use the persistent menu add the <code class="language-css">.sc-drawer-persistent</code> class to your <code class="language-css">.sc-drawer</code>.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;aside class="sc-drawer sc-drawer-persistent">
  &lt;nav class="sc-drawer-container">
    &lt;ul>
      &lt;li class="sc-drawer-header">
        &lt;img src="/images/profile-icon.jpg" alt="SMaterial profile example" class="sc-drawer-profile-img">
        &lt;div class="sc-drawer-profile-name">John&lt;/div>
        &lt;div id="sc-drawer-profile-more" class="sc-drawer-profile-more">
          &lt;i class="material-icons sc-trigger" data-sc-trigger="sc-drawer-profile-more">arrow_drop_down&lt;/i>

          &lt;ul>
            &lt;li>&lt;a href="#">Facebook&lt;/a>&lt;/li>
            &lt;li>&lt;a href="#">Google Plus&lt;/a>&lt;/li>
            &lt;li>&lt;a href="#">Add account&lt;/a>&lt;/li>
          &lt;/ul>
        &lt;/div>
        &lt;div>&lt;i class="material-icons sc-arrow sc-trigger" data-sc-trigger="sc-drawer">chevron_left&lt;/i>&lt;/div>
      &lt;/li>
      &lt;li>&lt;a href="#">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
        &lt;ul>
          &lt;li>&lt;a href="#">Sub menu&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>
</section>

<section class="sc-row" id="temporary">
	<h3>Temporary</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The temporary menu is required for mobile and recommended for tablet.
		To use the temporary menu add the <code class="language-css">.sc-drawer-temporary</code> class to your <code class="language-css">.sc-drawer</code>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The temporary menu has the most options for the header.
		The <code class="language-css">.sc-scrum</code> class can be added for background images that are light.
		Like the
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;aside class="sc-drawer sc-drawer-temporary">
  &lt;nav class="sc-drawer-container">
    &lt;ul>
      &lt;li class="sc-drawer-header">
        &lt;img src="/images/drawer-background.jpg" class="sc-drawer-profile-background">
        &lt;div class="sc-scrim">&lt;/div>
        &lt;img src="/images/profile-icon.jpg" class="sc-drawer-profile-img">
        &lt;div class="sc-drawer-profile-name">John Doe&lt;/div>
        &lt;div class="sc-drawer-profile-email">johndoe&#64;gmail.com&lt;/div>
        &lt;div class="sc-drawer-profile-more">
          &lt;i class="material-icons sc-arrow sc-trigger" data-sc-trigger="sc-drawer">arrow_drop_down&lt;/i>

          &lt;ul>
            &lt;li>&lt;a href="#">Facebook&lt;/a>&lt;/li>
            &lt;li>&lt;a href="#">Google Plus&lt;/a>&lt;/li>
            &lt;li>&lt;a href="#">Add account&lt;/a>&lt;/li>
          &lt;/ul>
        &lt;/div>
      &lt;/li>
      &lt;li>&lt;a href="#">&lt;i class="material-icons">home&lt;/i> Home&lt;/a>&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
        &lt;ul>
          &lt;li>&lt;a href="#">Sub menu&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';