<?php
$title = 'Tables';
$description = 'Tables based on Google\'s Material Design';
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
				<th class="sm-checkbox-col"><input type="checkbox"></th>
				<th class="sm-numeric-col">Desert (100g serving)</th>
				<th class="sm-numeric-col">Calories</th>
				<th class="sm-numeric-col">Fat (g)</th>
				<th class="sm-numeric-col">Carbs (g)</th>
				<th class="sm-numeric-col">Protein (g)</th>
				<th class="sm-numeric-col">Sodium (mg)</th>
				<th class="sm-numeric-col">Calcium (%)</th>
				<th class="sm-numeric-col">Iron (%)</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td class="sm-checkbox-col"><input type="checkbox"></td>
				<td>Frozen yogurt</td>
				<td class="sm-numeric-col">159</td>
				<td class="sm-numeric-col">6.0</td>
				<td class="sm-numeric-col">24</td>
				<td class="sm-numeric-col">4.0</td>
				<td class="sm-numeric-col">87</td>
				<td class="sm-numeric-col">14%</td>
				<td class="sm-numeric-col">1%</td>
			</tr>
			<tr>
				<td class="sm-checkbox-col"><input type="checkbox"></td>
				<td>Ice cream sandwich</td>
				<td class="sm-numeric-col">237</td>
				<td class="sm-numeric-col">9.0</td>
				<td class="sm-numeric-col">37</td>
				<td class="sm-numeric-col">4.3</td>
				<td class="sm-numeric-col">129</td>
				<td class="sm-numeric-col">8%</td>
				<td class="sm-numeric-col">1%</td>
			</tr>
		</tbody>
	</table>
</section>
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';