<?php
$title = 'Tooltips';
$description = 'Tooltips based on Googles Material Design';
$keywords = 'material design, smaterial, tooltips';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<secition class="sm-row">
	<h2>Tooltips usage</h2>

	<p class="sm-col sm-s12 sm-m6">
		You can use tooltips to give the user some extra info about a certain
		<span class="sm-tooltip" title="delete, edit">action</span> or <span class="sm-tooltip" title="url: google.com">link</span>.
	</p>

	<p class="sm-col sm-s12 sm-m6">
		Tooltips only need the class <code>.sm-tooltip</code> and the attribute <code>title</code> in order to work. Because of this it's easy
		to add to a link or span.
	</p>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;span class="sm-tooltip" title="delete, edit">
  action
&lt;/span>

&lt;a href="#" class="sm-tooltip" title="link">
  link
&lt;/a>
		</pre>
	</code>
</secition>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';