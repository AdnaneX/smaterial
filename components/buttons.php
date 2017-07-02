<?php
$title = 'Buttons';
$description = 'Buttons based on Google\'s Material Design. The buttons have several styling options not only raised or flat but dense as well';
$keywords = 'buttons, floating button, flat button, raised button, icon toggle, floating, flat, raised';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

if( !$amp ) {
    echo '<style>
	.raised-button, .flat-button, .raised-button-dense, .flat-button-dense, .raised-button-disabled, .flat-button-disabled {
		margin: 8px;
	}
</style>';
}
?>

<section class="row">
	<h2 class="col xs4 s12">Buttons usage</h2>

	<p class="col xs4 s12">
		There are a couple of different buttons with each a different purpose.
	</p>

	<p class="col xs4 s12">
		The <em>raised button</em> is the most common button and is used for example in forms and with <code>&lt;button></code>.
		The <em>flat button</em> is used in dialogs (modals) and toolbars.
		The <em>floating button</em> are mostly used for actions.
		If you would like to use the default browser button style you don't need to add a class.
	</p>
</section>

<section class="row" id="raised-button">
	<h3 class="col xs4 s12">Raised button</h3>

	<p class="col xs4 s12 m6">
		The raised button can be used on it's own but also with an icon.
		See the examples below:
	</p>

	<p class="col xs4 s12 m6">
		<button class="raised-button"><i class="material-icons left">cloud</i> Button example with icon left</button>
		<button class="raised-button"><i class="material-icons right">cloud</i> Button example with icon right</button>
		<button class="raised-button">Button example without icon</button>
		<input type="submit" value="Submit button" class="raised-button">
		<input type="reset" value="Reset button" class="raised-button">
		<button class="raised-button raised-button-disabled">Disabled</button>
		<button class="raised-button raised-button-dense">Dense</button>
		<a href="#" class="raised-button">Link</a>
		<button class="raised-button hover-ripple">Hover ripple</button>
		<button class="raised-button hover-ripple"><i class="material-icons left">home</i> Hover ripple</button>
	</p>

	<pre class="language-html col s12 m6 offset-m6">
		<code>
&lt;button class="raised-button">
  &lt;i class="material-icons left">cloud&lt;/i>
  Button example with icon left
&lt;/button>

&lt;button class="raised-button">
  &lt;i class="material-icons right">cloud&lt;/i>
  Button example with icon right
&lt;/button>

&lt;button class="raised-button">Button example without icon&lt;/button>

&lt;input type="button" value="Input type button" class="raised-button">

&lt;input type="submit" value="Submit button" class="raised-button">

&lt;input type="reset" value="Reset button" class="raised-button">

&lt;button class="raised-button raised-button-disabled">Disabled&lt;/button>

&lt;button class="raised-button raised-button-dense">Dense&lt;/button>

&lt;a href="#" class="raised-button">Link&lt;/a>

&lt;button class="raised-button hover-ripple ripple">
  Hover ripple
&lt;/button>

&lt;button class="raised-button hover-ripple">
  &lt;i class="material-icons left">home&lt;/i>
  Hover ripple
&lt;/button>
	</code>
</pre>
</section>

<section class="row" id="flat-button">
	<h3 class="col xs4 s12">Flat button</h3>

	<p class="col xs4 s12 m6">
		The flat buttons can also be used with an icon.
	</p>

	<p class="col xs4 s12 m6">
		<button class="flat-button"><i class="material-icons left">cloud</i> Button example with icon left</button>
		<button class="flat-button"><i class="material-icons right">cloud</i> Button example with icon right</button>
		<button class="flat-button">Button example without icon</button>
		<input type="submit" value="Submit button" class="flat-button">
		<input type="reset" value="Reset button" class="flat-button">
		<button class="flat-button flat-button-disabled">Disabled</button>
		<button class="flat-button flat-button-dense">Dense</button>
		<a href="#" class="flat-button">Link</a>
	</p>

	<pre class="language-html col s12 m6 offset-m6">
		<code>
&lt;button class="flat-button">
  &lt;i class="material-icons left">cloud&lt;/i>
  Button example with icon left
&lt;/button>

&lt;button class="flat-button">
  &lt;i class="material-icons right">cloud&lt;/i>
  Button example with icon right
&lt;/button>

&lt;button class="flat-button">Button example without icon&lt;/button>

&lt;input type="button" value="Input type button" class="flat-button">

