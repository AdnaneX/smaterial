<?php
$title = 'Buttons';
$description = 'Buttons based on Google\'s Material Design';
$keywords = 'material design, smaterial, buttons, floating button, flat button, raised button, icon toggle, floating, flat, raised';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
	<section class="sc-row">
		<h2>Buttons usage</h2>

		<p class="sc-col sc-xs4 sc-s12">
			There are a couple of different buttons with each a different purpose.
		</p>

		<p class="sc-col sc-xs4 sc-s12">
			The <em>raised button</em> is the most common button and is used for example in forms and with <code>&lt;button></code>.
			The <em>flat button</em> is used in dialogs (modals) and toolbars.
			The <em>floating button</em> are mostly used for actions.
			If you would like to use the default browser button style you don't need to add a class.
		</p>
	</section>

	<section class="sc-row" id="sc-raised-button">
		<h3>Raised button</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			The raised button can be used on it's own but also with an icon.
			See the examples below:
		</p>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<button class="sc-raised-button"><i class="material-icons sc-left">cloud</i> Button example with icon left</button>
		<button class="sc-raised-button"><i class="material-icons sc-right">cloud</i> Button example with icon right</button>
			<button class="sc-raised-button">Button example without icon</button>
			<input type="button" value="Input type button" class="sc-raised-button">
			<input type="submit" value="Submit button" class="sc-raised-button">
			<input type="reset" value="Reset button" class="sc-raised-button">
			<button class="sc-raised-button sc-raised-button-disabled">Disabled</button>
			<button class="sc-raised-button sc-raised-button-dense">Dense</button>
			<a href="#" class="sc-raised-button">Link</a>
			<button class="sc-raised-button sc-hover-ripple">Hover ripple</button>
		<button class="sc-raised-button sc-hover-ripple"><i class="material-icons sc-left">home</i> Hover ripple</button>
		</p>

		<pre class="language-html sc-col sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;button class="sc-raised-button">
  &lt;i class="material-icons sc-left">cloud&lt;/i>
  Button example with icon left
&lt;/button>

&lt;button class="sc-raised-button">
  &lt;i class="material-icons sc-right">cloud&lt;/i>
  Button example with icon right
&lt;/button>

&lt;button class="sc-raised-button">Button example without icon&lt;/button>

&lt;input type="button" value="Input type button" class="sc-raised-button">

&lt;input type="submit" value="Submit button" class="sc-raised-button">

&lt;input type="reset" value="Reset button" class="sc-raised-button">

&lt;button class="sc-raised-button sc-raised-button-disabled">Disabled&lt;/button>

&lt;button class="sc-raised-button sc-raised-button-dense">Dense&lt;/button>

&lt;a href="#" class="sc-raised-button">Link&lt;/a>

&lt;button class="sc-raised-button sc-hover-ripple sc-ripple">
  Hover ripple
&lt;/button>

&lt;button class="sc-raised-button sc-hover-ripple">
  &lt;i class="material-icons sc-left">home&lt;/i>
  Hover ripple
&lt;/button>
		</code>
	</pre>
	</section>

	<section class="sc-row" id="sc-flat-buttons">
		<h3>Flat button</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			The flat buttons can also be used with an icon.
		</p>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			<button class="sc-flat-button"><i class="material-icons sc-left">cloud</i> Button example with icon left</button>
			<button class="sc-flat-button"><i class="material-icons sc-right">cloud</i> Button example with icon right</button>
			<button class="sc-flat-button">Button example without icon</button>
			<input type="button" value="Input type button" class="sc-flat-button">
			<input type="submit" value="Submit button" class="sc-flat-button">
			<input type="reset" value="Reset button" class="sc-flat-button">
			<button class="sc-flat-button sc-flat-button-disabled">Disabled</button>
			<button class="sc-flat-button sc-flat-button-dense">Dense</button>
			<a href="#" class="sc-flat-button">Link</a>
		</p>

		<pre class="language-html sc-col sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;button class="sc-flat-button">
  &lt;i class="material-icons sc-left">cloud&lt;/i>
  Button example with icon left
&lt;/button>

&lt;button class="sc-flat-button">
  &lt;i class="material-icons sc-right">cloud&lt;/i>
  Button example with icon right
&lt;/button>

&lt;button class="sc-flat-button">Button example without icon&lt;/button>

&lt;input type="button" value="Input type button" class="sc-flat-button">

&lt;input type="submit" value="Submit button" class="sc-flat-button">

&lt;input type="reset" value="Reset button" class="sc-flat-button">

&lt;button class="sc-flat-button sc-flat-button-disabled">Disabled&lt;/button>

&lt;button class="sc-flat-button sc-flat-button-dense">Dense&lt;/button>

&lt;a href="#" class="sc-flat-button">Link&lt;/a>
		</code>
	</pre>
	</section>

	<section class="sc-row" id="sc-floating-button">
		<h3>Floating button</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			The floating button only exists out of an icon.
		</p>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			<button class="sc-floating-button"><i class="material-icons">cloud</i></button>
			<button class="sc-floating-button sc-floating-button-mini"><i class="material-icons">cloud</i></button>
			<a href="#" class="sc-floating-button"><i class="material-icons">home</i></a>
		</p>

		<pre class="language-html sc-col sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;button class="sc-floating-button">
  &lt;i class="material-icons">cloud&lt;/i>
&lt;/button>

&lt;button class="sc-floating-button sc-floating-button-mini">
  &lt;i class="material-icons">cloud&lt;/i>
&lt;/button>

&lt;a href="#" class="sc-floating-button">&lt;i class="material-icons">home&lt;/i>&lt;/a>
		</code>
	</pre>
	</section>

	<section class="sc-row">
		<h3>Icon toggles</h3>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			The icon toggles could be used for favoring an item or give a star rating
		</p>

		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			<input type="checkbox" class="sc-toggle-button sc-white-toggle-button" data-sc-toggle-icon="star_rate" data-sc-color="sc-yellow-text">
			<input type="checkbox" class="sc-toggle-button sc-color-toggle-button" data-sc-toggle-icon="favorite" data-sc-color="sc-red-text">
		</p>
	</section>

	<section class="sc-row">
		<h3>Button settings</h3>

		<table class="sc-col sc-xs4 sc-s12 sc-m6">
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
				<td>Variable / integer/td>
				<td>Change minimal width of raised button</td>
			</tr>
			<tr>
				<td>$raised-size</td>
				<td>Variable / integer</td>
				<td>Change height and line height</td>
			</tr>
			<tr>
				<td>$raised-padding</td>
				<td>Variable / integer</td>
				<td>Change padding</td>
			</tr>
			<tr>
				<td>$raised-margin</td>
				<td>Variable / integer</td>
				<td>Change margin</td>
			</tr>
			<tr>
				<td>$raised-transition</td>
				<td>Transition properties</td>
				<td>Change transition</td>
			</tr>
			<tr>
				<td>$raised-dense-size</td>
				<td>Variable / integer</td>
				<td>Change size of dense button</td>
			</tr>
			<tr>
				<td>$raised-dense-font-size</td>
				<td>Variable / integer</td>
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