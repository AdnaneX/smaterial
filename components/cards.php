<?php
$title = 'Cards';
$description = 'Cards based on Googles Material Design';
$keywords = 'material design, smaterial, cards';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Cards usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		There are many different variations of cards.
		Below are example cards.
	</p>
</section>

<section class="sm-row">
	<h3>Basic cards structure</h3>

	<div class="sm-col sm-s12 sm-m6 sm-l3">
		<div class="sm-card">
			<div class="sm-card-image">
				<img src="http://lorempixel.com/400/200/abstract" alt="example image">
			</div>

			<div class="sm-card-title">
				<div class="sm-card-title-primary sm-large">Example primary</div>
				<div class="sm-card-title-sub">Example sub title</div>
			</div>

			<div class="sm-card-content">
				This is some content text
			</div>

			<div class="sm-card-actions sm-card-divider"></div>
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';