&lt;input type="submit" value="Submit button" class="flat-button">

&lt;input type="reset" value="Reset button" class="flat-button">

&lt;button class="flat-button flat-button-disabled">Disabled&lt;/button>

&lt;button class="flat-button flat-button-dense">Dense&lt;/button>

&lt;a href="#" class="flat-button">Link&lt;/a>
		</code>
	</pre>
</section>

<section class="row" id="floating-button">
	<h3 class="col xs4 s12">Floating button</h3>

	<p class="col xs4 s12 m6">
		The floating button only exists out of an icon.
	</p>

	<p class="col xs4 s12 m6">
		<div class="floating-button"><i class="material-icons">cloud</i></div>
		<div class="floating-button floating-button-mini"><i class="material-icons">cloud</i></div>

		<div class="floating-button trigger" data-trigger="options">
			<i class="material-icons">cloud</i>

			<ul id="options">
				<li class="red"><a href="#"><i class="material-icons">file_upload</i></a></li>
				<li class="blue"><a href="#"><i class="material-icons">file_download</i></a></li>
				<li class="green"><a href="#"><<?php echo ($amp ? 'amp-img layout="responsive"' : 'img'); ?> src="/images/profile-icon.jpg"></a></li>
			</ul>
		</div>
	</p>

	<pre class="language-html col s12 m6 offset-m6">
		<code>
&lt;button class="floating-button">
  &lt;i class="material-icons">cloud&lt;/i>
&lt;/button>

&lt;button class="floating-button floating-button-mini">
  &lt;i class="material-icons">cloud&lt;/i>
&lt;/button>

&lt;a href="#" class="floating-button">&lt;i class="material-icons">home&lt;/i>&lt;/a>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Icon toggles</h3>

	<p class="col xs4 s12 m6">
		The icon toggles could be used for favoring an item or give a star rating
	</p>

	<p class="col xs4 s12 m6">
		<input type="checkbox" class="toggle-button white-toggle-button" data-toggle-icon="star_rate" data-color="yellow-text">
		<input type="checkbox" class="toggle-button color-toggle-button" data-toggle-icon="favorite" data-color="red-text">
	</p>
</section>

<section class="row">
	<h3 class="col xs4 s12">Settings</h3>

	<table class="col xs4 s12">
		<thead>
		<tr>
			<th>Variable</th>
			<th>Options</th>
			<th>Result</th>
		</tr>
		</thead>

		<tbody>
		<tr>
			<td>$raised-background</td>
			<td>Variable / color</td>
			<td>Change color of background</td>
		</tr>
		<tr>
			<td>$raised-background-hover</td>
			<td>Variable / color</td>
			<td>Change color of background hover</td>
		</tr>
		<tr>
			<td>$raised-color</td>
			<td>Variable / color</td>
			<td>Change text color</td>
		</tr>
		<tr>
			<td>$raised-color-hover</td>
			<td>Variable / color</td>
			<td>Change text color hover</td>
		</tr>
		<tr>
			<td>$raised-icon-color</td>
			<td>Variable / color</td>
			<td>Change color of icon</td>
		</tr>
		<tr>
			<td>$raised-disabled-background</td>
			<td>Variable / color</td>
			<td>Change disabled background color</td>
		</tr>
		<tr>
			<td>$raised-disabled-color</td>
			<td>Variable / color</td>
			<td>Change disabled font color</td>
		</tr>
		<tr>
			<td>$raised-disabled-background-hover</td>
			<td>Variable / color</td>
			<td>Change disabled background hover color</td>
		</tr>
		<tr>
			<td>$raised-disabled-color-hover</td>
			<td>Variable / color</td>
			<td>Change disabled font hover color</td>
		</tr>
		<tr>
			<td>$flat-color</td>
			<td>Variable / color</td>
			<td>Change font color</td>
		</tr>
		<tr>
			<td>$flat-icon-color</td>
			<td>Variable / color</td>
			<td>Changes the icon color</td>
		</tr>
		<tr>
			<td>$flat-disabled-color</td>
			<td>Variable / color</td>
			<td>Changes the disabled font color</td>
		</tr>
		<tr>
			<td>$floating-background</td>
			<td>Variable / color</td>
			<td>Change the background color</td>
		</tr>
		<tr>
			<td>$floating-icon-color</td>
			<td>Variable / color</td>
			<td>Change icon color</td>
		</tr>
		<tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';