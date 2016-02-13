<?php
$title = 'Tables';
$description = 'Tables based on Googles Material Design';
$keywords = 'material design, smaterial, tables, data tables';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Tables</h2>

	<p class="sm-col sm-s12 sm-m6">

	</p>

	<table class="sm-table-hover">
		<thead>
			<tr>
				<th><input type="checkbox"></th>
				<th class="sm-numeric-column">Desert (100g serving)</th>
				<th class="sm-numeric-column">Calories</th>
				<th class="sm-numeric-column">Fat (g)</th>
				<th class="sm-numeric-column">Carbs (g)</th>
				<th class="sm-numeric-column">Protein (g)</th>
				<th class="sm-numeric-column">Sodium (mg)</th>
				<th class="sm-numeric-column">Calcium (%)</th>
				<th class="sm-numeric-column">Iron (%)</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td><input type="checkbox"></td>
				<td>Frozen yogurt</td>
				<td class="sm-numeric-column">159</td>
				<td class="sm-numeric-column">6.0</td>
				<td class="sm-numeric-column">24</td>
				<td class="sm-numeric-column">4.0</td>
				<td class="sm-numeric-column">87</td>
				<td class="sm-numeric-column">14%</td>
				<td class="sm-numeric-column">1%</td>
			</tr>
			<tr>
				<td><input type="checkbox"></td>
				<td>Ice cream sandwich</td>
				<td class="sm-numeric-column">237</td>
				<td class="sm-numeric-column">9.0</td>
				<td class="sm-numeric-column">37</td>
				<td class="sm-numeric-column">4.3</td>
				<td class="sm-numeric-column">129</td>
				<td class="sm-numeric-column">8%</td>
				<td class="sm-numeric-column">1%</td>
			</tr>
		</tbody>
	</table>
</section>
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';