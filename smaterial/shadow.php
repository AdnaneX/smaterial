<?php
$title = 'Elevation and shadows';
$description = 'Elevation and shadows styled to match Google\'s Material Design';
$keywords = 'elevation, shadows';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<style>
	.square {
		width: 100px;
		height: 100px;
		margin: 10px 0;
	}
</style>

<section class="row">
	<h2 class="col xs4 s12">Elevation and shadows usage</h2>

	<p class="col xs4 s12 m6">
		Each element has it's own elevation and shadow. The elevation and shadows are described here.
	</p>
</section>

<section class="row">
	<h3 class="col xs4 s12">Shadow / elevation</h3>

	<table class="col xs4 s12 m7">
		<thead>
		<tr>
			<th>Elevation (px)</th>
			<th>Class</th>
			<th>Component</th>
			<th>Example</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>24</td>
			<td><code>.z24</code></td>
			<td>
				<p><a href="/components/dialogs.php">Dialog</a></p>
				<p><a href="">Picker</a></p>
			</td>
			<td><div class="z24 square"></div></td>
		</tr>
		<tr>
			<td>16</td>
			<td><code>.z16</code></td>
			<td>
				<p><a href="/patterns/navigation-drawer.php">Nav drawer (sidenav)</a></p>
				<p><a href="/patterns/navigation-drawer.php">Right drawer</a></p>
				<p><a href="/components/bottom-sheet.php">Modal bottom sheet</a></p>
			</td>
			<td><div class="z16 square"></div></td>
		</tr>
		<tr>
			<td>12</td>
			<td><code>.z12</code></td>
			<td>
					<p><a href="/components/buttons.php#floating-button">Floating action button (FAB - pressed)</a></p>
			</td>
			<td><div class="z12 square"></div></td>
		</tr>
		<tr>
			<td>9</td>
			<td><code>.z9</code></td>
			<td>
				<p><a href="">Sub menu</a></p>
			</td>
			<td><div class="z9 square"></div></td>
		</tr>
		<tr>
			<td>8</td>
			<td><code>.z8</code></td>
			<td>
				<p><a href="/components/menu.php">Menu</a></p>
				<p><a href="/components/cards.php">Card (picked up state)</a></p>
				<p><a href="/components/buttons.php#raised-button">Raised button (pressed state)</a></p>
			</td>
			<td><div class="z8 square"></div></td>
		</tr>
		<tr>
			<td>6</td>
			<td><code>.z6</code></td>
			<td>
					<p><a href="/components/buttons.php#floating-button">Floating action button (FAB - resting elevation)</a></p>
				<p><a href="/components/snackbars-toasts.php">Snackbar</a></p>
			</td>
			<td><div class="z6 square"></div></td>
		</tr>
		<tr>
			<td>4</td>
			<td><code>.z4</code></td>
			<td>
				<p><a href="/components/appbar.php">App Bar</a></p>
			</td>
			<td><div class="z4 square"></div></td>
		</tr>
		<tr>
			<td>3</td>
			<td><code>.z3</code></td>
			<td>
				<p><a href="">Refresh indicator</a></p>
				<p><a href="">Quick entry / Search bar (scrolled state)</a></p>
			</td>
			<td><div class="z3 square"></div></td>
		</tr>
		<tr>
			<td>2</td>
			<td><code>.z2</code></td>
			<td>
				<p><a href="/components/cards.php">Card (resting elevation)</a></p>
				<p><a href="/components/buttons.php#raised-button">Raised button (resting elevation)</a></p>
				<p><a href="">Quick entry / Search bar (resting elevation)</a></p>
				<p><a href="/components/chips.php">Chips (contact chip hovered and pressed)</a></p>
			</td>
			<td><div class="z2 square"></div></td>
		</tr>
		<tr>
			<td>1</td>
			<td><code>.z1</code></td>
			<td>
				<p><a href="/components/selection-controls.php#switch">Switch</a></p>
			</td>
			<td><div class="z1 square"></div></td>
		</tr>
		<tr>
			<td>0</td>
			<td><code>.z0</code></td>
			<td>Will remove shadow</td>
		</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
