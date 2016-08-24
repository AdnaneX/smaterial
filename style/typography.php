<?php
$title = 'Typography';
$description = 'Typography styled to match Google\'s Material Design';
$keywords = 'material design, smaterial, typography, roboto, font';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

	<section class="sc-row">
	<h2>Typography usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The Roboto font is default for Material Design.
		The font is included in the framework and is set as the default font.
		If you would like to use Noto click <a href="https://www.google.com/get/noto/" target="_blank">here</a>.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The Roboto font is available in a couple of font weights: 100 (<em>thin</em>),
		300 (<em>light</em>), 400 (<em>regular</em>), 500 (<em>medium</em>), 700 (<em>bold</em>) and 900 (<em>black</em>).
		The availability of font weights for The Noto font depends.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		<img width="100%" src="http://material-design.storage.googleapis.com/publish/material_v_4/material_ext_publish/0Bx4BSt6jniD7SW9CUzR4MnRpOTg/style_typography_roboto1.png" alt="Roboto font example">
	</p>

	<table class="sc-col sc-xs4 sc-s12 sc-m6">
		<thead>
		<tr>
			<th>Class</th>
			<th>Used for</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>.sc-display-4</td>
			<td><h1>h1</h1></td>
		</tr>
		<tr>
			<td>.sc-display-3</td>
			<td><h2>h2</h2></td>
		</tr>
		<tr>
			<td>.sc-display-2</td>
			<td><h3>h3</h3></td>
		</tr>
		<tr>
			<td>.sc-display-1</td>
			<td><h4>h4</h4></td>
		</tr>
		<tr>
			<td>.sc-headline</td>
			<td><h5>h5</h5></td>
		</tr>
		<tr>
			<td>.sc-title</td>
			<td><a href="/components/appbar.php">Appbar title</a>, <h6>h6</h6></td>
		</tr>
		<tr>
			<td>.sc-subhead-2</td>
			<td></td>
		</tr>
		<tr>
			<td>.sc-subhead-1</td>
			<td></td>
		</tr>
		<tr>
			<td>.sc-body-2</td>
			<td></td>
		</tr>
		<tr>
			<td>.sc-body-1</td>
			<td>Body</td>
		</tr>
		<tr>
			<td>.sc-caption</td>
			<td></td>
		</tr>
		<tr>
			<td>.sc-label</td>
			<td><a href="/components/textfields.php">Form labels</a></td>
		</tr>
		<tr>
			<td>.sc-menu</td>
			<td></td>
		</tr>
		<tr>
			<td>.sc-button</td>
			<td><a href="/components/buttons.php">Button</a></td>
		</tr>
		</tbody>
	</table>
</section>

