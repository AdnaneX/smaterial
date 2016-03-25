<?php
$title = 'Tables';
$description = 'Tables based on Google\'s Material Design';
$keywords = 'material design, smaterial, tables, data tables';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Tables</h2>

	<p class="sc-col sc-s12 sc-m6">

	</p>

	<table class="sc-table-hover">
		<thead>
			<tr>
				<th class="sc-checkbox-col"><input type="checkbox"></th>
				<th class="sc-numeric-col">Desert (100g serving)</th>
				<th class="sc-numeric-col">Calories</th>
				<th class="sc-numeric-col">Fat (g)</th>
				<th class="sc-numeric-col">Carbs (g)</th>
				<th class="sc-numeric-col">Protein (g)</th>
				<th class="sc-numeric-col">Sodium (mg)</th>
				<th class="sc-numeric-col">Calcium (%)</th>
				<th class="sc-numeric-col">Iron (%)</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td class="sc-checkbox-col"><input type="checkbox"></td>
				<td>Frozen yogurt</td>
				<td class="sc-numeric-col">159</td>
				<td class="sc-numeric-col">6.0</td>
				<td class="sc-numeric-col">24</td>
				<td class="sc-numeric-col">4.0</td>
				<td class="sc-numeric-col">87</td>
				<td class="sc-numeric-col">14%</td>
				<td class="sc-numeric-col">1%</td>
			</tr>
			<tr>
				<td class="sc-checkbox-col"><input type="checkbox"></td>
				<td>Ice cream sandwich</td>
				<td class="sc-numeric-col">237</td>
				<td class="sc-numeric-col">9.0</td>
				<td class="sc-numeric-col">37</td>
				<td class="sc-numeric-col">4.3</td>
				<td class="sc-numeric-col">129</td>
				<td class="sc-numeric-col">8%</td>
				<td class="sc-numeric-col">1%</td>
			</tr>
		</tbody>
	</table>
</section>
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';