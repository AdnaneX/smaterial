<?php
$title = 'Appbar';
$description = 'Appbar with search and more menu based on Google\'s Material Design';
$keywords = 'appbar, search, search slide out, more menu';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="row">
    <h2 class="col xs4 s12">Appbar usage</h2>

    <p class="col xs4 m6">
        The appbar is used to hold a couple elements.
        The navigation drawer, title, action buttons and "more menu" can all be shown in the appbar.
        <strong>Note</strong> some of the code and styling is still open to change.
        For example the search button doesn't work at the moment
    </p>

    <p class="col xs4 m6">
        There are a couple attributes specific names to make everything work.
        The id <code class="language-css">#nav-button</code> is needed to make the navigation drawer open and
        close.
        Also the class <code class="language-css">.nav-more</code> is used to open te menu more list.
        The class <code class="language-css">.appbar-menu-more</code> is used to detect wetter or not a click is
        performed outside
        the menu more. When there is a click outside the menu more it will close.
    </p>

    <pre class="language-html col xs4 m6 offset-m6">
		<code>
&lt;header class="appbar">
  &lt;div class="appbar-nav">
    &lt;a href="#" id="nav-button" data-trigger="drawer">
      &lt;i class="material-icons ripple">menu&lt;/i>
    &lt;/a>
  &lt;/div>

  &lt;div class="appbar-title">
    &lt;h1>Example&lt;/h1>
  &lt;/div>

  &lt;div class="appbar-actions">
    &lt;div class="search-input">
      &lt;a href="#" class="ripple search-trigger">
        &lt;i class="material-icons">search&lt;/i>
      &lt;/a>

      &lt;form action="" method="post">
        &lt;input type="search" name="search">
      &lt;/form>
    &lt;/div>
  &lt;/div>

  &lt;div class="appbar-menu">
    &lt;a href="#" class="nav-more ripple" data-trigger="nav-more">
      &lt;i class="material-icons">more_vert&lt;/i>
    &lt;/a>

    &lt;ul class="appbar-menu-more" id="nav-more">
      &lt;li>Example&lt;/li>
    &lt;/ul>
  &lt;/div>
&lt;/header>
		</code>
	</pre>
</section>

<section class="row">
    <h2 class="col xs4">Badges</h2>

    <p class="col xs4 s12 m6">
        If you would like to use badges in the appbar you can by simply adding the <code class="language-css">.badge</code>
        class to a div inside an action.
    </p>

    <pre class="language-html col xs4 m6">
        <code>
&lt;a href="#">&lt;i class="material-icons">mail&lt;/i> &lt;div class="badge">2&lt;/div>&lt;/a>
        </code>
    </pre>
</section>

<section class="row">
    <h2 class="col xs4">Settings</h2>

    <table>
        <thead>
        <tr>
            <th>Variable</th>
            <th>Options</th>
            <th>Result</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>$appbar-background</td>
            <td>Color / variable</td>
            <td>Changes the background color</td>
        </tr>
        <tr>
            <td>$appbar-text</td>
            <td>Color / variable</td>
            <td>Changes the font color</td>
        </tr>
        <tr>
            <td>$appbar-title</td>
            <td>Color / variable</td>
            <td>Changes the font color of a title / header</td>
        </tr>
        </tbody>
    </table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';