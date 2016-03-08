<?php
$title = 'Sidenav';
$description = 'Sidenav with profile and icon support based on Google\'s Material Design';
$keywords = 'material design, smaterial, sidenav, profile, profile';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sm-row">
	<h2>Sidenav usage</h2>

	<p class="sm-col sm-s12">
		The sidenav can be used in a couple of different ways.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		You can use it to the left or right.
		If used on the left there is a max width. When used on the right the max width is set to 100%.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		When used on the left there are a couple more functions added.
		There is a profile and the sidenav can also be used as fixed full height or floating.
	</p>
</section>

<section class="sm-row">
	<h3>Examples</h3>

	<h4>Basic sidenav structure</h4>

	<p class="sm-col sm-s12">
		You can change the following:
	</p>

	<ul class="sm-col sm-s6">
		<li>
			<code>.sm-sidenav-left</code> to <code>.sm-sidenav-right</code>
			(<em>Left is positioned left and slides in from left to right. Left also has a limited width
				Right is positioned right and slides in from right to left. Right has no limited width</em>)
		</li>
		<li>
			<code>.sm-sidenav-left-floating</code> to <code>.sm-sidenav-left-full</code>
			(<em>Floating is positioned under the appbar.
				The full height is positioned over the appbar and is fixed on desktop but will appear under the appbar on smaller screens.</em>)
		</li>
	</ul>


	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;aside id="sm-sidenav" class="sm-sidenav sm-sidenav-left sm-sidenav-left-floating">
  &lt;nav>
    &lt;ul>
      &lt;li>&lt;i class="material-icons">home&lt;/i>Home&lt;/li>
      &lt;li class="divider">&lt;/li>
      &lt;li class="sm-sidenav-dropdown">Dropdown
	    &lt;ul>
          &lt;li>Dropdown content&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</pre>
	</code>

	<p class="sm-col sm-s12 sm-m6">
		In order to see a page title when using full height you can add the following to the sidenav:
		<strong>Note:</strong> this title is only visible on large screens.
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;aside id="sm-sidenav" class="sm-sidenav sm-sidenav-left sm-sidenav-left-full">
  &lt;nav>
    &lt;ul>
	  &lt;li class="class="sm-sidenav-left-full-title">
		&lt;h1>Title here&lt;/h1>
	  &lt;/li>
      &lt;li>&lt;i class="material-icons">home&lt;/i>Home&lt;/li>
      &lt;li class="divider">&lt;/li>
      &lt;li class="sm-sidenav-dropdown">Dropdown
	    &lt;ul>
          &lt;li>Dropdown content&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside>
		</pre>
	</code>
</section>


<section class="sm-row">
	<h4>Drawer / profile</h4>

	<p class="sm-col sm-s12 sm-m6">
		The best dimensions for the image are square. This way the image won't transform.
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;aside id="sm-sidenav" class="sm-sidenav sm-sidenav-left sm-sidenav-left-floating">
  &lt;nav class="sm-sidenav sm-sidenav-left sm-sidenav-left-floating">
    &lt;ul>
      &lt;li class="sm-sidenav-profile">
        &lt;div class="sm-sidenav-profile-img">
          &lt;img alt="thumbnail" src="/images/thumb.jpg">
        &lt;/div>

        &lt;div class="sm-sidenav-profile-info">
          &lt;div class="sm-sidenav-profile-name">
            John Doe
		  &lt;/div>

          &lt;div class="sm-sidenav-profile-email">
            johndoe@gmail.com
          &lt;/div>

          &lt;div class="sm-sidenav-profile-button">
           &lt;i class="material-icons">arrow_drop_up&lt;/i>
          &lt;/div>
        &lt;/div>
      &lt;/li>
    &lt;/ul>
  &lt;/nav>
&lt;/aside
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Sidenav trigger</h3>

	<p class="sm-col sm-s12 sm-m6">
		To show the menu on mobile or tablet you can add a trigger button.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		The trigger button could look like this:
		<a href="#" id="sm-nav-button" data-sm-trigger="sm-sidenav">
			<i class="material-icons">menu</i>
		</a>
	</p>

	<p class="sm-col sm-s12 sm-m6">
		The id and data-sm-trigger are required.
		The data-sm-trigger can be anything you gave the sidenav as id.
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;a href="#" id="sm-nav-button" data-sm-trigger="sm-sidenav">
  &lt;i class="material-icons">menu&lt;/i>
&lt;/a>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Settings</h3>

	<p class="sm-col sm-s12">
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