<?php
$title = 'Notifications';
$description = 'Easy to use notifications in your SMaterial project';
$keywords = 'material design, smaterial, notifications';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Notification usage</h2>

	<div class="sc-row">
		<p class="sc-col sc-s12 sc-m6">
			The notifications browser support is very limited. Only Chrome, FireFox and Opera support it. These notifications are only working on pc / laptop.
			Maybe some day in the future
			<a href="https://developers.google.com/web/fundamentals/getting-started/push-notifications/?hl=en" target="_blank">push</a>
			notifications can be added.
		</p>

		<div class="sc-col sc-s12 sc-m6">
			<button type="button" onclick="notification('Example', {'body': 'Test', icon: 'alert'}, '/resources/notifications.php')" class="sc-raised-button">Notification</button>
		</div>
	</div>

	<p class="sc-col sc-s12 sc-m6">
		The notification function which is called in JavaScript takes 3 parameters (<code class="language-javascript">$title, $options, $click</code>).
		The <code class="language-javascript">$title</code class="language-javascript"> speaks for itself.
		The <code class="language-javascript">$click</code> parameter is used to handle click events on the notification.
		For the <code class="language-javascript">$options</code> I would advice you to take a look
		<a href="https://developer.mozilla.org/en-US/docs/Web/API/notification" target="_blank">here</a>. But here is a list of supported options:
	</p>

	<div class="sc-col sc-s12 sc-m6">
		<ul>
			<li>body (Notification content)</li>
			<li>icon (Notification icon)</li>
			<li>dir (Is used for text direction eg: ltr (left to right), rtl (right to left), auto (adapts to browser settings))</li>
			<li>lang (Is used for language eg: 'en-US')</li>
		</ul>
	</div>

	<pre class="language-javascript sc-col sc-s12 sc-m6">
		<code>
notification('Title', {body: 'Content', icon: 'icon_path'}, 'click-url.com')
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
