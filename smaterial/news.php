<?php
$title = 'What\'s new';
$description = 'All changes will be described here. This page can also be seen as release notes';
$keywords = 'What\'s new, release notes, major changes';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">What's new</h2>

	<p class="col xs4">
		Most changes will be noted here. Since there are a lot of commits with only a few changes not all changes are under te right date.
		This means that sometimes a lot of changes are merged under one date.
	</p>
</section>

<section class="row">
    <h3 class="col xs4">January 24, 2018</h3>

    <ul class="col xs4 s6">
        <li>Replaced Gulp with Webpack</li>
        <li>Fixed CSS for shadows</li>
        <li>Changed jQuery to vanilla JS</li>
        <li>Redo SCSS settings file</li>
        <li>Fixed text field bug</li>
    </ul>
</section>

<section class="row">
    <h3 class="col xs4">August 4, 2017</h3>

    <ul class="col xs4 s6">
        <li>Redid text fields. Text fields are updated according to new specifications. Text fields now also support placeholder and errors.
        The error messages are from the HTML5 form validation.</li>
        <li>Changed color of the main background</li>
    </ul>

    <p class="col xs4 s6">
        GitHub <a href="https://github.com/SuperDJ/smaterial/commit/e505a670405bc393a2116bc077a6852ba42e8268" target="_blank">e505a670405bc393a2116bc077a6852ba42e8268</a>
    </p>
</section>

