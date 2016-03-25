<?php
$title = 'Home';
$description = 'Home of SMaterial. The (S)CSS framework based on Google\'s Material Design';
$keywords = 'material design, smaterial, css framework';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>SMaterial</h2>

	<p class="sc-col sc-s12">
		SMaterial is a <a href="http://www.google.com/design/spec/material-design/introduction.html" target="_blank">Google's Material Design</a> inspired CSS framework.
		It is build as responsive mobile first and is easily changed with <a href="http://sass-lang.com/" target="_blank">SCSS</a> variables.
	</p>
</section>

<section class="sc-row">
	<div class="sc-col sc-s12 sc-m6">
		<div class="sc-col sc-s12 sc-center">
			<i class="material-icons sc-blue-text sc-48">build</i>
		</div>

		<div class="sc-col sc-s12">
			<h3 class="sc-center">Easy development</h3>
		</div>

		<div class="sc-col sc-s12">
			The framework is build with SCSS and there for easy customizable with variables.
			For CSS there is always a prefix to prevent overwriting classes.
			All actions that are done by JavaScript are made in vanilla js or with jQuery so you don't need to depend on other libraries or frameworks.
			The use of <a href="http://gulpjs.com/" target="_blank">Gulp</a> should also speed up your development.
			Because SMaterial is open-source feel free to <a href="https://github.com/SuperDJ/smaterial" target="_blank">commit</a> your additions and or problems.
		</div>
	</div>

	<div class="sc-col sc-s12 sc-m6">
		<div class="sc-col sc-s12 sc-center">
			<i class="material-icons sc-blue-text sc-48">accessibility</i>
		</div>

		<div class="sc-col sc-s12">
			<h3 class="sc-center">User experience</h3>
		</div>

		<div class="sc-col sc-s12">
			Because the framework is based on Material Design users who are already familiar with Android will have no trouble
			getting to know your website.
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
