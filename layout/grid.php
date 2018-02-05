<?php
$title = 'Responsive UI';
$description = 'Responsive UI (Grid) based on Google\'s Material Design';
$keywords = ' grid, push, pull, offset, columns, hidden, responsive';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
    <h2 class="col xs4">Grid</h2>

    <p class="col xs4 m6">
        To make your website responsive you can use a grid.
        You can adjust breakpoints, gutter and column amount.
        When using SCSS you can choose between a flexbox grid or a normal grid.
        For default use the grid is flexbox.
        Both grids have their pros and cons.
        Both grids offer the same breakpoints, the biggest difference between them is for <a href="#push-pull">push and pull</a>.
    </p>

    <table>
        <thead>
        <tr>
            <th>Breakpoint</th>
            <th>Window</th>
            <th>Columns</th>
            <th>Gutter</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>0</td>
            <td>xs</td>
            <td>4</td>
            <td>16</td>
        </tr>
        <tr>
            <td>480</td>
            <td>xs</td>
            <td>4</td>
            <td>16</td>
        </tr>
        <tr>
            <td>600</td>
            <td>s</td>
            <td>8</td>
            <td>16</td>
        </tr>
        <tr>
            <td>720</td>
            <td>s</td>
            <td>12</td>
            <td>24</td>
        </tr>
        <tr>
            <td>960</td>
            <td>s</td>
            <td>12</td>
            <td>24</td>
        </tr>
        <tr>
            <td>1280</td>
            <td>m</td>
            <td>12</td>
            <td>24</td>
        </tr>
        <tr>
            <td>1600</td>
            <td>l</td>
            <td>12</td>
            <td>24</td>
        </tr>
        <tr>
            <td>1920</td>
            <td>xl</td>
            <td>12</td>
            <td>24</td>
        </tr>
        </tbody>
    </table>
</section>

<section class="row">
    <h3 class="col xs4">Row</h3>

    <p class="col xs4 m6">
        You can use <code class="language-css">.row</code> so that it's all in one line.
    </p>
</section>

<section class="row">
    <h3 class="col xs4">Columns</h3>

    <div class="row">
        <p class="col xs4 m6">
            There are 5 breakpoints <code class="language-css">.xs</code>, <code class="language-css">.s</code>, <code class="language-css">.m</code>, <code class="language-css">.l</code> and <code class="language-css">.xl</code>
            to suit your needs.
            In order to make the columns work you need to wrap it inside a <code class="language-css">.row</code>
        </p>

        <pre class=" language-html col s12 m6">
            <code>
&lt;div class="row">
  &lt;div class="col xs4 m6">
    Example
  &lt;/div>
&lt;/div>
			</code>
		</pre>
    </div>

    <div class="row">
        <p class="col xs4 m6">
            You can also use the row and columns in SCSS by simply extending the class.
        </p>

        <pre class="language-css col xs4 s12 m6">
			<code>
@extend .col, .s12, .m6;
			</code>
		</pre>
    </div>

    <p class="col xs4 m6">
        To follow the <a href="//www.google.com/design/spec/layout/responsive-ui.html" target="_blank">Material Design</a>
        specifications as closely as possible some breakpoints have different settings.
        <code class="language-css">.xs</code> Only has 4 columns, <code class="language-css">s</code> has 8 to 12 columns depending on the width of the screen.
    </p>
</section>

<section class="row" id="push-pull">
    <h3 class="col xs4">Push, pull and offset</h3>

    <p class="col xs4 m6">
        You can also push, pull and offset which work the same as the columns.
        So <code class="language-css">.push-s</code>, <code class="language-css">.pull-s</code>, <code class="language-css">.offset-s</code> these examples are for small screen but they work with all sizes named before.
    </p>

    <p class="col xs4 s6">
        <strong>Note*</strong> the flexbox grid doesn't have a push pull class.
                               You have to set these manually with the <code class="language-css">order</code> <a href="//developer.mozilla.org/en-US/docs/Web/CSS/order" target="_blank">property</a>.
    </p>

    <pre class="language-html col s12 m6">
        <code>
&lt;div class="row">
	&lt;div class="col xs4 m6 offset-m6">
		Example
	&lt;/div>
