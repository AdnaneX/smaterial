<?php
$title = 'Buttons';
$description = 'Buttons based on Google\'s Material Design';
$keywords = 'material design, smaterial, buttons, floating button, flat button, raised button, icon toggle, floating, flat, raised';

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
		<button class="sm-raised-button sm-hover-ripple sm-ripple">Hover ripple</button>
		<button class="sm-raised-button sm-hover-ripple"><i class="material-icons sm-left">home</i> Hover ripple</button>
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

&lt;button class="sm-raised-button sm-hover-ripple sm-ripple">
  Hover ripple
&lt;/button>

&lt;button class="sm-raised-button sm-hover-ripple">
  &lt;i class="material-icons sm-left">home&lt;/i>
  Hover ripple
&lt;/button>
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

<section class="sm-row">
	<h3>Button settings</h3>

	<table class="sm-col sm-s12 sm-m6">
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
				<td>$raised-min-width</td>
				<td>Variable / </td>
				<td>Change minimal width of raised button</td>
			</tr>
			<tr>
				<td>$raised-size</td>
				<td>Variable</td>
				<td>Change height and line height</td>
			</tr>
			<tr>
				<td>$raised-padding</td>
				<td>Variable</td>
				<td>Change padding</td>
			</tr>
			<tr>
				<td>$raised-margin</td>
				<td>Variable</td>
				<td>Change margin</td>
			</tr>
			<tr>
				<td>$raised-transition</td>
				<td></td>
				<td>Change transition</td>
			</tr>
			<tr>
				<td>$raised-dense-size</td>
				<td>Variable</td>
				<td>Change size of dense button</td>
			</tr>
			<tr>
				<td>$raised-dense-font-size</td>
				<td>Variable</td>
				<td>Change font size</td>
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
				<td>Change flat font color</td>
			</tr>
			<tr>
				<td>$flat-icon-color</td>
				<td>Variable / color</td>
				<td></td>
			</tr>
			<tr>
				<td>$flat-focus</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>$flat-min-width</td>
				<td>Variable</td>
				<td>Change min width flat button</td>
			</tr>
			<tr>
				<td>$flat-size</td>
				<td>Variable</td>
				<td>Changes the size</td>
			</tr>
			<tr>
				<td>$flat-padding</td>
				<td>Variable</td>
				<td>Changes padding</td>
			</tr>
			<tr>
				<td>$flat-margin</td>
				<td>Variable</td>
				<td>Changes the margin</td>
			</tr>
			<tr>
				<td>$flat-disabled-color</td>
				<td>Variable / color</td>
				<td>Changes the disabled font color</td>
			</tr>
			<tr>
				<td>$floating-transition</td>
				<td></td>
				<td>Changes transition</td>
			</tr>
			<tr>
				<td>$floating-background</td>
				<td>Variable / color</td>
				<td>Change the background color</td>
			</tr>
			<tr>
				<td>$floating-icon</td>
				<td>Variable / color</td>
				<td>Change icon color</td>
			</tr>
			<tr>
				<td>$floating-size</td>
				<td>Variable</td>
				<td>Change floating size</td>
			</tr>
			<tr>
				<td>$floating-icon-size</td>
				<td>Variable</td>
				<td>Change icon size</td>
			</tr>
			<tr>
				<td>$floating-mini-size</td>
				<td>Variable</td>
				<td>Change mini size</td>
			</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';