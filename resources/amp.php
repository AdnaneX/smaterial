<?php
$title = 'AMP usage';
$description = 'How to use SMaterial with Accelerated Mobile Pages (AMP). The CSS framework based on Google\'s Material Design';
$keywords = 'framework, amp, css amp framework';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4">AMP introduction</h2>

	<p class="col xs4 s6">
		To make use of AMP I would highly recommend to read up on the <a href="https://www.ampproject.org/" target="_blank">documentation</a>.
		This page will only tell you how to get started but doesn't go to deep into the documentation.
		This is because AMP still still in development.
	</p>

	<p class="col xs4 s6 deep-orange-text">
		Since the usage of JavaScript files is prohibited for AMP a lot of components won't work.
		For now the main reasons for using AMP with SMaterial would be the following:
		The stylesheet <code>smaterial-amp.css</code> is about 1/3 the size of the normal stylesheet.
		The reason for this is that all of the media queries that don't belong to mobile have been removed.
		Second a few of the now not working and not much used components have been turned off by default.
		This stylesheet can of course be used without AMP if you just develop for mobile.
	</p>

</section>

<section class="row">
	<h2 class="col xs4">Setup</h2>

	<div class="col xs2">
		<p>
			To get started with AMP you can start by using the following template.
			Note that there a couple of elements required. Lets start from the top.
		</p>

		<p>
			In the <code class="language-html">&lt;html amp lang="en"></code> tag the amp attribute is required.
		</p>

		<p>
			in the <code class="language-html">&lt;head></code> tag there are a lot more required elements.
			The <code class="language-html">&lt;meta charset="utf-8"></code> tag is quite standard to have but not for everyone however it is required for AMP.
		</p>

		<p>
			Then the AMP script is loaded by using <code class="language-html">&lt;script async src="https://cdn.ampproject.org/v0.js">&lt;/script></code>.
			The <code class="language-html">async</code> attribute tells HTML that the script is loaded independent from the page.
		</p>

		<p>
			To let a search engine know which page is the default and which is made for AMP you have to use a canonical and amphtml link.
			In the canonical page use the AMP link like: <code class="language-html">&lt;link rel="amphtml" href="http://example.ampproject.org/article-metadata.html"></code>.
			The AMP page isn't the same url as the canonical page. For example with PHP you're able to add a GET variable to hint that it's a AMP page.
			In the AMP page refer back to the canonical page like: <code class="language-html">&lt;link rel="canonical" href="http://example.ampproject.org/article-metadata.html"></code>
		</p>

		<p>
			In the viewport you need to add <code class="language-html">minimum-scale=1</code> to the <code class="language-html">content</code> attribute.
		</p>

		<p>
			The script there are several things happening that need attention.
			For a list of all possibilities for the <code>type</code> please have a look at <a href="http://schema.org/docs/full.html" target="_blank">schema.org</a>.
			The <code>headline, datePublished</code> and <code>logo</code> basically will tell a search engine how it should show your page.
			Therefor the <code>headline</code> can be the same as your <code class="language-html">&lt;title></code> tag.
		</p>

		<p>
			The <code class="language-html">&lt;style amp-boilerplate></code> is some default styling provided by AMP.
			The same goes for whats inside the <code class="language-html">&lt;noscript></code> tag.
			The <code class="language-html">&lt;noscript></code> tag is what gets loaded when JavaScript is disabled.
		</p>
	</div>

	<pre class="language-html col xs2">
		<code>
&lt;!doctype html>
&lt;html amp lang="en">
&lt;head>
  &lt;meta charset="utf-8">
  &lt;script async src="https://cdn.ampproject.org/v0.js">&lt;/script>
  &lt;title>Hello, AMPs&lt;/title>
  &lt;link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
  &lt;meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  &lt;script type="application/ld+json">
  {
	"@context": "http://schema.org",
	"@type": "NewsArticle",
	"headline": "Open-source framework for publishing content",
	"datePublished": "2015-10-07T12:02:41Z",
	"image": [
	  "logo.jpg"
	]
  }
  &lt;/script>
  &lt;style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}&lt;/style>
  &lt;noscript>&lt;style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}&lt;/style>&lt;/noscript>
&lt;/head>
&lt;body>
  &lt;h1>Welcome to the mobile web&lt;/h1>
&lt;/body>
&lt;/html>
		</code>
	</pre>

	<p class="col xs2">
		Since SMaterial is made with SCSS it's fairly simple to add AMP to your website.
		All you need to do is add <code class="language-html">smaterial-amp.css</code> to your page.
		Right after the <code class="language-html">&lt;noscript></code> you can add the following tag: <code class="language-html">&lt;style amp-custom></code>.
		Inside this tag you have to put the contents of <code class="language-html">smaterial-amp.css</code> so don't refer to it like you would with a normal stylesheet.
		With PHP it is quite easy to add the contents inside the tag. If you don't use PHP you would have to copy paste it in there.
	</p>

	<pre class="language-html col xs2">
		<code>
&lt;style amp-custom>
&lt;?php require_once './stylesheets/smaterial-amp.css'; ?>
&lt;/style>
		</code>
	</pre>
</section>

<section class="row">
	<h2 class="col xs4">Testing</h2>

	<p class="col xs2">
		To test a AMP page you can simply add <code class="language-html">#development=1</code> at the end of your url.
		Another useful url would be <a href="https://search.google.com/test/amp?utm_source=wmx" target="_blank">AMP-test</a>.
	</p>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';