<?php
$title = 'Icons';
$description = 'Icons of material design';
$keywords = 'material design, smaterial, icons, font icons';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sm-row">
	<h2>Icon usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		All icons are used the same. When a icon has spaces use a "<code>_</code>" you can see this in the examples below.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		You can see a list of all icons <a href="https://design.google.com/icons/" target="_blank">here</a>.
	</p>
</section>


<section class="sm-row">
	<h3>Example</h3>

	<code class="sm-col sm-s12 sm-m6">
		&lt;i class="material-icons">home&lt;/i>
		&lt;i class="material-icons">compare_arrows&lt;/i>
	</code>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';