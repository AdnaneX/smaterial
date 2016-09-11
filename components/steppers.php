<?php
$title = 'Steppers';
$description = 'Steppers based on Google\'s Material Design. Steppers display a sequence of numbered steps. Steppers can be used for navigation';
$keywords = 'material design, smaterial, steps, steppers, breadcrumbs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Steppers usage</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		Steppers are used to display a sequence of numbered steps. Steppers can also be used for navigation such as breadcrumbs.
	</p>
</section>

<section class="sc-row">
	<h3>Horizontal stepper</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6"></p>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		<ul class="sc-stepper-horizontal">
			<li class="sc-step"><div class="sc-step-circle">1</div> test</li>
			<li class="sc-step sc-active"><div class="sc-step-circle sc-active">2</div> test</li>
		</ul>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';