<?php
$title = 'Navigation drawer';
$description = 'Navigation drawer with profile and icon support based on Google\'s Material Design';
$keywords = 'material design, smaterial, drawer, profile, navigation, drawer, navigation drawer';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sc-row">
	<h2>Navigation drawer usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The navigation drawer has multiple options.
	</p>
</section>

<section class="sc-row">
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

	<h4>Clipped</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		In order to use the clipped navigation you need to add the <code class="language-css">.sc-drawer-permanent-clipped</code> class
		to your <code class="language-css">.sc-drawer</code>.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
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

	<h4>Floating</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		In order to use the floating navigation you need to add the <code class="language-css">.sc-drawer-permanent-floating</code> class
		to your <code class="language-css">.sc-drawer</code>.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
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

<section class="sc-row">
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
        &lt;span class="sc-drawer-profile-name">John&lt;/span>
        &lt;span class="sc-drawer-profile-dropdown">&lt;i class="material-icons">arrow_drop_down&lt;/i>&lt;/span>
        &lt;span class="sc-trigger" data-sc-trigger="sc-drawer">&lt;i class="material-icons sc-arrow">chevron_left&lt;/i>&lt;/span>
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