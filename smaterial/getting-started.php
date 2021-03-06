<?php
$title = 'Getting started';
$description = 'How to get started with SMaterial. Start using SMaterial using vanilla CSS or by using SCSS. A quick getting started guide and some other useful HTML';
$keywords = 'getting started, starting, how to use';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
    <h2 class="col xs4">Getting started</h2>

    <p class="col xs4">
        Smaterial comes in 2 different packages you can choose from.
        You can make a choice depending on your skill levels and what you would like to do with SMaterial.
    </p>

    <div class="col xs4 m6">
        <h4 class="col xs4">CSS</h4>

        <p class="col xs4">
            When unfamilier with SCSS it's recommended to use the default package.
            <a href="/stylesheets/smaterial-light.css" class="raised-button"><i class="material-icons right">file_download</i> Download CSS</a>
            <a href="/js/smaterial.js" class="raised-button"><i class="material-icons right">file_download</i> Download JS</a>
        </p>
    </div>

    <div class="col xs4 m6">
        <h4 class="col xs4">SCSS</h4>

        <p class="col xs4">
            If you would like to use SCSS I recommend to go to <a href="//github.com/SuperDJ/smaterial" target="_blank">Github</a>
            and clone/ download the project from there.
        </p>
    </div>
</section>

<section class="row">
    <h2 class="col xs4">Setup</h2>

    <p class="col xs4 m6">
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

    &lt;script src="/js/smaterial.js">&lt;/script>
  &lt;/body>
&lt;/html>
		</code>
	</pre>

    <p class="col xs4 m6">
        The <code class="language-html">&lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"></code>
        is used to load the <a href="http://www.smaterial.dsuper.nl/style/icons.php">Material Design font icons</a>.

        The line <code class="language-html">&lt;meta name="viewport" content="width=device-width, initial-scale=1"></code> makes the website responsive.
    </p>
</section>

<section class="row">
    <h3 class="col xs4">Webpack usage</h3>

    <p class="col xs4 m6">
        With Webpack you can easily compress SCSS and JavaScript files.
        All "commands" needed are included in the <code class="language-html">package.js</code>.
        The available commands are: <code class="language-html">dev, development, prod and production</code>.
        The difference between the commands for development and production is the file output.
        For production all files are being minimized in contrast to development where all files are outputted as is.
    </p>

    <p class="col xs4 m6">
        In order to use Webpack you still need to change the entries in the <code class="language-html">webpack.config.js</code> file.
    </p>
</section>

<section class="row">
    <h3 class="col xs4">Other useful HTML</h3>

    <p class="col xs4 m6">
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

<section class="row">
    <h3 class="col xs4">Accelerated Mobile Pages (AMP)</h3>

    <p class="col xs4 s6">
        SMaterial also supports <a href="/resources/amp.php">AMP</a>. The support of AMP still very limited as it is still in development.
        This means that there is a dedicated stylesheet, but everything that relies on JavaScript doesn't work.
        The AMP stylesheet removes all the media queries that are larger than mobile. The stylesheet also has less components on by default.
        This means that the stylesheet is about 1/3 the size. It also means that if one of the components isn't working it might be turned off.
        If you're using SCSS you can easily change the components.
        If you don't want to use AMP but you're only developing for mobile this stylesheet might help you a lot as well.
        You can also trigger the AMP behaviour on your own by setting the <code class="language-css">$amp</code> variable to <code>false</code> in your own stylesheet.
    </p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';

