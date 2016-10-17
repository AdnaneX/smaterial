<?php
$title = 'Notifications';
$description = 'Notifications that are based Google\'s Material Design. The notifications have been styled according to Android Nougat';
$keywords = 'notifications function, Android Nougat, Nougat, Android 7, Android N';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2>Notification usage</h2>

	<div class="sc-row">
		<p class="sc-col sc-xs4 sc-s12 sc-m6">
			The notifications browser support is very limited. Only Chrome, FireFox and Opera support it. These notifications are only working on pc / laptop.
			Maybe some day in the future
			<a href="https://developers.google.com/web/fundamentals/getting-started/push-notifications/?hl=en" target="_blank">push</a>
			notifications can be added.
			In the mean time checkout the CSS styled <a href="#notifications">notifications</a>.
		</p>

		<div class="sc-col sc-xs4 sc-s12 sc-m6">
			<button type="button" onclick="notification('Example', {'body': 'Test', icon: 'alert'}, '/resources/notifications.php')" class="sc-raised-button">Notification</button>
		</div>
	</div>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The notification function which is called in JavaScript takes 3 parameters (<code class="language-javascript">$title, $options, $click</code>).
		The <code class="language-javascript">$title</code class="language-javascript"> speaks for itself.
		The <code class="language-javascript">$click</code> parameter is used to handle click events on the notification.
		For the <code class="language-javascript">$options</code> I would advice you to take a look
		<a href="https://developer.mozilla.org/en-US/docs/Web/API/notification" target="_blank">here</a>. But here is a list of supported options:
	</p>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		<ul>
			<li>body (Notification content)</li>
			<li>icon (Notification icon)</li>
			<li>dir (Is used for text direction eg: ltr (left to right), rtl (right to left), auto (adapts to browser settings))</li>
			<li>lang (Is used for language eg: 'en-US')</li>
		</ul>
	</div>

	<pre class="language-javascript sc-col sc-s12 sc-m6 sc-offset-m6">
	<code>
notification('Title', {body: 'Content', icon: 'icon_path'}, 'click-url.com')
	</code>
</pre>
</section>

<section class="sc-row" id="notifications">
	<h3>Notifications</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		There are a couple of different notification templates to choose from.
		The templates you can choose from are <a href="#standard-notification">standard</a>, <a href="#big-text-notification">big text</a>,
		<a href="#big-picture-notification">big picture</a>, <a href="#progress-notification">progress</a> and <a href="#media-notification">media</a>.
		All the templates are inspired on the new Android (N) Nougat.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The additional classes for each template are not only for styling.
		In the future the classes will also make sure the appropriate actions are taking place in JavaScript.
	</p>
</section>

<section class="sc-row" id="standard-notification">
	<h4>Standard notification</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		According to the documentation the header text and timestamp are optional.
	</p>

	<div class="sc-notification">
		<div class="sc-notification-header">
			<div class="sc-notification-header-app-icon sc-blue-text"><i class="material-icons">message</i></div>
			<div class="sc-notification-header-app-name sc-blue-text sc-separator">Messenger</div>
			<div class="sc-notification-header-text sc-separator">johndoe&#64;gmail.com</div>
			<div class="sc-notification-header-timestamp"><?php echo date('H:i'); ?></div>
			<div class="sc-notification-header-expand sc-blue-text"><i class="material-icons">expand_more</i></div>
		</div>

		<div class="sc-notification-content">
			<div class="sc-notification-content-title">John Doe</div>
			<div class="sc-notification-content-text">This is an example message</div>
		</div>

		<div class="sc-notification-actions">
			<button class="sc-flat-button">Reply</button>
			<button class="sc-flat-button">Archive</button>
		</div>
	</div>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		To create the most basic notification you simply need the following code.
		The <code class="language-css">.sc-separator</code> is to add the bullet.
		To give the app icon, the app name and expand a other color you can add a text color class.
		For example <code class="language-css">.sc-red-text</code> makes the text red.
		More information about this can be found in <a href="/style/color.php">colors</a>.
	</p>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6">
		<code>
&lt;div class="sc-notification">
  &lt;div class="sc-notification-header">
    &lt;div class="sc-notification-header-app-icon">&lt;i class="material-icons">message&lt;/i>&lt;/div>
    &lt;div class="sc-notification-header-app-name sc-separator">Messenger&lt;/div>
    &lt;div class="sc-notification-header-text sc-separator">johndoe&#64;gmail.com&lt;/div>
    &lt;div class="sc-notification-header-timestamp">2 min&lt;/div>
    &lt;div class="sc-notification-header-expand">&lt;i class="material-icons">expand_more&lt;/i>&lt;/div>
  &lt;/div>

  &lt;div class="sc-notification-content">
    &lt;div class="sc-notification-content-title">John Doe&lt;/div>
    &lt;div class="sc-notification-content-text">This is an example message&lt;/div>
  &lt;/div>

  &lt;div class="sc-notification-actions">
    &lt;button class="sc-flat-button">Reply&lt;/button>
    &lt;button class="sc-flat-button">Archive&lt;/button>
  &lt;/div>
