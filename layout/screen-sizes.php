<?php
$title = 'Screen sizes';
$description = 'Give the page a full or small width. This changes the drawer, appbar, bottom navigation, tabs and main.';
$keywords = ' full width screen, small width screen, appbar, navigation drawer, bottom navigation, tabs and main';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">Full width</h2>

	<p class="col xs4 m6">
		By adding the class <code class="language-css">.full-width</code> to the <code class="language-html">&lt;body></code> tag the layout of the website will change quite a bit for larger screens.
        This class affects the <a href="/patterns/navigation-drawer.php">navigation drawer</a>, <a href="/components/bottom-navigation.php">bottom navigation</a>, <a href="/components/tabs.php">tabs</a> and the main content.
        What it basically does is make website look as if it was used on a smaller screen.
        This means that the components named before will become full screen or disappear of screen.
        <button id="full" class="raised-button">Make full width</button>
	</p>

    <p class="col xs4 m6">
        The advantage of this is that You have even more space to show your content.
    </p>
</section>

<section class="row">
    <h2 class="col xs4">Small width</h2>

    <p class="col xs4 m6">
        By wrapping the <code class="language-css">.appbar, .drawer, main</code> elements inside a <code class="language-html">&lt;div class="container"></code>
        element you're able to make a small screen layout.
        In this case small screen doesn't mean mobile screen but a layout that is about 80% of the screens width.
        This means that you have some room left on the sides.
    </p>
</section>

<script>
    var full = document.getElementById('full');

	full.addEventListener('click', function() {
		var body = document.getElementsByTagName('body')[0],
            classes = body.className;

		if( classes.indexOf('full-width') > 0 ) {
			classes = classes.replace(' full-width', '');
			body.className = classes;
        } else {
			body.className += ' full-width';
        }
	});
</script>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';