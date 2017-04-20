<?php
$title = 'Full width';
$description = 'Give the page a full width. This changes the drawer, appbar, bottom navigation, tabs and main.';
$keywords = ' full width, appbar, navigation drawer, bottom navigation, tabs and main';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Full width</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		By adding the class <code class="language-css">.sc-full-width</code> to the <code class="language-html">&lt;body></code> tag the layout of the website will change quite a bit for larger screens.
        This class affects the <a href="/patterns/navigation-drawer.php">navigation drawer</a>, <a href="/components/bottom-navigation.php">bottom navigation</a>, <a href="/components/tabs.php">tabs</a> and the main content.
        What it basically does is make website look as if it was used on a smaller screen.
        This means that the components named before will become full screen or disappear of screen.
	</p>

    <p class="sc-col sc-xs4 sc-s12 sc-m6">
        The advantage of this is that You have even more space to show your content.
    </p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';