&lt;/div>
		</code>
	</pre>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		If you would like to add an profile image you need to add the <code class="language-css">.sc-standard</code> class.
		This class makes sure that you get the standard template.
		You can now also add a <code class="language-html">&lt;img></code> tag to notification content.
	</p>

	<div class="sc-notification sc-standard">
		<div class="sc-notification-header">
			<div class="sc-notification-header-app-icon sc-blue-text"><i class="material-icons">message</i></div>
			<div class="sc-notification-header-app-name sc-blue-text sc-separator">Messenger</div>
			<div class="sc-notification-header-text sc-separator">johndoe&#64;gmail.com</div>
			<div class="sc-notification-header-timestamp"><?php echo date('H:i'); ?></div>
			<div class="sc-notification-header-expand sc-blue-text"><i class="material-icons">expand_more</i></div>
		</div>

		<div class="sc-notification-content">
			<div class="sc-notification-content-title">John Doe</div>
			<div class="sc-notification-content-text">This is an example message</div>
			<img src="/images/profile-icon.jpg">
		</div>

		<div class="sc-notification-actions">
			<button class="sc-flat-button">Reply</button>
			<button class="sc-flat-button">Archive</button>
		</div>
	</div>
</section>

<section class="sc-row" id="big-text-notification">
	<h4>Big text notification</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		If you would like to use the big text template you simply need to add the
		<code class="language-css">.sc-big-text</code> class to the notification.
		To get the subject typography add the <code class="language-css">.sc-subject</code>
		class to the notification content.
	</p>

	<div class="sc-notification sc-big-text">
		<div class="sc-notification-header">
			<div class="sc-notification-header-app-icon sc-red-text"><i class="material-icons">mail</i></div>
			<div class="sc-notification-header-app-name sc-red-text sc-separator">Gmail</div>
			<div class="sc-notification-header-timestamp"><?php echo date('H:i'); ?></div>
			<div class="sc-notification-header-expand sc-red-text"><i class="material-icons">expand_more</i></div>
		</div>

		<div class="sc-notification-content">
			<div class="sc-notification-content-title">John Doe</div>
			<div class="sc-subject">This is an example message</div>
			<img src="/images/profile-icon.jpg">
			<div class="sc-notification-content-text">This is an example message. This message could contain a hole lot of text.</div>
		</div>

		<div class="sc-notification-actions">
			<button class="sc-flat-button">Reply</button>
			<button class="sc-flat-button">Archive</button>
		</div>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-notification sc-big-text">
  &lt;div class="sc-notification-header">
    &lt;div class="sc-notification-header-app-icon sc-red-text">&lt;i class="material-icons">mail&lt;/i>&lt;/div>
    &lt;div class="sc-notification-header-app-name sc-red-text sc-separator">Gmail&lt;/div>
    &lt;div class="sc-notification-header-timestamp">12:00&lt;/div>
    &lt;div class="sc-notification-header-expand sc-red-text">&lt;i class="material-icons">expand_more&lt;/i>&lt;/div>
  &lt;/div>

  &lt;div class="sc-notification-content">
    &lt;div class="sc-notification-content-title">John Doe&lt;/div>
    &lt;div class="sc-subject">This is an example message&lt;/div>
    &lt;img src="/images/profile-icon.jpg">
    &lt;div class="sc-notification-content-text">This is an example message. This message could contain a hole lot of text.&lt;/div>
