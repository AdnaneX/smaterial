<?php
$title = 'Buttons';
$description = 'Buttons based on Googles Material Design';
$keywords = 'material design, smaterial, buttons, floating button, flat button, raised button, icon toggle';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Buttons usage</h2>

	<p class="sm-col sm-s12">
		There are a couple of different buttons with each a different purpose.
	</p>

	<p class="sm-col sm-s12">
		The <em>raised button</em> is the most common button and is used for example in forms and with <code>&lt;button></code>.
		The <em>flat button</em> is used in dialogs (modals) and toolbars.
		The <em>floating button</em> are mostly used for actions.
		If you would like to use the default browser button style you don't need to add a class.
	</p>
</section>

<section class="sm-row" id="sm-raised-button">
	<h3>Raised button</h3>

	<p class="sm-col sm-s12 sm-m6">
		The raised button can be used on it's own but also with an icon.
		See the examples below:
	</p>

	<p class="sm-col sm-s12 sm-m6">
		<button class="sm-raised-button"><i class="material-icons sm-left">cloud</i> Button example with icon left</button>
		<button class="sm-raised-button"><i class="material-icons sm-right">cloud</i> Button example with icon right</button>
		<button class="sm-raised-button">Button example without icon</button>
		<input type="button" value="Input type button" class="sm-raised-button">
		<input type="submit" value="Submit button" class="sm-raised-button">
		<input type="reset" value="Reset button" class="sm-raised-button">
		<button class="sm-raised-button sm-raised-button-disabled">Disabled</button>
		<button class="sm-raised-button sm-raised-button-dense">Dense</button>
		<a href="#" class="sm-raised-button">Link</a>
		<button class="sm-raised-button sm-hover-ripple">Hover ripple</button>
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;button class="sm-raised-button">
  &lt;i class="material-icons sm-left">cloud&lt;/i>
  Button example with icon left
&lt;/button>

&lt;button class="sm-raised-button">
  &lt;i class="material-icons sm-right">cloud&lt;/i>
  Button example with icon right
&lt;/button>

&lt;button class="sm-raised-button">Button example without icon&lt;/button>

&lt;input type="button" value="Input type button" class="sm-raised-button">

&lt;input type="submit" value="Submit button" class="sm-raised-button">

&lt;input type="reset" value="Reset button" class="sm-raised-button">

&lt;button class="sm-raised-button sm-raised-button-disabled">Disabled&lt;/button>

&lt;button class="sm-raised-button sm-raised-button-dense">Dense&lt;/button>

&lt;a href="#" class="sm-raised-button">Link&lt;/a>
		</pre>
	</code>
</section>

<section class="sm-row" id="sm-flat-buttons">
	<h3>Flat button</h3>

	<p class="sm-col sm-s12 sm-m6">
		The flat buttons can also be used with an icon.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		<button class="sm-flat-button"><i class="material-icons sm-left">cloud</i> Button example with icon left</button>
		<button class="sm-flat-button"><i class="material-icons sm-right">cloud</i> Button example with icon right</button>
		<button class="sm-flat-button">Button example without icon</button>
		<input type="button" value="Input type button" class="sm-flat-button">
		<input type="submit" value="Submit button" class="sm-flat-button">
		<input type="reset" value="Reset button" class="sm-flat-button">
		<button class="sm-flat-button sm-flat-button-disabled">Disabled</button>
		<button class="sm-flat-button sm-flat-button-dense">Dense</button>
		<a href="#" class="sm-flat-button">Link</a>
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;button class="sm-flat-button">
  &lt;i class="material-icons sm-left">cloud&lt;/i>
  Button example with icon left
&lt;/button>

&lt;button class="sm-flat-button">
  &lt;i class="material-icons sm-right">cloud&lt;/i>
  Button example with icon right
&lt;/button>

&lt;button class="sm-flat-button">Button example without icon&lt;/button>

&lt;input type="button" value="Input type button" class="sm-flat-button">

&lt;input type="submit" value="Submit button" class="sm-flat-button">

&lt;input type="reset" value="Reset button" class="sm-flat-button">

&lt;button class="sm-flat-button sm-flat-button-disabled">Disabled&lt;/button>

&lt;button class="sm-flat-button sm-flat-button-dense">Dense&lt;/button>

&lt;a href="#" class="sm-flat-button">Link&lt;/a>
		</pre>
	</code>
</section>

<section class="sm-row" id="sm-floating-button">
	<h3>Floating button</h3>

	<p class="sm-col sm-s12 sm-m6">
		The floating button only exists out of an icon.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		<button class="sm-floating-button"><i class="material-icons">cloud</i></button>
		<button class="sm-floating-button sm-floating-button-mini"><i class="material-icons">cloud</i></button>
		<a href="#" class="sm-floating-button"><i class="material-icons">home</i></a>
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;button class="sm-floating-button">
  &lt;i class="material-icons">cloud&lt;/i>
&lt;/button>

&lt;button class="sm-floating-button sm-floating-button-mini">
  &lt;i class="material-icons">cloud&lt;/i>
&lt;/button>

&lt;a href="#" class="sm-floating-button">&lt;i class="material-icons">home&lt;/i>&lt;/a>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Icon toggles</h3>

	<p class="sm-col sm-s12 sm-m6">
		The icon toggles could be used for favoring an item or give a star rating
	</p>

	<p class="sm-col sm-s12 sm-m6">
		<input type="checkbox" class="sm-toggle-button sm-white-toggle-button" data-sm-toggle-icon="star_rate" data-sm-color="sm-yellow-text">
		<input type="checkbox" class="sm-toggle-button sm-color-toggle-button" data-sm-toggle-icon="favorite" data-sm-color="sm-red-text">
	</p>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
