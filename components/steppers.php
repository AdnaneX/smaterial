<?php
$title = 'Steppers';
$description = 'Steppers based on Google\'s Material Design. Steppers display a sequence of numbered steps. Steppers can be used for navigation';
$keywords = 'steps, steppers, breadcrumbs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Steppers usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		Steppers are used to display a sequence of numbered steps. Steppers can also be used for navigation such as breadcrumbs.
	</p>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Horizontal stepper</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6"></p>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		<ul class="sc-stepper-horizontal">
			<li class="sc-step"><div class="sc-step-circle">1</div> test</li>
			<li class="sc-step sc-active"><div class="sc-step-circle sc-active">2</div> test</li>
		</ul>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;ul class="sc-stepper-horizontal">
  &lt;li class="sc-step">&lt;div class="sc-step-circle">1&lt;/div> test&lt;/li>
  &lt;li class="sc-step sc-active">&lt;div class="sc-step-circle sc-active">2&lt;/div> test&lt;/li>
&lt;/ul>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Vertical stepper</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6"></p>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		<ul class="sc-stepper-vertical">
			<li class="sc-step"><div class="sc-step-circle">1</div> test</li>
			<li class="sc-step sc-active"><div class="sc-step-circle sc-active">2</div> test</li>
		</ul>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;ul class="sc-stepper-vertical">
  &lt;li class="sc-step">&lt;div class="sc-step-circle">1&lt;/div> test&lt;/li>
  &lt;li class="sc-step sc-active">&lt;div class="sc-step-circle sc-active">2&lt;/div> test&lt;/li>
&lt;/ul>
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';