<?php
$title = 'Steppers';
$description = 'Steppers based on Google\'s Material Design. Steppers display a sequence of numbered steps. Steppers can be used for navigation';
$keywords = 'steps, steppers, breadcrumbs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Steppers usage</h2>

	<p class="col xs4 s12 m6">
		Steppers are used to display a sequence of numbered steps. Steppers can also be used for navigation such as breadcrumbs.
	</p>
</section>

<section class="row">
	<h3 class="col xs4 s12">Horizontal stepper</h3>

	<p class="col xs4 s12 m6"></p>

	<div class="col xs4 s12 m6">
		<ul class="stepper-horizontal">
			<li class="step"><div class="step-circle">1</div> test</li>
			<li class="step active"><div class="step-circle active">2</div> test</li>
		</ul>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;ul class="stepper-horizontal">
  &lt;li class="step">&lt;div class="step-circle">1&lt;/div> test&lt;/li>
  &lt;li class="step active">&lt;div class="step-circle active">2&lt;/div> test&lt;/li>
&lt;/ul>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Vertical stepper</h3>

	<p class="col xs4 s12 m6"></p>

	<div class="col xs4 s12 m6">
		<ul class="stepper-vertical">
			<li class="step"><div class="step-circle">1</div> test</li>
			<li class="step active"><div class="step-circle active">2</div> test</li>
		</ul>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;ul class="stepper-vertical">
  &lt;li class="step">&lt;div class="step-circle">1&lt;/div> test&lt;/li>
  &lt;li class="step active">&lt;div class="step-circle active">2&lt;/div> test&lt;/li>
&lt;/ul>
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';