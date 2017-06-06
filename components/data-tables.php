<?php
$title = 'Data tables';
$description = 'Tables based on Google\'s Material Design. Tables have several styling options, by adding a specific classes to your table you can follow the design specifications as close as possible';
$keywords = 'tables, data tables';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Tables</h2>

	<p class="col xs4 s12 m6">
   		The data tables can be used like any table.
		If you like to use the row highlighting use <code class="language-css">.table-hover</code> class in the <code class="language-html">table</code> tag.
		To make the table responsive use <code class="language-css">.table-responsive</code> class in the <code class="language-html">table</code> tag.
		To get the proper styling you need to use <code class="language-html">&lt;thead></code> and <code class="language-html">&lt;tbody></code> tags.
		To get the numeric table cells align to the right use <code class="language-css">.numeric-col</code> class.
		The <a href="/components/selection-controls.php">checkboxes</a> also have a specific padding.
		To get the specific styling use <code class="language-css">.checkbox-col</code> class.
	</p>

	<div class="col xs4 s12 m6">
		<table class="table-hover">
			<thead>
			<tr>
				<th class="checkbox-col"><input type="checkbox" class="checkbox" id="c1"></th>
				<th class="">Desert (100g serving)</th>
				<th class="numeric-col">Calories</th>
				<th class="numeric-col">Fat (g)</th>
				<th class="numeric-col">Carbs (g)</th>
				<th class="numeric-col">Protein (g)</th>
				<th class="numeric-col">Sodium (mg)</th>
				<th class="numeric-col">Calcium (%)</th>
				<th class="numeric-col">Iron (%)</th>
			</tr>
			</thead>

			<tbody>
			<tr>
				<td class="checkbox-col"><input type="checkbox" class="checkbox" id="c2"></td>
				<td>Frozen yogurt</td>
				<td class="numeric-col">159</td>
				<td class="numeric-col">6.0</td>
				<td class="numeric-col">24</td>
				<td class="numeric-col">4.0</td>
				<td class="numeric-col">87</td>
				<td class="numeric-col">14%</td>
				<td class="numeric-col">1%</td>
			</tr>
			<tr>
				<td class="checkbox-col"><input type="checkbox" class="checkbox" id="c3"></td>
				<td>Ice cream sandwich</td>
				<td class="numeric-col">237</td>
				<td class="numeric-col">9.0</td>
				<td class="numeric-col">37</td>
				<td class="numeric-col">4.3</td>
				<td class="numeric-col">129</td>
				<td class="numeric-col">8%</td>
				<td class="numeric-col">1%</td>
			</tr>
			</tbody>
		</table>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;table class="table-hover">
  &lt;thead>
    &lt;tr>
      &lt;th class="checkbox-col">&lt;input type="checkbox" class="checkbox" id="c1">&lt;/th>
      &lt;th class="">Desert (100g serving)&lt;/th>
      &lt;th class="numeric-col">Calories&lt;/th>
      &lt;th class="numeric-col">Fat (g)&lt;/th>
      &lt;th class="numeric-col">Carbs (g)&lt;/th>
      &lt;th class="numeric-col">Protein (g)&lt;/th>
      &lt;th class="numeric-col">Sodium (mg)&lt;/th>
      &lt;th class="numeric-col">Calcium (%)&lt;/th>
      &lt;th class="numeric-col">Iron (%)&lt;/th>
    &lt;/tr>
  &lt;/thead>

  &lt;tbody>
    &lt;tr>
      &lt;td class="checkbox-col">&lt;input type="checkbox" class="checkbox" id="c2">&lt;/td>
      &lt;td>Frozen yogurt&lt;/td>
      &lt;td class="numeric-col">159&lt;/td>
      &lt;td class="numeric-col">6.0&lt;/td>
      &lt;td class="numeric-col">24&lt;/td>
      &lt;td class="numeric-col">4.0&lt;/td>
      &lt;td class="numeric-col">87&lt;/td>
      &lt;td class="numeric-col">14%&lt;/td>
      &lt;td class="numeric-col">1%&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td class="checkbox-col">&lt;input type="checkbox" class="checkbox" id="c3">&lt;/td>
      &lt;td>Ice cream sandwich&lt;/td>
      &lt;td class="numeric-col">237&lt;/td>
      &lt;td class="numeric-col">9.0&lt;/td>
      &lt;td class="numeric-col">37&lt;/td>
      &lt;td class="numeric-col">4.3&lt;/td>
      &lt;td class="numeric-col">129&lt;/td>
      &lt;td class="numeric-col">8%&lt;/td>
      &lt;td class="numeric-col">1%&lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>
		</code>
	</pre>

	<div class="col xs4 s12 m6">
		<table class="table-hover table-responsive">
			<thead>
			<tr>
				<th class="checkbox-col"><input type="checkbox" class="checkbox" id="c1"></th>
				<th class="">Desert (100g serving)</th>
                <th class="numeric-col"><a href="#">Calories</a></th>
                <th class="numeric-col"><a href="#">Fat (g)</a></th>
				<th class="numeric-col">Carbs (g)</th>
				<th class="numeric-col">Protein (g)</th>
				<th class="numeric-col">Sodium (mg)</th>
				<th class="numeric-col">Calcium (%)</th>
				<th class="numeric-col">Iron (%)</th>
			</tr>
			</thead>

			<tbody>
			<tr>
				<td class="checkbox-col"><input type="checkbox" class="checkbox" id="c2"></td>
				<td>Frozen yogurt</td>
				<td class="numeric-col">159</td>
				<td class="numeric-col">6.0</td>
				<td class="numeric-col">24</td>
				<td class="numeric-col">4.0</td>
				<td class="numeric-col">87</td>
				<td class="numeric-col">14%</td>
				<td class="numeric-col">1%</td>
			</tr>
			<tr>
				<td class="checkbox-col"><input type="checkbox" class="checkbox" id="c3"></td>
				<td>Ice cream sandwich</td>
				<td class="numeric-col">237</td>
				<td class="numeric-col">9.0</td>
				<td class="numeric-col">37</td>
				<td class="numeric-col">4.3</td>
				<td class="numeric-col">129</td>
				<td class="numeric-col">8%</td>
				<td class="numeric-col">1%</td>
			</tr>
			</tbody>
		</table>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;table class="table-hover table-responsive">
  &lt;thead>
    &lt;tr>
      &lt;th class="checkbox-col">&lt;input type="checkbox" class="checkbox" id="c1">&lt;/th>
      &lt;th class="">Desert (100g serving)&lt;/th>
      &lt;th class="numeric-col">Calories&lt;/th>
      &lt;th class="numeric-col">Fat (g)&lt;/th>
      &lt;th class="numeric-col">Carbs (g)&lt;/th>
      &lt;th class="numeric-col">Protein (g)&lt;/th>
      &lt;th class="numeric-col">Sodium (mg)&lt;/th>
      &lt;th class="numeric-col">Calcium (%)&lt;/th>
      &lt;th class="numeric-col">Iron (%)&lt;/th>
    &lt;/tr>
  &lt;/thead>

  &lt;tbody>
    &lt;tr>
      &lt;td class="checkbox-col">&lt;input type="checkbox" class="checkbox" id="c2">&lt;/td>
      &lt;td>Frozen yogurt&lt;/td>
      &lt;td class="numeric-col">159&lt;/td>
      &lt;td class="numeric-col">6.0&lt;/td>
      &lt;td class="numeric-col">24&lt;/td>
      &lt;td class="numeric-col">4.0&lt;/td>
      &lt;td class="numeric-col">87&lt;/td>
      &lt;td class="numeric-col">14%&lt;/td>
      &lt;td class="numeric-col">1%&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td class="checkbox-col">&lt;input type="checkbox" class="checkbox" id="c3">&lt;/td>
      &lt;td>Ice cream sandwich&lt;/td>
      &lt;td class="numeric-col">237&lt;/td>
      &lt;td class="numeric-col">9.0&lt;/td>
      &lt;td class="numeric-col">37&lt;/td>
      &lt;td class="numeric-col">4.3&lt;/td>
      &lt;td class="numeric-col">129&lt;/td>
      &lt;td class="numeric-col">8%&lt;/td>
      &lt;td class="numeric-col">1%&lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>
		</code>
	</pre>
</section>
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';