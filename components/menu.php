<?php
$title = 'Menu';
$description = 'Menus based on Google\'s Material Design';
$keywords = 'Menu';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Menu usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The menus are in 2 varieties available. You can choose the default menu and the cascading menu.
		The menu styling is also applied to the <code class="language-html">&lt;select></code> element.
	</p>

    <p class="sc-col sc-xs4 sc-s12 sc-m6">
        If you were looking for the side menu please take a look at the <a href="/patterns/navigation-drawer.php">navigation drawer</a>.
    </p>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4">Default menu</h3>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		The default menu is very basic and easy the setup.

		<button class="sc-raised-button sc-trigger" data-sc-trigger="default-menu">Example</button>
		<nav class="sc-menu" id="default-menu">
			<a href="#">Example</a>
			<a href="#">Example</a>
			<a href="#">Example</a>
		</nav>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;nav class="sc-menu">
  &lt;a href="#">Example&lt;/a>
  &lt;a href="#">Example&lt;/a>
  &lt;a href="#">Example&lt;/a>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-12">Cascading menu</h3>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		The cascading menu is more suitable for a menu on larger screens.
		This is because a cascading menu would allow sub menus.

		<button class="sc-raised-button sc-trigger" data-sc-trigger="cascading-menu">Example</button>
		<nav class="sc-menu sc-menu-cascading" id="cascading-menu">
			<a href="#">Example</a>
			<a href="#">Example</a>
			<a href="#">Example</a>
		</nav>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;nav class="sc-menu sc-menu-cascading">
  &lt;a href="#">Example&lt;/a>
  &lt;a href="#">Example&lt;/a>
  &lt;a href="#">Example&lt;/a>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4">Select</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m">
		The select almost looks the same as the menu.

		<select name="example" class="sc-select">
			<option value="">Example 1</option>
			<option value="">Example 2</option>
			<option value="">Example 3</option>
		</select>
	</p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
