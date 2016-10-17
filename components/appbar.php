<?php
$title = 'Appbar';
$description = 'Appbar with search and more menu based on Google\'s Material Design';
$keywords = 'appbar, search, search slide out, more menu';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

	<section class="sc-row">
		<h2>Appbar usage</h2>

		<p class="sc-col sc-xs4 sc-m6">
			The appbar is used to hold a couple elements.
			The navigation drawer, title, action buttons and "more menu" can all be shown in the appbar.
			<strong>Note</strong> some of the code and styling is still open to change.
			For example the search button doesn't work at the moment
		</p>

		<p class="sc-col sc-xs4 sc-m6">
			There are a couple attributes specific names to make everything work.
			The id <code class="language-css">#sc-nav-button</code> is needed to make the navigation drawer open and
			close.
			Also the class <code class="language-css">.sc-nav-more</code> is used to open te menu more list.
			The class <code class="language-css">.sc-appbar-menu-more</code> is used to detect wetter or not a click is
			performed outside
			the menu more. When there is a click outside the menu more it will close.
		</p>

		<pre class="language-html sc-col sc-xs4 sc-m6 sc-offset-m6">
		<code>
&lt;header class="sc-appbar">
  &lt;div class="sc-appbar-nav">
    &lt;a href="#" id="sc-nav-button" data-sc-trigger="sc-drawer">
      &lt;i class="material-icons sc-ripple">menu&lt;/i>
    &lt;/a>
  &lt;/div>

  &lt;div class="sc-appbar-title">
    &lt;h1>Example&lt;/h1>
  &lt;/div>

  &lt;div class="sc-appbar-actions">
    &lt;div class="sc-search-input">
      &lt;a href="#" class="sc-ripple sc-search-trigger">
        &lt;i class="material-icons">search&lt;/i>
      &lt;/a>

      &lt;form action="" method="post">
        &lt;input type="search" name="search">
      &lt;/form>
    &lt;/div>
  &lt;/div>

  &lt;div class="sc-appbar-menu">
    &lt;a href="#" class="sc-nav-more sc-ripple" data-sc-trigger="sc-nav-more">
      &lt;i class="material-icons">more_vert&lt;/i>
    &lt;/a>

    &lt;ul class="sc-appbar-menu-more" id="sc-nav-more">
      &lt;li>Example&lt;/li>
    &lt;/ul>
  &lt;/div>
&lt;/header>
		</code>
	</pre>
	</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';