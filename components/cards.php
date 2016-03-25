<?php
$title = 'Cards';
$description = 'Cards based on Google\'s Material Design';
$keywords = 'material design, smaterial, cards';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sc-row">
	<h2>Cards usage</h2>

	<p class="sc-col sc-s12 sc-m6">
		There are many different variations of cards.
		Below are example cards.
	</p>
</section>

<section class="sc-row">
	<h3>Card structures</h3>

	<div class="sc-col sc-s12 sc-m6 sc-l3">
		<div class="sc-card sc-card-basic">
			<div class="sc-card-basic-title">
				<div class="sc-card-title-primary sc-large">Example primary</div>
				<div class="sc-card-title-sub">Example sub title</div>
			</div>

			<div class="sc-card-content">
				This is some content text
			</div>

			<div class="sc-card-actions sc-card-divider"></div>
		</div>
	</div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';