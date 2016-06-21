<?php
$title = 'Sidenav';
$description = 'Sidenav with profile and icon support based on Google\'s Material Design';
$keywords = 'material design, smaterial, sidenav, profile, profile';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sc-row">
	<h2>Sidenav usage</h2>

	<p class="sc-col sc-s12">
		The sidenav can be used in a couple of different ways.
	</p>

	<p class="sc-col sc-s12 sc-m6">
		You can use it to the left or right.
		If used on the left there is a max width. When used on the right the max width is set to 100%.
	</p>

	<p class="sc-col sc-s12 sc-m6">
		When used on the left there are a couple more functions added.
		There is a profile and the sidenav can also be used as fixed full height or floating.
	</p>
</section>

<section class="sc-row">
	<h3>Examples</h3>

	<h4>Basic sidenav structure</h4>

	<p class="sc-col sc-s12">
		You can change the following:
	</p>

	<ul class="sc-col sc-s6">
		<li>
			<code class="language-css">.sc-sidenav-left</code> to <code class="language-css">.sc-sidenav-right</code>
			(<em>Left is positioned left and slides in from left to right. Left also has a limited width
				Right is positioned right and slides in from right to left. Right has no limited width</em>)
		</li>
		<li>
			<code class="language-css">.sc-sidenav-left-floating</code> to <code class="language-css">.sc-sidenav-left-full</code>
			(<em>Floating is positioned under the appbar.
				The full height is positioned over the appbar and is fixed on desktop but will appear under the appbar on smaller screens.</em>)
		</li>
	</ul>


	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;aside id="sc-sidenav" class="sc-sidenav sc-sidenav-left sc-sidenav-left-floating">
  &lt;nav>
    &lt;ul>
      &lt;li>&lt;i class="material-icons">home&lt;/i>Home&lt;/li>
      &lt;li class="divider">&lt;/li>
      &lt;li class="sc-sidenav-dropdown">Dropdown
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
		In order to see a page title when using full height you can add the following to the sidenav:
		<strong>Note:</strong> this title is only visible on large screens.
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;aside id="sc-sidenav" class="sc-sidenav sc-sidenav-left sc-sidenav-left-full">
  &lt;nav>
    &lt;ul>
	  &lt;li class="class="sc-sidenav-left-full-title">
		&lt;h1>Title here&lt;/h1>
	  &lt;/li>
      &lt;li>&lt;i class="material-icons">home&lt;/i>Home&lt;/li>
      &lt;li class="divider">&lt;/li>
      &lt;li class="sc-sidenav-dropdown">Dropdown
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
&lt;aside id="sc-sidenav" class="sc-sidenav sc-sidenav-left sc-sidenav-left-floating">
  &lt;nav class="sc-sidenav sc-sidenav-left sc-sidenav-left-floating">
    &lt;ul>
      &lt;li class="sc-sidenav-profile">
        &lt;div class="sc-sidenav-profile-img">
          &lt;img alt="thumbnail" src="/images/thumb.jpg">
        &lt;/div>

        &lt;div class="sc-sidenav-profile-info">
          &lt;div class="sc-sidenav-profile-name">
            John Doe
		  &lt;/div>

          &lt;div class="sc-sidenav-profile-email">
            johndoe@gmail.com
          &lt;/div>

          &lt;div class="sc-sidenav-profile-button">
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
	<h3>Sidenav trigger</h3>

	<p class="sc-col sc-s12 sc-m6">
		To show the menu on mobile or tablet you can add a trigger button.
	</p>

	<p class="sc-col sc-s12 sc-m6">
		The trigger button could look like this:
		<a href="#" id="sc-nav-button" data-sc-trigger="sc-sidenav">
			<i class="material-icons">menu</i>
		</a>
	</p>

	<p class="sc-col sc-s12 sc-m6">
		The id and data-sc-trigger are required.
		The data-sc-trigger can be anything you gave the sidenav as id.
	</p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;a href="#" id="sc-nav-button" data-sc-trigger="sc-sidenav">
  &lt;i class="material-icons">menu&lt;/i>
&lt;/a>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3>Settings</h3>

	<p class="sc-col sc-s12">
		You can change the settings of the navbar in _settings.scss.
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
				<td>$sidenav-background</td>
				<td>Change to a color or variable</td>
				<td>Changes the background color of the sidenav</td>
			</tr>
			<tr>
				<td>$sidenav-hover</td>
				<td>Change to a color or variable</td>
				<td>Changes the hover color of links</td>
			</tr>
			<tr>
				<td>$sidenav-width</td>
				<td></td>
				<td>Changes the width of the sidenav for tablets and up (<em>max width 400px</em>)</td>
			</tr>
			<tr>
				<td>$sidenav-small-width</td>
				<td></td>
				<td>Changes the width of the sidenav for mobile (<em>max width 320px</em>)</td>
			</tr>
			<tr>
				<td>$sidenav-full-title-background</td>
				<td>Change to color or variable</td>
				<td>Changes the title background color when using full height sidenav</td>
			</tr>
			<tr>
				<td>$sidenav-full-title-color</td>
				<td>Change to color or variable</td>
				<td>Changes the text color of the title when using will height sidenav</td>
			</tr>
		</tbody>
	</table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';