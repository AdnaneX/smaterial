<?php
$title = 'Tabs';
$description = 'Tabs based on Google\'s Material Design';
$keywords = 'tabs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Tabs usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		You can use a couple of different tabs. You can use tabs with text only, text with icons and icons only.
	</p>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Text only</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
        These are tabs that only contain text.
    </p>

	<pre class="language-html sc-col sc-s12 sc-m6">
		<code>
&lt;div class="sc-tabs">
  &lt;a href="#" class="sc-tab">Tab 1&lt;/a>
  &lt;a href="#" class="sc-tab">Tab 2&lt;/a>
  &lt;a href="#" class="sc-tab">Tab 3&lt;/a>
  &lt;a href="#" class="sc-tab">Tab 4&lt;/a>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Icons only</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
        These are tabs that only contain icons.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;div class="sc-tabs">
  &lt;a href="#" class="sc-tab-icon">&lt;i class="material-icons">home&lt;/i>&lt;/a>
  &lt;a href="#" class="sc-tab-icon">&lt;i class="material-icons">home&lt;/i>&lt;/a>
  &lt;a href="#" class="sc-tab-icon">&lt;i class="material-icons">home&lt;/i>&lt;/a>
  &lt;a href="#" class="sc-tab-icon">&lt;i class="material-icons">home&lt;/i>&lt;/a>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Icons with text</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
        These are tabs that contain both icons and text.
    </p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;div class="sc-tabs">
  &lt;a href="#" class="sc-tab-icon-text">&lt;i class="material-icons">home&lt;/i>&lt;span>Example 1&lt;/span>&lt;/a>
  &lt;a href="#" class="sc-tab-icon-text">&lt;i class="material-icons">home&lt;/i>&lt;span>Example 2&lt;/span>&lt;/a>
  &lt;a href="#" class="sc-tab-icon-text">&lt;i class="material-icons">home&lt;/i>&lt;span>Example 3&lt;/span>&lt;/a>
  &lt;a href="#" class="sc-tab-icon-text">&lt;i class="material-icons">home&lt;/i>&lt;span>Example 4&lt;/span>&lt;/a>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Settings</h3>

	<table class="sc-col sc-xs4 sc-s12">
		<thead>
		<tr>
			<th>Variable</th>
			<th>Options</th>
			<th>Result</th>
		</tr>
		</thead>

		<tbody>
		<tr>
			<td>$tab-background</td>
			<td>Variable / color</td>
			<td>Changes the background color of the tabs</td>
		</tr>
        <tr>
            <td>$tab-font-color</td>
            <td>Variable / color</td>
            <td>Changes the font color for tabs that are off/ not acitve</td>
        </tr>
        <tr>
            <td>$tab-font-on-color</td>
            <td>Variable / color</td>
            <td>Changes the font for tabs that are on/ active</td>
        </tr>
		<tr>
			<td>$tab-indicator-on-color</td>
			<td>Variable / color</td>
			<td>Changes the indicator color on hover and active</td>
		</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';