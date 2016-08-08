<?php
$title = 'Elevation and shadows';
$description = 'Elevation and shadows styled to match Google\'s Material Design';
$keywords = 'material design, smaterial, elevation, shadows';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<style>
	.square {
		width: 100px;
		height: 100px;
		margin: 10px 0;
	}
</style>


<section class="sc-row">
	<h2>Elevation and shadows usage</h2>

	<p class="sc-col sc-s12 sc-m6">
		Each element has it's own elevation and shadow. The elevation and shadows are described here.
	</p>
</section>

<section class="sc-row">
	<h3>Shadow / elevation</h3>

	<table class="sc-col sc-s12 sc-m7">
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
				<td><code>.sc-z24</code></td>
				<td>
					<p><a href="/components/dialogs.php">Dialog</a></p>
					<p><a href="">Picker</a></p>
				</td>
				<td><div class="sc-z24 square"></div></td>
			</tr>
			<tr>
				<td>16</td>
				<td><code>.sc-z16</code></td>
				<td>
					<p><a href="/components/navigation-drawer.php">Nav drawer (sidenav)</a></p>
					<p><a href="/components/navigation-drawer.php">Right drawer</a></p>
					<p><a href="/components/bottom-sheet.php">Modal bottom sheet</a></p>
				</td>
				<td><div class="sc-z16 square"></div></td>
			</tr>
			<tr>
				<td>12</td>
				<td><code>.sc-z12</code></td>
				<td>
					<p><a href="/components/buttons.php#sc-floating-button">Floating action button (FAB - pressed)</a></p>
				</td>
				<td><div class="sc-z12 square"></div></td>
			</tr>
			<tr>
				<td>9</td>
				<td><code>.sc-z9</code></td>
				<td>
					<p><a href="">Sub menu</a></p>
				</td>
				<td><div class="sc-z9 square"></div></td>
			</tr>
			<tr>
				<td>8</td>
				<td><code>.sc-z8</code></td>
				<td>
					<p><a href="">Menu</a></p>
					<p><a href="/components/cards.php">Card (picked up state)</a></p>
					<p><a href="/components/buttons.php#sc-raised-button">Raised button (pressed state)</a></p>
				</td>
				<td><div class="sc-z8 square"></div></td>
			</tr>
			<tr>
				<td>6</td>
				<td><code>.sc-z6</code></td>
				<td>
					<p><a href="/components/buttons.php#sc-floating-button">Floating action button (FAB - resting elevation)</a></p>
					<p><a href="/components/snackbars-toasts.php">Snackbar</a></p>
				</td>
				<td><div class="sc-z6 square"></div></td>
			</tr>
			<tr>
				<td>4</td>
				<td><code>.sc-z4</code></td>
				<td>
					<p><a href="/components/appbar.php">App Bar</a></p>
				</td>
				<td><div class="sc-z4 square"></div></td>
			</tr>
			<tr>
				<td>3</td>
				<td><code>.sc-z3</code></td>
				<td>
					<p><a href="">Refresh indicator</a></p>
					<p><a href="">Quick entry / Search bar (scrolled state)</a></p>
				</td>
				<td><div class="sc-z3 square"></div></td>
			</tr>
			<tr>
				<td>2</td>
				<td><code>.sc-z2</code></td>
				<td>
					<p><a href="/components/cards.php">Card (resting elevation)</a></p>
					<p><a href="/components/buttons.php#sc-raised-button">Raised button (resting elevation)</a></p>
					<p><a href="">Quick entry / Search bar (resting elevation)</a></p>
					<p><a href="/components/chips.php">Chips (contact chip hovered and pressed)</a></p>
				</td>
				<td><div class="sc-z2 square"></div></td>
			</tr>
			<tr>
				<td>1</td>
				<td><code>.sc-z1</code></td>
				<td>
					<p><a href="/components/selection-controls.php#switch">Switch</a></p>
				</td>
				<td><div class="sc-z1 square"></div></td>
			</tr>
			<tr>
				<td>0</td>
				<td><code>.sc-z0</code></td>
				<td>Will remove shadow</td>
			</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