<section class="sc-row">
	<h3>Settings</h3>

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
			<th colspan="3">Font size</th>
		</tr>
		<tr>
			<td>$font-size-initial</td>
			<td>Variable / integer</td>
			<td>The value from which everything else is calculated</td>
		</tr>
		<tr>
			<td>$font-size</td>
			<td>Variable / percentage</td>
			<td>Font size percentage</td>
		</tr>
		<tr>
			<td>$font-size-large</td>
			<td>Variable / percentage</td>
			<td>Font size percentage for large text<code class="language-css">sc-text-large</code></td>
		</tr>
		<tr>
			<td>$font-size-small</td>
			<td>Variable / percentage</td>
			<td>Font size percentage for small text <code class="language-css">sc-text-small</code></td>
		</tr>

		<tr>
			<th colspan="3">Typographic Scale</th>
		</tr>
		<tr>
			<td>$font-size-display-4</td>
			<td>Variable / integer</td>
			<td>Font size of display 4</td>
		</tr>
		<tr>
			<td>$font-size-display-3</td>
			<td>Variable / integer</td>
			<td>Font size of display 3</td>
		</tr>
		<tr>
			<td>$font-size-display-2</td>
			<td>Variable / integer</td>
			<td>Font size of display 2</td>
		</tr>
		<tr>
			<td>$font-size-display-1</td>
			<td>Variable / integer</td>
			<td>Font size of display 1</td>
		</tr>
		<tr>
			<td>$font-size-headline</td>
			<td>Variable / integer</td>
			<td>Font size of headlines</td>
		</tr>
		<tr>
			<td>$font-size-title</td>
			<td>Variable / integer</td>
			<td>Font size of titles</td>
		</tr>
		<tr>
			<td>$font-size-subhead-2</td>
			<td>Variable / integer</td>
			<td>Font size of subhead 2</td>
		</tr>
		<tr>
			<td>$font-size-subhead-1</td>
			<td>Variable / integer</td>
			<td>Font size of subhead 1</td>
		</tr>
		<tr>
			<td>$font-size-body-2</td>
			<td>Variable / integer</td>
			<td>Font size of body 2</td>
		</tr>
		<tr>
			<td>$font-size-body-1</td>
			<td>Variable / integer</td>
			<td>Font size of body 1</td>
		</tr>
		<tr>
			<td>$font-size-caption</td>
			<td>Variable / integer</td>
			<td>Font size of captions</td>
		</tr>
		<tr>
			<td>$font-size-label</td>
			<td>Variable / integer</td>
			<td>Font size of labels</td>
		</tr>
		<tr>
			<td>$font-size-menu</td>
			<td>Variable / integer</td>
			<td>Font size of menu items</td>
		</tr>
		<tr>
			<td>$font-size-button</td>
			<td>Variable / integer</td>
			<td>Font size of buttons</td>
		</tr>

		<tr>
			<th colspan="3">Typographic Scale for devices (max-width: 960px)</th>
		</tr>
		<tr>
			<td>$font-size-dv-subhead</td>
			<td>Variable / integer</td>
			<td>Font size of subheads</td>
		</tr>
		<tr>
			<td>$font-size-dv-body</td>
			<td>Variable / integer</td>
			<td>Font size of body</td>
		</tr>
		<tr>
			<td>$font-size-dv-menu</td>
			<td>Variable / integer</td>
			<td>Font size of menu items</td>
		</tr>

		<tr>
			<th colspan="3">Basic Styles</th>
		</tr>
		<tr>
			<td>$font-weight-display-4</td>
			<td>Variable / integer</td>
			<td>Font weight of display 4</td>
		</tr>
		<tr>
			<td>$font-weight-display-3</td>
			<td>Variable / integer</td>
			<td>Font weight of display 3</td>
		</tr>
		<tr>
			<td>$font-weight-display-2</td>
			<td>Variable / integer</td>
			<td>Font weight of display 2</td>
		</tr>
		<tr>
			<td>$font-weight-display-1</td>
			<td>Variable / integer</td>
			<td>Font weight of display 1</td>
		</tr>
		<tr>
			<td>$font-weight-headline</td>
			<td>Variable / integer</td>
			<td>Font weight of headlines</td>
		</tr>
		<tr>
			<td>$font-weight-title</td>
			<td>Variable / integer</td>
			<td>Font weight of titles</td>
		</tr>
		<tr>
			<td>$font-weight-subhead-2</td>
			<td>Variable / integer</td>
			<td>Font weight of subhead 2</td>
		</tr>
		<tr>
			<td>$font-weight-subhead-1</td>
			<td>Variable / integer</td>
			<td>Font weight of subhead 1</td>
		</tr>
		<tr>
			<td>$font-weight-body-2</td>
			<td>Variable / integer</td>
			<td>Font weight of body 2</td>
		</tr>
		<tr>
			<td>$font-weight-body-1</td>
			<td>Variable / integer</td>
			<td>Font weight of body 1</td>
		</tr>
		<tr>
			<td>$font-weight-caption</td>
			<td>Variable / integer</td>
			<td>Font weight of captions</td>
		</tr>
		<tr>
			<td>$font-weight-label</td>
			<td>Variable / integer</td>
			<td>Font weight of labels</td>
		</tr>
		<tr>
			<td>$font-weight-menu</td>
			<td>Variable / integer</td>
			<td>Font weight of menu items</td>
		</tr>
		<tr>
			<td>$font-weight-button</td>
			<td>Variable / integer</td>
			<td>Font weight of buttons</td>
		</tr>

		<tr>
			<th colspan="3">Line Height</th>
		</tr>
		<tr>
			<td>$line-height-display-4</td>
			<td>Variable / integer</td>
			<td>Line height of display 4</td>
		</tr>
		<tr>
			<td>$line-height-display-3</td>
			<td>Variable / integer</td>
			<td>Line height of display 3</td>
		</tr>
		<tr>
			<td>$line-height-display-2</td>
			<td>Variable / integer</td>
			<td>Line height of display 2</td>
		</tr>
		<tr>
			<td>$line-height-display-1</td>
			<td>Variable / integer</td>
			<td>Line height of display 1</td>
		</tr>
		<tr>
			<td>$line-height-headline</td>
			<td>Variable / integer</td>
			<td>Line height of headlines</td>
		</tr>
		<tr>
			<td>$line-height-title</td>
			<td>Variable / integer</td>
			<td>Line height of titles</td>
		</tr>
		<tr>
			<td>$line-height-subhead-2</td>
			<td>Variable / integer</td>
			<td>Line height of subhead 2</td>
		</tr>
		<tr>
			<td>$line-height-subhead-1</td>
			<td>Variable / integer</td>
			<td>Line height of subhead 1</td>
		</tr>
		<tr>
			<td>$line-height-body-2</td>
			<td>Variable / integer</td>
			<td>Line height of body 2</td>
		</tr>
		<tr>
			<td>$line-height-body-1</td>
			<td>Variable / integer</td>
			<td>Line height of body 1</td>
		</tr>
		<tr>
			<td>$line-height-caption</td>
			<td>Variable / integer</td>
			<td>Line height of captions</td>
		</tr>
		<tr>
			<td>$line-height-label</td>
			<td>Variable / integer</td>
			<td>Line height of labels</td>
		</tr>
		<tr>
			<td>$line-height-menu</td>
			<td>Variable / integer</td>
			<td>Line height of menu items</td>
		</tr>
		<tr>
			<td>$line-height-button</td>
			<td>Variable / integer</td>
			<td>Line height of buttons</td>
		</tr>

		<tr>
			<th colspan="3">Tracking and kerning</th>
		</tr>
		<tr>
			<td>$letter-spacing-display-4</td>
			<td>Variable / integer</td>
			<td>Letter spacing of display 4</td>
		</tr>
		<tr>
			<td>$letter-spacing-display-3</td>
			<td>Variable / integer</td>
			<td>Letter spacing of display 3</td>
		</tr>
		<tr>
			<td>$letter-spacing-display-2</td>
			<td>Variable / integer</td>
			<td>Letter spacing of display 2</td>
		</tr>
		<tr>
			<td>$letter-spacing-display-1</td>
			<td>Variable / integer</td>
			<td>Letter spacing of display 1</td>
		</tr>
		<tr>
			<td>$letter-spacing-headline</td>
			<td>Variable / integer</td>
			<td>Letter spacing of headlines</td>
		</tr>
		<tr>
			<td>$letter-spacing-title</td>
			<td>Variable / integer</td>
			<td>Letter spacing of titles</td>
		</tr>
		<tr>
			<td>$letter-spacing-subhead-2</td>
			<td>Variable / integer</td>
			<td>Letter spacing of subhead 2</td>
		</tr>
		<tr>
			<td>$letter-spacing-subhead-1</td>
			<td>Variable / integer</td>
			<td>Letter spacing of subhead 1</td>
		</tr>
		<tr>
			<td>$letter-spacing-body-2</td>
			<td>Variable / integer</td>
			<td>Letter spacing of body 2</td>
		</tr>
		<tr>
			<td>$letter-spacing-body-1</td>
			<td>Variable / integer</td>
			<td>Letter spacing of body 1</td>
		</tr>
		<tr>
			<td>$letter-spacing-caption</td>
			<td>Variable / integer</td>
			<td>Letter spacing of captions</td>
		</tr>
		<tr>
			<td>$letter-spacing-label</td>
			<td>Variable / integer</td>
			<td>Letter spacing of labels</td>
		</tr>
		<tr>
			<td>$letter-spacing-menu</td>
			<td>Variable / integer</td>
			<td>Letter spacing of menh items</td>
		</tr>
		<tr>
			<td>$letter-spacing-button</td>
			<td>Variable / integer</td>
			<td>Letter spacing of buttons</td>
		</tr>
		</tbody>
	</table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';