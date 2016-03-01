<?php
$title = 'Notifications';
$description = 'Notifications';
$keywords = 'material design, smaterial, notifications';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Notification usage</h2>

	<div class="sm-row">
		<p class="sm-col sm-s12 sm-m6">
			The notifications browser support is very limited. Only Chrome, FireFox and Opera support it. These notifications are only working on pc / laptop.
			Maybe some day in the future push notifications can be added.
		</p>

		<div class="sm-col sm-s12 sm-m6">
			<button type="button" onclick="notification('Example', {'body': 'Test', icon: 'alert'}, '/resources/notifications.php')" class="sm-raised-button">Notification</button>
		</div>
	</div>

	<p class="sm-col sm-s12 sm-m6">
		The notification function which is called in JavaScript takes 3 parameters (<code>$title, $options, $click</code>).
		The <code>$title</code> speaks for itself. The <code>$click</code> parameter is used to handle click events on the notification.
		For the <code>$options</code> I would advice you to take a look
		<a href="https://developer.mozilla.org/en-US/docs/Web/API/notification" target="_blank">here</a>. But here is a list of supported options:
	</p>

	<div class="sm-col sm-s12 sm-m6">
		<ul>
			<li>body (Notification content)</li>
			<li>icon (Notification icon)</li>
			<li>dir (Is used for text direction eg: ltr (left to right), rtl (right to left), auto (adapts to browser settings))</li>
			<li>lang (Is used for language eg: 'en-US')</li>
		</ul>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
notification('Title', {body: 'Content', icon: 'icon_path'}, 'click-url.com')
		</pre>
	</code>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
