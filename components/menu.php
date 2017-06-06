<?php
$title = 'Menu';
$description = 'Menus based on Google\'s Material Design. The menu isn\'t only used in the appbar or navigation drawer but also for a select element';
$keywords = 'Menu';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Menu usage</h2>

	<p class="col xs4 s12 m6">
		The menus are in 2 varieties available. You can choose the default menu and the cascading menu.
		The menu styling is also applied to the <code class="language-html">&lt;select></code> element.
	</p>

    <p class="col xs4 s12 m6">
        If you were looking for the side menu please take a look at the <a href="/patterns/navigation-drawer.php">navigation drawer</a>.
    </p>
</section>

<section class="row">
	<h3 class="col xs4">Default menu</h3>

	<div class="col xs4 s12 m6">
		The default menu is very basic and easy the setup.

		<button class="raised-button trigger" data-trigger="default-menu">Example</button>
		<nav class="menu" id="default-menu">
			<a href="#">Example</a>
			<a href="#">Example</a>
			<a href="#">Example</a>
		</nav>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;nav class="menu">
  &lt;a href="#">Example&lt;/a>
  &lt;a href="#">Example&lt;/a>
  &lt;a href="#">Example&lt;/a>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 12">Cascading menu</h3>

	<div class="col xs4 s12 m6">
		The cascading menu is more suitable for a menu on larger screens.
		This is because a cascading menu would allow sub menus.

		<button class="raised-button trigger" data-trigger="cascading-menu">Example</button>
		<nav class="menu menu-cascading" id="cascading-menu">
			<a href="#">Example</a>
			<a href="#">Example</a>
			<a href="#">Example</a>
		</nav>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;nav class="menu menu-cascading">
  &lt;a href="#">Example&lt;/a>
  &lt;a href="#">Example&lt;/a>
  &lt;a href="#">Example&lt;/a>
&lt;/nav>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4">Select</h3>

	<p class="col xs4 s12 m">
		The select almost looks the same as the menu.

        <?php
        if( $_POST ) {
            print_r($_POST);
        }
        ?>
        <form action="" method="post">
            <select name="example" class="select">
                <option value="e1">Example 1</option>
                <option value="e2">Example 2</option>
                <option value="e3">Example 3</option>
            </select>

            <button class="raised-button">Submit</button>
        </form>
	</p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
