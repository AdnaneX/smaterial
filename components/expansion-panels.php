<?php
$title = 'Expansion panels';
$description = 'Expansion panels based on Google\'s Material Design';
$keywords = 'expansion panels';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Expansion panels usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">

	</p>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		<ul class="sc-expansion-panel">
			<li>
				<div class="sc-expansion-panel-header">
					<label>Trip name</label>
					<span>Caribbean cruise</span>
				</div>
				<div class="sc-expansion-panel-content">
					There can be content here
				</div>
			</li>
			<li>
				<div class="sc-expansion-panel-header">
					<label>Location</label>
					<span>Barbados</span>
				</div>
				<div class="sc-expansion-panel-content">
					There can be content here
				</div>
			</li>
		</ul>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;ul class="sc-expansion-panel">
  &lt;li>
    &lt;div class="sc-expansion-panel-header">
      &lt;label>Trip name&lt;/label>
      &lt;span>Caribbean cruise&lt;/span>
    &lt;/div>
    &lt;div class="sc-expansion-panel-content">
      There can be content here
    &lt;/div>
  &lt;/li>
  &lt;li>
    &lt;div class="sc-expansion-panel-header">
      &lt;label>Location&lt;/label>
      &lt;span>Barbados&lt;/span>
    &lt;/div>
    &lt;div class="sc-expansion-panel-content">
      There can be content here
    &lt;/div>
  &lt;/li>
&lt;/ul>
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';