&lt;/div>

  &lt;div class="sc-notification-actions">
    &lt;button class="sc-flat-button">Reply&lt;/button>
    &lt;button class="sc-flat-button">Archive&lt;/button>
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row" id="big-image-notification">
	<h4>Big picture notification</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		If you want to use the big picture notification you need to add the <code class="language-css">.sc-big-picture</code>
		class to your notification.
		You can also add a <code class="language-html"><img></code> tag in both the notification content and text.
	</p>

	<div class="sc-notification sc-big-picture">
		<div class="sc-notification-header">
			<div class="sc-notification-header-app-icon sc-blue-text"><i class="material-icons">image</i></div>
			<div class="sc-notification-header-app-name sc-blue-text sc-separator">Android System</div>
			<div class="sc-notification-header-timestamp"><?php echo date('H:i'); ?></div>
			<div class="sc-notification-header-expand sc-blue-text"><i class="material-icons">expand_more</i></div>
		</div>

		<div class="sc-notification-content">
			<div class="sc-notification-content-title">Screenshot captured</div>
			<img src="/images/profile-icon.jpg">
			<div class="sc-notification-content-text"><img src="/images/profile-icon.jpg"></div>
		</div>

		<div class="sc-notification-actions">
			<button class="sc-flat-button">Share</button>
			<button class="sc-flat-button">Delete</button>
		</div>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-notification sc-big-picture">
  &lt;div class="sc-notification-header">
    &lt;div class="sc-notification-header-app-icon sc-blue-text">&lt;i class="material-icons">image&lt;/i>&lt;/div>
    &lt;div class="sc-notification-header-app-name sc-blue-text sc-separator">Android System&lt;/div>
    &lt;div class="sc-notification-header-timestamp">12:00&lt;/div>
    &lt;div class="sc-notification-header-expand sc-blue-text">&lt;i class="material-icons">expand_more&lt;/i>&lt;/div>
  &lt;/div>

  &lt;div class="sc-notification-content">
    &lt;div class="sc-notification-content-title">Screenshot captured&lt;/div>
    &lt;img src="/images/profile-icon.jpg">
    &lt;div class="sc-notification-content-text">&lt;img src="/images/profile-icon.jpg">&lt;/div>
  &lt;/div>

  &lt;div class="sc-notification-actions">
    &lt;button class="sc-flat-button">Share&lt;/button>
    &lt;button class="sc-flat-button">Delete&lt;/button>
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row" id="progress-notification">
	<h4>Progress notification</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		To get the template for the progress notification simply add the <code class="language-css">.sc-progress</code> to the notification.
		You can find a different progressbar <a href="/components/progress-activity.php">here</a>.
	</p>

	<div class="sc-notification sc-progress">
		<div class="sc-notification-header">
			<div class="sc-notification-header-app-icon sc-blue-text"><i class="material-icons">file_download</i></div>
			<div class="sc-notification-header-app-name sc-blue-text sc-separator">Download manager</div>
			<div class="sc-notification-header-timestamp">68%</div>
			<div class="sc-notification-header-expand sc-blue-text"><i class="material-icons">expand_more</i></div>
		</div>

		<div class="sc-notification-content">
			<div class="sc-notification-content-title">App name</div>
			<div class="sc-notification-content-text">2 seconds left</div>

			<div class="sc-determinate">
				<div class="sc-progressbar" style="width:68%"></div>
			</div>
		</div>

		<div class="sc-notification-actions">
			<button class="sc-flat-button">Cancel</button>
		</div>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-notification sc-progress">
  &lt;div class="sc-notification-header">
    &lt;div class="sc-notification-header-app-icon sc-blue-text">&lt;i class="material-icons">file_download&lt;/i>&lt;/div>
    &lt;div class="sc-notification-header-app-name sc-blue-text sc-separator">Download manager&lt;/div>
    &lt;div class="sc-notification-header-timestamp">68%&lt;/div>
    &lt;div class="sc-notification-header-expand sc-blue-text">&lt;i class="material-icons">expand_more&lt;/i>&lt;/div>
  &lt;/div>

  &lt;div class="sc-notification-content">
    &lt;div class="sc-notification-content-title">App name&lt;/div>
    &lt;div class="sc-notification-content-text">2 seconds left&lt;/div>

    &lt;div class="sc-determinate">
      &lt;div class="sc-progressbar" style="width:68%">&lt;/div>
    &lt;/div>
  &lt;/div>

  &lt;div class="sc-notification-actions">
    &lt;button class="sc-flat-button">Cancel&lt;/button>
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row" id="media-notification">
	<h4>Media notification</h4>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		If you would like to use the media template you can add the <code class="language-css">.sc-media</code> class
		to your notification.
		Inside the notification content you can add a div with the class <code class="language-css">.sc-actions</code>.
		Inside the actions can be a couple of actions. When the notification is condensed there is room for 3 actions.
		When the notification is expanded there is room for 5 to 6 although for now the styling supports 5 actions.
	</p>

	<div class="sc-notification sc-media">
		<div class="sc-notification-header">
			<div class="sc-notification-header-app-icon sc-deep-orange-text"><i class="material-icons">music_note</i></div>
			<div class="sc-notification-header-app-name sc-deep-orange-text sc-separator">Google Play Music</div>
			<div class="sc-notification-header-text">Greatest Hits</div>
			<div class="sc-notification-header-expand sc-deep-orange-text"><i class="material-icons">expand_more</i></div>
		</div>

		<div class="sc-notification-content">
			<div class="sc-notification-content-title">We Will Rock You</div>
			<div class="sc-notification-content-text">Queen</div>
			<div class="sc-actions">
				<i class="material-icons">thumb_down</i>
				<i class="material-icons">skip_previous</i>
				<i class="material-icons">play_arrow</i>
				<i class="material-icons">skip_next</i>
				<i class="material-icons">thumb_up</i>
			</div>
			<img src="/images/album-example.jpg">
		</div>
	</div>
</section>

<section class="sc-row">
	<h3>Settings</h3>

	<table class="sc-col sc-xs4 sc-s12 sc-m6">
		<thead>
		<tr>
			<th>Variable</th>
			<th>Options</th>
			<th>Result</th>
		</tr>
		</thead>

		<tbody>
		<tr>
			<td>$notification-background</td>
			<td>Color / variable</td>
			<td>Changes the notification background</td>
		</tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
