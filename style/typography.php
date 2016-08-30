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
			<td><span class="sc-subhead2">Example</span></td>
		</tr>
		<tr>
			<td>.sc-subhead-1</td>
			<td><span class="sc-subhead1">Example</span></td>
		</tr>
		<tr>
			<td>.sc-body-2</td>
			<td><span class="sc-body-2">Example</span></td>
		</tr>
		<tr>
			<td>.sc-body-1</td>
			<td>Body</td>
		</tr>
		<tr>
			<td>.sc-caption</td>
			<td><span class="sc-caption">Example</span></td>
		</tr>
		<tr>
			<td>.sc-label</td>
			<td><label><a href="/components/textfields.php">Form labels</a></label></td>
		</tr>
		<tr>
			<td>.sc-menu</td>
			<td><span class="sc-menu">Example</span></td>
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
			<td>$roboto-font-path</td>
			<td>Font file path</td>
			<td>Changes the location of the font path</td>
		</tr>
		<tr>
			<td>$noto-font-path</td>
			<td>Font file path</td>
			<td>Changes the location of the font path</td>
		</tr>
		<tr>
			<td>$font-size</td>
			<td>Integer</td>
			<td>The initial size from which everything else is calculated</td>
		</tr>
		<tr>
			<td>$font-color-display-4</td>
			<td>Color / variable</td>
			<td>changes the color of display 4</td>
		</tr>
		<tr>
			<td>$font-color-display-3</td>
			<td>Color / variable</td>
			<td>changes the color of display 3</td>
		</tr>
		<tr>
			<td>$font-color-display-2</td>
			<td>Color / variable</td>
			<td>changes the color of display 2</td>
		</tr>
		<tr>
			<td>$font-color-display-1</td>
			<td>Color / variable</td>
			<td>changes the color of display 1</td>
		</tr>
		<tr>
			<td>$font-color-headline</td>
			<td>Color / variable</td>
			<td>changes the color of headline</td>
		</tr>
		<tr>
			<td>$font-color-title</td>
			<td>Color / variable</td>
			<td>changes the color of title</td>
		</tr>
		<tr>
			<td>$font-color-subhead</td>
			<td>Color / variable</td>
			<td>changes the color of subhead</td>
		</tr>
		<tr>
			<td>$font-color-body-2</td>
			<td>Color / variable</td>
			<td>changes the color of body 2</td>
		</tr>
		<tr>
			<td>$font-color-body-1</td>
			<td>Color / variable</td>
			<td>changes the color of body 1</td>
		</tr>
		<tr>
			<td>$font-color-caption</td>
			<td>Color / variable</td>
			<td>changes the color of caption</td>
		</tr>
		<tr>
			<td>$font-color-label</td>
			<td>Color / variable</td>
			<td>changes the color of label</td>
		</tr>
		<tr>
			<td>$font-color-menu</td>
			<td>Color / variable</td>
			<td>changes the color of menu</td>
		</tr>
		<tr>
			<td>$font-color-button</td>
			<td>Color / variable</td>
			<td>changes the color of button</td>
		</tr>
		</tbody>
	</table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';