&lt;/div>

@extend .col, .s12, .m6, offset-m6;

&lt;div class="row">
  &lt;div class="col xs4 m6 push-m6">
    Display 1
  &lt;/div>

  &lt;div class="col xs4 m6 pull-m6">
    Display 2
  &lt;/div>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
    <h3 class="col xs4">Hidden</h3>

    <p class="col xs4 m6">
        If you want an element to be hidden for a certain device you can use the following classes:
        <code class="language-css">.xs-hidden-down</code>,
        <code class="language-css">.xs-hidden</code>,
        <code class="language-css">.xs-hidden-up</code>,
        <code class="language-css">.s-hidden-down</code>,
        <code class="language-css">.s-hidden</code>,
        <code class="language-css">.s-hidden-up</code>,
        <code class="language-css">.m-hidden-down</code>,
        <code class="language-css">.m-hidden</code>,
        <code class="language-css">.m-hidden-up</code>,
        <code class="language-css">.l-hidden-down</code>,
        <code class="language-css">.l-hidden</code>,
        <code class="language-css">.l-hidden-up</code>,
        <code class="language-css">.xl-hidden-down</code>,
        <code class="language-css">.xl-hidden</code>and
        <code class="language-css">.xl-hidden-up</code>.
    </p>

    <pre class="language-html col s12 m6 offset-m6">
		<code>
&lt;div class="col s4 s-hidden">
  Small hidden
&lt;/div>

&lt;div class="col s4 s-hidden-down">
  Hidden from all screens smaller than small
&lt;/div>

&lt;div class="col s4 s-hidden-up">
  Hidden from all screen bigger than small
&lt;/div>

&lt;div class="col s4 m-hidden">
  Medium hidden
&lt;/div>

&lt;div class="col s4 l-hidden">
  Large hidden
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
    <h3 class="col xs4">Media queries</h3>

    <p class="col xs4 m6">
        There are also a couple of media queries you can use with SCSS.
        The media queries you can use are listed here.
    </p>

    <p class="col xs4 m6">
        You can use the media queries like the following example: <code class="language-css">@media #{$medium-up}</code>.
    </p>

    <ul class="col xs4 m6 offset-m6">
        <li>$xsmall-only</li>
        <li>$small-only</li>
        <li>$medium-only</li>
        <li>$large-only</li>
        <li>$xlarge-only</li>
        <li class="divider"></li>
        <li>$xsmall-down</li>
        <li>$small-down</li>
        <li>$medium-down</li>
        <li>$large-down</li>
        <li>$xlarge-down</li>
        <li class="divider"></li>
        <li>$xsmall-up</li>
        <li>$small-up</li>
        <li>$medium-up</li>
        <li>$large-up</li>
        <li>$xlarge-up</li>
    </ul>
</section>

<section class="row">
    <h3 class="col xs4">Grid settings</h3>

    <table class="col xs4 m6">
        <thead>
        <tr>
            <th>Variable</th>
            <th>Options</th>
            <th>Results</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>$xsmall-screen</td>
            <td>Variable /</td>
            <td>Change the width of xsmall screens</td>
        </tr>
        <tr>
            <td>$small-screen</td>
            <td>Variable /</td>
            <td>Change the width of small screens</td>
        </tr>
        <tr>
            <td>$medium-screen</td>
            <td>Variable / integer</td>
            <td>Change the width of medium screens</td>
        </tr>
        <tr>
            <td>$large-screen</td>
            <td>Variable / integer</td>
            <td>Change the width of large screens</td>
        </tr>
        <tr>
            <td>$xlarge-screen</td>
            <td>Variable / integer</td>
            <td>Change width of xlarge screen</td>
        </tr>
        <tr>
            <td>$gutter</td>
            <td>Variable / integer</td>
            <td>Change the width of the gutter (space between columns)</td>
        </tr>
        <tr>
            <td>$large-gutter</td>
            <td>Variable / integer</td>
            <td>Change the width of the gutter for medium and up</td>
        </tr>
        <tr>
            <td>$columns</td>
            <td>Variable / integer</td>
            <td>Change the amount of columns</td>
        </tr>
        </tbody>
    </table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';