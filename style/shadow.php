<?php
$title = 'Elevation and shadows';
$description = 'Elevation and shadows of material design';
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


<section class="sm-row">
	<h2>Elevation and shadows usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		Each element has it's own elevation and shadow. The elevation and shadows are described here.
	</p>
</section>

<section class="sm-row">
	<h3>Shadow / elevation</h3>

	<table class="sm-col sm-s12 sm-m7">
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
				<td><code>.sm-z24</code></td>
				<td>
					<p><a href="">Dialog</a></p>
					<p><a href="">Picker</a></p>
				</td>
				<td><div class="sm-z24 square"></div></td>
			</tr>
			<tr>
				<td>16</td>
				<td><code>.sm-z16</code></td>
				<td>
					<p><a href="/components/sidenav.php">Nav drawer (sidenav)</a></p>
					<p><a href="/components/sidenav.php">Right drawer</a></p>
					<p><a href="">Modal bottom sheet</a></p>
				</td>
				<td><div class="sm-z16 square"></div></td>
			</tr>
			<tr>
				<td>12</td>
				<td><code>.sm-z12</code></td>
				<td>
					<p><a href="/components/buttons.php#sm-floating-button">Floating action button (FAB - pressed)</a></p>
				</td>
				<td><div class="sm-z12 square"></div></td>
			</tr>
			<tr>
				<td>9</td>
				<td><code>.sm-z9</code></td>
				<td>
					<p><a href="">Sub menu</a></p>
				</td>
				<td><div class="sm-z9 square"></div></td>
			</tr>
			<tr>
				<td>8</td>
				<td><code>.sm-z8</code></td>
				<td>
					<p><a href="">Menu</a></p>
					<p><a href="">Card (picked up state)</a></p>
					<p><a href="/components/buttons.php#sm-raised-button">Raised button (pressed state)</a></p>
				</td>
				<td><div class="sm-z8 square"></div></td>
			</tr>
			<tr>
				<td>6</td>
				<td><code>.sm-z6</code></td>
				<td>
					<p><a href="/components/buttons.php#sm-floating-button">Floating action button (FAB - resting elevation)</a></p>
					<p><a href="">Snackbar</a></p>
				</td>
				<td><div class="sm-z6 square"></div></td>
			</tr>
			<tr>
				<td>4</td>
				<td><code>.sm-z4</code></td>
				<td>
					<p><a href="/components/appbar.php">App Bar</a></p>
				</td>
				<td><div class="sm-z4 square"></div></td>
			</tr>
			<tr>
				<td>3</td>
				<td><code>.sm-z3</code></td>
				<td>
					<p><a href="">Refresh indicator</a></p>
					<p><a href="">Quick entry / Search bar (scrolled state)</a></p>
				</td>
				<td><div class="sm-z3 square"></div></td>
			</tr>
			<tr>
				<td>2</td>
				<td><code>.sm-z2</code></td>
				<td>
					<p><a href="">Card (resting elevation)</a></p>
					<p><a href="/components/buttons.php#sm-raised-button">Raised button (resting elevation)</a></p>
					<p><a href="">Quick entry / Search bar (resting elevation)</a></p>
					<p><a href="/components/chips.php">Chips (contact chip hovered and pressed)</a></p>
				</td>
				<td><div class="sm-z2 square"></div></td>
			</tr>
			<tr>
				<td>1</td>
				<td><code>.sm-z1</code></td>
				<td>
					<p><a href="">Switch</a></p>
				</td>
				<td><div class="sm-z1 square"></div></td>
			</tr>
			<tr>
				<td>0</td>
				<td><code>.sm-z0</code></td>
				<td>Will remove shadow</td>
			</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
