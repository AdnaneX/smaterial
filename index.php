<?php
$title = 'Introduction';
$description = 'Introduction of SMaterial. The CSS framework based on Google\'s Material Design';
$keywords = 'framework';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">SMaterial</h2>

	<p class="sc-col sc-xs4 sc-s12">
		SMaterial the <a href="https://github.com/SuperDJ/smaterial" target="_blank">open-source</a> CSS framework which is inspired on <a href="http://www.google.com/design/spec/material-design/introduction.html" target="_blank">Google's Material Design</a>.
		It is build as responsive mobile first and is easily changed with <a href="http://sass-lang.com/" target="_blank">SCSS</a> variables.
		SMaterial is still in heavy development but do you like to help / contribute? Feel free to do <a href="https://github.com/SuperDJ/smaterial" target="_blank">here</a>.
	</p>

	<figure class="sc-col sc-xs4 sc-s12">
		<img src="/images/responsive.jpg" alt="SMaterial responsive examples" title="Responsive examples">
	</figure>
</section>

<section class="sc-row">
	<div class="sc-col sc-xs4 sc-s12 sc-m6">
        <div class="sc-col sc-xs4 sc-s12 sc-center">
            <i class="material-icons sc-cyan-text sc-48">build</i>
        </div>

        <div class="sc-col sc-xs4 sc-s12 sc-center">
            <h3>Easy development</h3>
        </div>

		<div class="sc-col sc-xs4 sc-s12 sc-center">
			The framework is build with SCSS and there for easy customizable with variables.
			For CSS there is always a prefix to prevent overwriting classes.
			All actions that are done by JavaScript are made in vanilla js or with jQuery so you don't need to depend on other libraries or frameworks.
			The use of <a href="http://gulpjs.com/" target="_blank">Gulp</a> should also speed up your development.
			Because SMaterial is open-source feel free to <a href="https://github.com/SuperDJ/smaterial" target="_blank">commit</a> your additions and or problems.
		</div>
	</div>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		<div class="sc-col sc-xs4 sc-s12 sc-center">
			<i class="material-icons sc-cyan-text sc-48">accessibility</i>
		</div>

		<div class="sc-col sc-xs4 sc-s12 sc-center">
			<h3>User experience</h3>
		</div>

		<div class="sc-col sc-xs4 sc-s12 sc-center">
			Because the framework is based on Material Design users who are already familiar with Android will have no trouble
			getting to know your website.
		</div>
	</div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';