<section class="row">
	<h3 class="col xs4">July 2, 2017</h3>

	<ul class="col xs4 s6">
		<li>Added fixes</li>
		<li>Redo <a href="/components/appbar.php">appbar</a></li>
		<li>Fixed <a href="/components/tabs.php">tabs</a></li>
		<li>Fixed <a href="/components/bottom-navigation.php">bottom navigation</a></li>
		<li>Redo <a href="/patterns/navigation-drawer.php">navigation drawer</a></li>
		<li>Deleted unneeded calc() in SCSS</li>
		<li>Added full and small width support</li>
		<li>Added shadow overlay to navigation drawer, dialog, bottom sheet</li>
		<li>Minimizing CSS</li>
		<li>Added AMP stylesheet</li>
		<li>Removed CSS prefixes</li>
		<li>Made <a href="/components/menu.php">menu</a> and <a href="/components/dialogs.php">dialog</a> content scrollable</li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/f807b07dd8bac036ba5a70a71015b561818a2a2b" target="_blank">f807b07dd8bac036ba5a70a71015b561818a2a2b</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">January 24, 2017</h3>

	<ul class="col xs4 s6">
		<li>Added fixes</li>
		<li>Cleaned code</li>
		<li>Redo <a href="/components/cards.php">cards</a></li>
		<li>Changed SEO keywords</li>
		<li>Optimized <a href="/components/data-tables.php">tables</a></li>
		<li>Started on grid list</li>
		<li>SCSS: made it possible to turn on and off individual elements within components</li>
		<li>Added flex grid</li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/821910c393188d9b4c5bbf1dceb5891fccbe084e" target="_blank">821910c393188d9b4c5bbf1dceb5891fccbe084e</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">September 3, 2016</h3>

	<ul class="col xs4 s6">
		<li>Added default styling for <a href="/components/selection-controls.php">selection controls</a></li>
		<li>Fixing bugs and styling</li>
		<li>Added <a href="/patterns/notifications.php">notifications</a> styling to look like Android Nougat (N, 7)</li>
		<li>Added more documentation</li>
		<li>Cleaning settings and minimizing CSS</li>
		<li>Redo <a href="/patterns/navigation-drawer.php">navigation drawer</a></li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/60a4f61a6833e55bd72291f88985a5baa6b96a9b" target="_blank">60a4f61a6833e55bd72291f88985a5baa6b96a9b</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">June 30, 2016</h3>

	<ul class="col xs4 s6">
		<li>Updated <a href="/style/typography.php">typography</a> and <a href="/style/icons.php">icons</a></li>
		<li>Added <a href="/components/bottom-navigation.php">bottom navigation</a></li>
		<li>Started on <a href="/components/progress-activity.php">circular progress</a></li>
		<li>Added fixes</li>
		<li>Added documentation</li>
		<li>Added settings to _settings.scss</li>
		<li>Started with <a href="/components/tabs.php">tabs</a></li>
		<li>Fixed and improved Gulp</li>
		<li>Added Prism for code markup</li>
		<li>Improved styling of <a href="/components/sliders.php">slider</a></li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/f2079b848e92bf282f8473a2153770b9b4d39267" target="_blank">f2079b848e92bf282f8473a2153770b9b4d39267</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">March 1, 2016</h3>

	<ul class="col xs4 s6">
		<li>Added styling for <a href="/components/textfields.php">text fields</a></li>
		<li>Cleaned JS files</li>
		<li>Added fixes</li>
		<li>Started with <a href="/components/progress-activity.php">progress and activity</a></li>
		<li>Added <a href="/components/dialogs.php">dialogs</a></li>
		<li>Added readme</li>
		<li>Added Gulp</li>
		<li>Added <a href="/patterns/notifications.php">notifications</a></li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/b9d7e01f975ebfb8f25e1273f02f702ad5032aed" target="_blank">b9d7e01f975ebfb8f25e1273f02f702ad5032aed</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">February 20, 2016</h3>

	<ul class="col xs4 s6">
		<li>Added basic styling for <a href="/components/data-tables.php">tables</a></li>
		<li>Added <a href="/components/tooltips.php">tooltips</a></li>
		<li>Added <a href="/components/snackbars-toasts.php">snackbars</a></li>
		<li>Added more settings in _settings.scss</li>
		<li>Added styling for <a href="/components/selection-controls.php">radio buttons and checkboxes</a></li>
		<li>Started with <a href="/components/selection-controls.php">switches</a></li>
		<li>Created a license</li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/b9d7e01f975ebfb8f25e1273f02f702ad5032aed" target="_blank">b9d7e01f975ebfb8f25e1273f02f702ad5032aed</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">February 7, 2016</h3>

	<ul class="col xs4 s6">
		<li>Changed <a href="/smaterial/shadow.php">shadows</a></li>
		<li>Added more pages to documentation</li>
		<li>Updated <a href="/patterns/navigation-drawer.php">sidenav</a> documentation</li>
		<li>Added and changed mixins</li>
		<li>Changed <a href="/style/typography.php">typography</a></li>
		<li>Started with <a href="/components/cards.php">cards</a></li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/50c594c986e89b2945ec68cfdbb8fa68f4fd24bc" target="_blank">50c594c986e89b2945ec68cfdbb8fa68f4fd24bc</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">January 31, 2016</h3>

	<ul class="col xs4 s6">
		<li>Finished <a href="/style/color.php">colors page</a></li>
		<li>Added page for <a href="/components/buttons.php">buttons</a></li>
		<li>Styled buttons</li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/0dcafab6b9427d90609516ab858d61c6737709ea" target="_blank">0dcafab6b9427d90609516ab858d61c6737709ea</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">January 30, 2016</h3>

	<ul class="col xs4 s6">
		<li>Finished <a href="/patterns/navigation-drawer.php">sidenav</a></li>
		<li>Started on style pages and components</li>
	</ul>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/8561532e5602512452b088cd2e9b431ca08cb9db" target="_blank">8561532e5602512452b088cd2e9b431ca08cb9db</a>
	</p>
</section>

<section class="row">
	<h3 class="col xs4">January 27, 2016</h3>

	<p class="col xs4 s6">
		The SMaterial project started.
	</p>
	<p class="col xs4 s6">
		GitHub: <a href="https://github.com/SuperDJ/smaterial/commit/9e8721378a53c6a4b0fc7a9cf2d4ce2fb5629fb1" target="_blank">9e8721378a53c6a4b0fc7a9cf2d4ce2fb5629fb1</a>
	</p>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';