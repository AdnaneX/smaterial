<?php
$title = 'Home';
$description = 'Home of SMaterial. The (S)CSS framework based on Googles Material Design';
$keywords = 'material design, smaterial, css framework';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>SMaterial</h2>

	<p class="sm-col sm-s12">
		SMaterial is a <a href="http://www.google.com/design/spec/material-design/introduction.html" target="_blank">Googles Material Design</a> inspired CSS framework.
		It is build as responsive mobile first and is easily changed with <a href="http://sass-lang.com/" target="_blank">SCSS</a> variables.
	</p>
</section>

<section class="sm-row">
	<div class="sm-col sm-s12 sm-m6">
		<div class="sm-col sm-s12 sm-center">
			<i class="material-icons sm-blue-text sm-48">build</i>
		</div>

		<div class="sm-col sm-s12">
			<h3 class="sm-center">Easy development</h3>
		</div>

		<div class="sm-col sm-s12">
			The framework is build with SCSS and there for easy customizable with variables.
			For CSS there is always a prefix to prevent overwriting classes.
			Because it's open-source feel free to <a href="https://github.com/SuperDJ/smaterial" target="_blank">commit</a> your additions and or problems.
		</div>
	</div>

	<div class="sm-col sm-s12 sm-m6">
		<div class="sm-col sm-s12 sm-center">
			<i class="material-icons sm-blue-text sm-48">accessibility</i>
		</div>

		<div class="sm-col sm-s12">
			<h3 class="sm-center">User experience</h3>
		</div>

		<div class="sm-col sm-s12">
			Because the framework is based on Material Design users who are already familiar with Android will have no trouble
			getting to know your website.
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
