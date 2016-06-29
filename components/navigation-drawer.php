<?php
$title = 'Navigation drawer';
$description = 'Navigation drawer with profile and icon support based on Google\'s Material Design';
$keywords = 'material design, smaterial, drawer, profile, navigation, drawer, navigation drawer';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sc-row">
	<h2>Navigation drawer usage</h2>

	<p class="sc-col sc-xs4 sc-m6">
		The drawer can be used in a couple of different ways.
		You can use the navigation drawer to the left or right.
		If used on the left there is a max width. When used on the right the max width is set to 100%.
	</p>

	<p class="sc-col sc-xs4 sc-m6">
		When used on the left there are a couple more functions added.
		There is a profile section and the navigation drawer can also be used as fixed full height or floating.
	</p>
</section>

<section class="sc-row">
	<h3>Examples</h3>

	<p class="sc-col sc-xs4">
		A navigation drawer example is show on the left.
		The example shows a navigation drawer that is floating and contains a profile section.
	</p>

	<h4 class="sc-col sc-sx4 sc-s12">Basic drawer structure</h4>

	<p class="sc-col sc-xs4 sc-m6">
		What you can change is shown below:
	</p>

	<ul class="sc-col sc-xs4 sc-s6">
		<li>
			<code class="language-css">.sc-drawer-left</code> to <code class="language-css">.sc-drawer-right</code>
			(<em>Left is positioned left and slides in from left to right. Left also has a limited width
				Right is positioned right and slides in from right to left. Right has no limited width</em>)
		</li>
		<li>
			<code class="language-css">.sc-drawer-left-floating</code> to <code class="language-css">.sc-drawer-left-full</code>
			(<em>Floating is positioned under the appbar.
				The full height is positioned over the appbar and is fixed on desktop but will appear under the appbar on smaller screens.</em>)
		</li>
	</ul>


	<pre class="language-html sc-col sc-xs4 sc-m6 sc-offset-m6">
		<code>
&lt;aside id="sc-drawer" class="sc-drawer sc-drawer-left sc-drawer-left-floating">
  &lt;nav>
    &lt;ul>
      &lt;li>&lt;i class="material-icons">home&lt;/i>Home&lt;/li>
      &lt;li class="divider">&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
	    &lt;ul>
          &lt;li>Dropdown content&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>

	<p class="sc-col sc-s12 sc-m6">
		In order to see a page title when using full height you can add the following to the drawer:
		<strong>Note:</strong> this title is only visible on large screens.
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;aside id="sc-drawer" class="sc-drawer sc-drawer-left sc-drawer-left-full">
  &lt;nav>
    &lt;ul>
	  &lt;li class="class="sc-drawer-left-full-title">
		&lt;h1>Title here&lt;/h1>
	  &lt;/li>
      &lt;li>&lt;i class="material-icons">home&lt;/i>Home&lt;/li>
      &lt;li class="divider">&lt;/li>
      &lt;li class="sc-drawer-dropdown">Dropdown
	    &lt;ul>
          &lt;li>Dropdown content&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</code>
	</pre>
</section>


<section class="sc-row">
	<h4>Drawer / profile</h4>

	<p class="sc-col sc-s12 sc-m6">
		The best dimensions for the image are square. This way the image won't transform.
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;aside id="sc-drawer" class="sc-drawer sc-drawer-left sc-drawer-left-floating">
  &lt;nav class="sc-drawer sc-drawer-left sc-drawer-left-floating">
    &lt;ul>
      &lt;li class="sc-drawer-profile">
        &lt;div class="sc-drawer-profile-img">
          &lt;img alt="thumbnail" src="/images/thumb.jpg">
        &lt;/div>

        &lt;div class="sc-drawer-profile-info">
          &lt;div class="sc-drawer-profile-name">
            John Doe
		  &lt;/div>

          &lt;div class="sc-drawer-profile-email">
            johndoe@gmail.com
          &lt;/div>

          &lt;div class="sc-drawer-profile-button">
           &lt;i class="material-icons">arrow_drop_up&lt;/i>
          &lt;/div>
        &lt;/div>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Navigation drawer trigger</h3>

	<p class="sc-col sc-s12 sc-m6">
		To show the menu on mobile or tablet you can add a trigger button.
	</p>

	<p class="sc-col sc-s12 sc-m6">
		The trigger button could look like this:
		<a href="#" id="sc-nav-button" data-sc-trigger="sc-drawer">
			<i class="material-icons">menu</i>
		</a>
	</p>

	<p class="sc-col sc-s12 sc-m6">
		The id and data-sc-trigger are required.
		The data-sc-trigger can be anything you gave the drawer as id.
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;a href="#" id="sc-nav-button" data-sc-trigger="sc-drawer">
  &lt;i class="material-icons">menu&lt;/i>
&lt;/a>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Settings</h3>

	<p class="sc-col sc-s12">
		You can change the settings of the navigation drawer in _settings.scss.
	</p>

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
				<td>$drawer-background</td>
				<td>Change to a color or variable</td>
				<td>Changes the background color of the drawer</td>
			</tr>
			<tr>
				<td>$drawer-hover</td>
				<td>Change to a color or variable</td>
				<td>Changes the hover color of links</td>
			</tr>
			<tr>
				<td>$drawer-width</td>
				<td></td>
				<td>Changes the width of the drawer for tablets and up (<em>max width 400px</em>)</td>
			</tr>
			<tr>
				<td>$drawer-small-width</td>
				<td></td>
				<td>Changes the width of the drawer for mobile (<em>max width 320px</em>)</td>
			</tr>
			<tr>
				<td>$drawer-full-title-background</td>
				<td>Change to color or variable</td>
				<td>Changes the title background color when using full height drawer</td>
			</tr>
			<tr>
				<td>$drawer-full-title-color</td>
				<td>Change to color or variable</td>
				<td>Changes the text color of the title when using will height drawer</td>
			</tr>
		</tbody>
	</table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';