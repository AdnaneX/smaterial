<?php
$title = 'Expansion panels';
$description = 'Expansion panels based on Google\'s Material Design';
$keywords = 'expansion panels';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Expansion panels usage</h2>

	<p class="col xs4 s12 m6">

	</p>

	<div class="col xs4 s12 m6">
		<ul class="expansion-panel">
			<li>
				<div class="expansion-panel-header">
					<label>Trip name</label>
					<span>Caribbean cruise</span>
				</div>
				<div class="expansion-panel-content">
					There can be content here
				</div>
			</li>
			<li>
				<div class="expansion-panel-header">
					<label>Location</label>
					<span>Barbados</span>
				</div>
				<div class="expansion-panel-content">
					There can be content here
				</div>
			</li>
		</ul>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;ul class="expansion-panel">
  &lt;li>
    &lt;div class="expansion-panel-header">
      &lt;label>Trip name&lt;/label>
      &lt;span>Caribbean cruise&lt;/span>
    &lt;/div>
    &lt;div class="expansion-panel-content">
      There can be content here
    &lt;/div>
  &lt;/li>
  &lt;li>
    &lt;div class="expansion-panel-header">
      &lt;label>Location&lt;/label>
      &lt;span>Barbados&lt;/span>
    &lt;/div>
    &lt;div class="expansion-panel-content">
      There can be content here
    &lt;/div>
  &lt;/li>
&lt;/ul>
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';