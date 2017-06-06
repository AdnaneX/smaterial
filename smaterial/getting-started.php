<?php
$title = 'Getting started';
$description = 'How to get started with SMaterial. Start using SMaterial using vanilla CSS or by using SCSS';
$keywords = 'getting started, starting, how to use';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
    <h2 class="col xs4 s12">Getting started</h2>

    <p class="col xs4 s12">
        Smaterial comes in 2 different packages you can choose from.
        You can make a choice depending on your skill levels and what you would like to do with SMaterial.
        Both packages include the bower.json file to manage other files required.
    </p>

    <div class="col xs4 s12 m6">
        <h4 class="col xs4 s12">CSS</h4>

        <p class="col xs4 s12">
            When unfamilier with SCSS it's recommended to use this package.
            <a href="/smaterial-css.zip" class="raised-button">CSS Download <i class="material-icons right">file_download</i></a>
        </p>
    </div>

    <div class="col xs4 s12 m6">
        <h4 class="col xs4 s12">SCSS</h4>

        <p class="col xs4 s12">
            The SCSS version allows you to fully customize the way SMaterial looks.
            You can also change which files are included and which are not. This package also includes Gulp to
            compress JavaScript an SCSS.
            <a href="/smaterial-scss.zip" class="raised-button">SCSS Download <i class="material-icons right">file_download</i></a>
        </p>
    </div>

    <div class="col xs4 s12 m6">
        <h4 class="col xs4 s12">Bower</h4>

        <p class="col scs12">
            Do you prefer to use <a href="https://bower.io/" target="_blank">bower</a>? Now you can. You can simply run the following command: <code>bower install smaterial</code>.
        </p>
    </div>
</section>

<section class="row">
    <h2 class="col xs4 s12">Setup</h2>

    <p class="col xs4 s12 m6">
        You can get SMaterial up and running in a couple of different ways.
        After you have downloaded one of the above packages or used one of the other options you can get started.
        Of course you can use the code shown here.
        You can also use the <code class="language-html">index.php</code> file and files included in the <code class="language-html">includes</code> folder provided in the packages.
    </p>

    <pre class="language-html col xs4 s12 m6">
        <code>
&lt;!DOCTYPE html>
&lt;html>
  &lt;head>
    &lt;title>&lt;/title>

    &lt;meta name="viewport" content="width=device-width, initial-scale=1">
    &lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    &lt;link rel="stylesheet" href="/stylesheets/smaterial.css">
  &lt;/head>

  &lt;body>

    &lt;script src="/js/vendor.min.js">&lt;/script>
    &lt;script src="/js/app.min.js">&lt;/script>
  &lt;/body>
&lt;/html>
		</code>
	</pre>

    <p class="col xs4 s12 m6">
        The <code class="language-html">&lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"></code>
        is used to load the <a href="http://www.smaterial.dsuper.nl/style/icons.php">Material Design font icons</a>.

        The line <code class="language-html">&lt;meta name="viewport" content="width=device-width, initial-scale=1"></code> makes the website responsive.

        The <code class="language-html">vendor.min.js</code> currently only holds jQuery 3.
        So if you prefer to load jQuery from an external source you can use <a href="https://developers.google.com/speed/libraries/#jquery" target="_blank">this</a>.
        The <code class="language-html">vendor.min.js</code> or jQuery file needs to be loaded before <code class="language-html">app.min.js</code>.
    </p>
</section>

<section class="row">
    <h3 class="col xs4 s12">Gulp usage</h3>

    <p class="col xs4 s12 m6">
        With Gulp you can easily compress SCSS and JavaScript files. All "tasks" needed are included in the <code class="language-html">gulpfile.js</code>
    </p>

    <table class="col xs4 s12 m6">
        <thead>
        <tr>
            <th>Task</th>
            <th>Result</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>gulp</td>
            <td>Both SCSS and JavaScript files in <code class="language-html">js/app, js/vendor, stylesheets/scss, stylesheets/scss/components</code> are compressed on watch</td>
        </tr>
        <tr>
            <td>gulp zip</td>
            <td>Will zip all required files for both css and scss packages</td>
        </tr>
        </tbody>
    </table>

    <p class="col xs4 s12 m6">
        If you were to add other js frameworks for example <a href="http://hammerjs.github.io/" target="_blank">hammer.js</a> you can add the necessary file(s) in <code class="language-html">js/vendor</code>.
        If you create your own JavaScript files you can add these in <code class="language-html">js/app</code>. This way all files will be compressed into minified versions.
        The same goes for SCSS files. If you add your own SCSS files in <code class="language-html">stylesheets/scss</code> these will also be compressed for you.
        This can be achieved by just running gulp task.
    </p>

    <p class="col xs4 s12 m6">
        If you add new files with bower you need to add the necessary files in the right files array.
        JavaScript files in vendor task and SCSS files in scss task.
    </p>
</section>

<section class="row">
    <h3 class="col xs4 s12">Other useful HTML</h3>

    <p class="col xs4 s12 m6">
        If you would like to complete the look of your website you can add some additional HTML to it.
        To color the browsers address bar use the code shown on the side in the <code class="language-html">&lt;head></code> tag.
        If you leave the <code class="language-html">&lt;meta content></code> attribute empty it will be automatically set to the color of the <a href="/components/appbar.php">appbar</a>.
        Otherwise it will leave the <code class="language-html">&lt;meta content></code> as is.
    </p>

    <pre class="language-html col xs4 s12 m6">
		<code>
&lt;meta name="theme-color" content="#2196F3">
&lt;meta name="msapplication-navbutton-color" content="#2196F3">
&lt;meta name="apple-mobile-web-app-status-bar-style" content="#2196F3">
		</code>
	</pre>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';

