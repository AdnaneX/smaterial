<?php
$title = 'Color';
$description = 'Colors swatches based on Google\'s Material Design. How to use Material Design colors in your website. How to use different themes';
$keywords = 'color, swatches, material colors, theme, black light theme';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="row">
    <h2 class="col xs4 s12">Color usage</h2>

    <p class="col xs4 s12 m6">
        All of the below colors are used in the same way.
        Both SCSS variables and css classes and color codes are named.
    </p>

    <p class="col xs4 s12 m6">
        You can easily change the colors you use. In the settings you can remove all colors you don't use <strong>NOTE*</strong>
        that you need to recompile with SCSS.
        In SCSS the variables for each color will remain accessible. Therefore it's recommended to remove each color
        when using SCSS unless you need to use a class in HTML.
    </p>
</section>

<section class="row">
    <h3 class="col xs4">Theme</h3>

    <p class="col xs4 s6">
        With SMaterial and SCSS you're also able to choose between a light and dark theme.
        You can define the theme in the <strong>_settings.scss</strong> file or by overwriting the <code class="language-css">$theme</code> variable.
        The variable can either be light or dark.

        <button type="button" id="theme-switch" class="raised-button raised-button-dense">Switch theme</button>

        <script>
            var btn = document.getElementById('theme-switch');

            btn.addEventListener('click', function() {
				var $styles = document.getElementsByTagName('link');
				for(var i = 0; i < $styles.length; i++) {
					if( $styles[i].getAttribute('href') === '/stylesheets/smaterial-light.css' ) {
					    $styles[i].setAttribute('href', '/stylesheets/smaterial-dark.css');
					} else if( $styles[i].getAttribute('href') === '/stylesheets/smaterial-dark.css' ) {
						$styles[i].setAttribute('href', '/stylesheets/smaterial-light.css');
					}
				}
            });
        </script>
    </p>

    <pre class="language-css col xs4 s12 m6">
		<code>
$theme: light;
$theme: dark;
		</code>
</section>

<section class="row">
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 red-text">Red</h3>
        <div class="row red white-text">
            <div class="col xs2 s6">$red</div>
            <div class="col xs2 s6">#F44336</div>
            <div class="col xs2 s6">.red-text</div>
            <div class="col xs2 s6">.red</div>
        </div>
        <div class="row red-50">
            <div class="col xs2 s6">$red-50</div>
            <div class="col xs2 s6">#FFEBEE</div>
            <div class="col xs2 s6">.red-50-text</div>
            <div class="col xs2 s6">.red-50</div>
        </div>
        <div class="row red-100">
            <div class="col xs2 s6">$red-100</div>
            <div class="col xs2 s6">#FFCDD2</div>
            <div class="col xs2 s6">.red-100-text</div>
            <div class="col xs2 s6">.red-100</div>
        </div>
        <div class="row red-200">
            <div class="col xs2 s6">$red-200</div>
            <div class="col xs2 s6">#EF9A9A</div>
            <div class="col xs2 s6">.red-200-text</div>
            <div class="col xs2 s6">.red-200</div>
        </div>
        <div class="row red-300">
            <div class="col xs2 s6">$red-300</div>
            <div class="col xs2 s6">#E57373</div>
            <div class="col xs2 s6">.red-300-text</div>
            <div class="col xs2 s6">.red-300</div>
        </div>
        <div class="row red-400 white-text">
            <div class="col xs2 s6">$red-400</div>
            <div class="col xs2 s6">#EF5350</div>
            <div class="col xs2 s6">.red-400-text</div>
            <div class="col xs2 s6">.red-400</div>
        </div>
        <div class="row red-500 white-text">
            <div class="col xs2 s6">$red-500</div>
            <div class="col xs2 s6">#F44336</div>
            <div class="col xs2 s6">.red-500-text</div>
            <div class="col xs2 s6">.red-500</div>
        </div>
        <div class="row red-600 white-text">
            <div class="col xs2 s6">$red-600</div>
            <div class="col xs2 s6">#E53935</div>
            <div class="col xs2 s6">.red-600-text</div>
            <div class="col xs2 s6">.red-600</div>
        </div>
        <div class="row red-700 white-text">
            <div class="col xs2 s6">$red-700</div>
            <div class="col xs2 s6">#D32F2F</div>
            <div class="col xs2 s6">.red-700-text</div>
            <div class="col xs2 s6">.red-700</div>
        </div>
        <div class="row red-800 white-text">
            <div class="col xs2 s6">$red-800</div>
            <div class="col xs2 s6">#C62828</div>
            <div class="col xs2 s6">.red-800-text</div>
            <div class="col xs2 s6">.red-800</div>
        </div>
        <div class="row red-900 white-text">
            <div class="col xs2 s6">$red-900</div>
            <div class="col xs2 s6">#B71C1C</div>
            <div class="col xs2 s6">.red-900-text</div>
            <div class="col xs2 s6">.red-900</div>
        </div>
        <div class="row red-a100">
            <div class="col xs2 s6">$red-a100</div>
            <div class="col xs2 s6">#FF8A80</div>
            <div class="col xs2 s6">.red-a100-text</div>
            <div class="col xs2 s6">.red-a100</div>
        </div>
        <div class="row red-a200 white-text">
            <div class="col xs2 s6">$red-a200</div>
            <div class="col xs2 s6">#FF8A80</div>
            <div class="col xs2 s6">.red-a200-text</div>
            <div class="col xs2 s6">.red-a200</div>
        </div>
        <div class="row red-a400 white-text">
            <div class="col xs2 s6">$red-a400</div>
            <div class="col xs2 s6">#FF1744</div>
            <div class="col xs2 s6">.red-a400-text</div>
            <div class="col xs2 s6">.red-a400</div>
        </div>
        <div class="row red-a700 white-text">
            <div class="col xs2 s6">$red-a700</div>
            <div class="col xs2 s6">#D50000</div>
            <div class="col xs2 s6">.red-a700-text</div>
            <div class="col xs2 s6">.red-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 pink-text">Pink</h3>
        <div class="row pink white-text">
            <div class="col xs2 s6">$pink</div>
            <div class="col xs2 s6">#E91E63</div>
            <div class="col xs2 s6">.pink-text</div>
            <div class="col xs2 s6">.pink</div>
        </div>
        <div class="row pink-50">
            <div class="col xs2 s6">$pink-50</div>
            <div class="col xs2 s6">#FCE4EC</div>
            <div class="col xs2 s6">.pink-50-text</div>
            <div class="col xs2 s6">.pink-50</div>
        </div>
        <div class="row pink-100">
            <div class="col xs2 s6">$pink-100</div>
            <div class="col xs2 s6">#F8BBD0</div>
            <div class="col xs2 s6">.pink-100-text</div>
            <div class="col xs2 s6">.pink-100</div>
        </div>
        <div class="row pink-200">
            <div class="col xs2 s6">$pink-200</div>
            <div class="col xs2 s6">#F48FB1</div>
            <div class="col xs2 s6">.pink-200-text</div>
            <div class="col xs2 s6">.pink-200</div>
        </div>
        <div class="row pink-300 white-text">
            <div class="col xs2 s6">$pink-300</div>
            <div class="col xs2 s6">#F06292</div>
            <div class="col xs2 s6">.pink-300-text</div>
            <div class="col xs2 s6">.pink-300</div>
        </div>
        <div class="row pink-400 white-text">
            <div class="col xs2 s6">$pink-400</div>
            <div class="col xs2 s6">#EC407A</div>
            <div class="col xs2 s6">.pink-400-text</div>
            <div class="col xs2 s6">.pink-400</div>
        </div>
        <div class="row pink-500 white-text">
            <div class="col xs2 s6">$pink-500</div>
            <div class="col xs2 s6">#E91E63</div>
            <div class="col xs2 s6">.pink-500-text</div>
            <div class="col xs2 s6">.pink-500</div>
        </div>
        <div class="row pink-600 white-text">
            <div class="col xs2 s6">$pink-600</div>
            <div class="col xs2 s6">#D81B60</div>
            <div class="col xs2 s6">.pink-600-text</div>
            <div class="col xs2 s6">.pink-600</div>
        </div>
        <div class="row pink-700 white-text">
            <div class="col xs2 s6">$pink-700</div>
            <div class="col xs2 s6">#C2185B</div>
            <div class="col xs2 s6">.pink-700-text</div>
            <div class="col xs2 s6">.pink-700</div>
        </div>
        <div class="row pink-800 white-text">
            <div class="col xs2 s6">$pink-800</div>
            <div class="col xs2 s6">#AD1457</div>
            <div class="col xs2 s6">.pink-800-text</div>
            <div class="col xs2 s6">.pink-800</div>
        </div>
        <div class="row pink-900 white-text">
            <div class="col xs2 s6">$pink-900</div>
            <div class="col xs2 s6">#880E4F</div>
            <div class="col xs2 s6">.pink-900-text</div>
            <div class="col xs2 s6">.pink-900</div>
        </div>
        <div class="row pink-a100">
            <div class="col xs2 s6">$pink-a100</div>
            <div class="col xs2 s6">#FF80AB</div>
            <div class="col xs2 s6">.pink-a100-text</div>
            <div class="col xs2 s6">.pink-a100</div>
        </div>
        <div class="row pink-a200 white-text">
            <div class="col xs2 s6">$pink-a200</div>
            <div class="col xs2 s6">#FF4081</div>
            <div class="col xs2 s6">.pink-a200-text</div>
            <div class="col xs2 s6">.pink-a200</div>
        </div>
        <div class="row pink-a400 white-text">
            <div class="col xs2 s6">$pink-a400</div>
            <div class="col xs2 s6">#F50057</div>
            <div class="col xs2 s6">.pink-a400-text</div>
            <div class="col xs2 s6">.pink-a400</div>
        </div>
        <div class="row pink-a700 white-text">
            <div class="col xs2 s6">$pink-a700</div>
            <div class="col xs2 s6">#C51162</div>
            <div class="col xs2 s6">.pink-a700-text</div>
            <div class="col xs2 s6">.pink-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 purple-text">Purple</h3>
        <div class="row purple white-text">
            <div class="col xs2 s6">$purple</div>
            <div class="col xs2 s6">#9C27B0</div>
            <div class="col xs2 s6">.purple-text</div>
            <div class="col xs2 s6">.purple</div>
        </div>
        <div class="row purple-50">
            <div class="col xs2 s6">$purple-50</div>
            <div class="col xs2 s6">#F3E5F5</div>
            <div class="col xs2 s6">.purple-50-text</div>
            <div class="col xs2 s6">.purple-50</div>
        </div>
        <div class="row purple-100">
            <div class="col xs2 s6">$purple-100</div>
            <div class="col xs2 s6">#E1BEE7</div>
            <div class="col xs2 s6">.purple-100-text</div>
            <div class="col xs2 s6">.purple-100</div>
        </div>
        <div class="row purple-200">
            <div class="col xs2 s6">$purple-200</div>
            <div class="col xs2 s6">#CE93D8</div>
            <div class="col xs2 s6">.purple-200-text</div>
            <div class="col xs2 s6">.purple-200</div>
        </div>
        <div class="row purple-300 white-text">
            <div class="col xs2 s6">$purple-300</div>
            <div class="col xs2 s6">#BA68C8</div>
            <div class="col xs2 s6">.purple-300-text</div>
            <div class="col xs2 s6">.purple-300</div>
        </div>
        <div class="row purple-400 white-text">
            <div class="col xs2 s6">$purple-400</div>
            <div class="col xs2 s6">#AB47BC</div>
            <div class="col xs2 s6">.purple-400-text</div>
            <div class="col xs2 s6">.purple-400</div>
        </div>
        <div class="row purple-500 white-text">
            <div class="col xs2 s6">$purple-500</div>
            <div class="col xs2 s6">#9C27B0</div>
            <div class="col xs2 s6">.purple-500-text</div>
            <div class="col xs2 s6">.purple-500</div>
        </div>
        <div class="row purple-600 white-text">
            <div class="col xs2 s6">$purple-600</div>
            <div class="col xs2 s6">#8E24AA</div>
            <div class="col xs2 s6">.purple-600-text</div>
            <div class="col xs2 s6">.purple-600</div>
        </div>
        <div class="row purple-700 white-text">
            <div class="col xs2 s6">$purple-700</div>
            <div class="col xs2 s6">#7B1FA2</div>
            <div class="col xs2 s6">.purple-700-text</div>
            <div class="col xs2 s6">.purple-700</div>
        </div>
        <div class="row purple-800 white-text">
            <div class="col xs2 s6">$purple-800</div>
            <div class="col xs2 s6">#6A1B9A</div>
            <div class="col xs2 s6">.purple-800-text</div>
            <div class="col xs2 s6">.purple-800</div>
        </div>
        <div class="row purple-900 white-text">
            <div class="col xs2 s6">$purple-900</div>
            <div class="col xs2 s6">#4A148C</div>
            <div class="col xs2 s6">.purple-900-text</div>
            <div class="col xs2 s6">.purple-900</div>
        </div>
        <div class="row purple-a100">
            <div class="col xs2 s6">$purple-a100</div>
            <div class="col xs2 s6">#EA80FC</div>
            <div class="col xs2 s6">.purple-a100-text</div>
            <div class="col xs2 s6">.purple-a100</div>
        </div>
        <div class="row purple-a200 white-text">
            <div class="col xs2 s6">$purple-a200</div>
            <div class="col xs2 s6">#E040FB</div>
            <div class="col xs2 s6">.purple-a200-text</div>
            <div class="col xs2 s6">.purple-a200</div>
        </div>
        <div class="row purple-a400 white-text">
            <div class="col xs2 s6">$purple-a400</div>
            <div class="col xs2 s6">#D500F9</div>
            <div class="col xs2 s6">.purple-a400-text</div>
            <div class="col xs2 s6">.purple-a400</div>
        </div>
        <div class="row purple-a700 white-text">
            <div class="col xs2 s6">$purple-a700</div>
            <div class="col xs2 s6">#AA00FF</div>
            <div class="col xs2 s6">.purple-a700-text</div>
            <div class="col xs2 s6">.purple-a700</div>
        </div>
    </div>
</section>
<section class="row">
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 deep-purple-text">Deep purple</h3>
        <div class="row deep-purple white-text">
            <div class="col xs2 s6">$deep-purple</div>
            <div class="col xs2 s6">#673AB7</div>
            <div class="col xs2 s6">.deep-purple-text</div>
            <div class="col xs2 s6">.deep-purple</div>
        </div>
        <div class="row deep-purple-50">
            <div class="col xs2 s6">$deep-purple-50</div>
            <div class="col xs2 s6">#EDE7F6</div>
            <div class="col xs2 s6">.deep-purple-50-text</div>
            <div class="col xs2 s6">.deep-purple-50</div>
        </div>
        <div class="row deep-purple-100">
            <div class="col xs2 s6">$deep-purple-100</div>
            <div class="col xs2 s6">#D1C4E9</div>
            <div class="col xs2 s6">.deep-purple-100-text</div>
            <div class="col xs2 s6">.deep-purple-100</div>
        </div>
        <div class="row deep-purple-200">
            <div class="col xs2 s6">$deep-purple-200</div>
            <div class="col xs2 s6">#B39DDB</div>
            <div class="col xs2 s6">.deep-purple-200-text</div>
            <div class="col xs2 s6">.deep-purple-200</div>
        </div>
        <div class="row deep-purple-300 white-text">
            <div class="col xs2 s6">$deep-purple-300</div>
            <div class="col xs2 s6">#9575CD</div>
            <div class="col xs2 s6">.deep-purple-300-text</div>
            <div class="col xs2 s6">.deep-purple-300</div>
        </div>
        <div class="row deep-purple-400 white-text">
            <div class="col xs2 s6">$deep-purple-400</div>
            <div class="col xs2 s6">#7E57C2</div>
            <div class="col xs2 s6">.deep-purple-400-text</div>
            <div class="col xs2 s6">.deep-purple-400</div>
        </div>
        <div class="row deep-purple-500 white-text">
            <div class="col xs2 s6">$deep-purple-500</div>
            <div class="col xs2 s6">#673AB7</div>
            <div class="col xs2 s6">.deep-purple-500-text</div>
            <div class="col xs2 s6">.deep-purple-500</div>
        </div>
        <div class="row deep-purple-600 white-text">
            <div class="col xs2 s6">$deep-purple-600</div>
            <div class="col xs2 s6">#5E35B1</div>
            <div class="col xs2 s6">.deep-purple-600-text</div>
            <div class="col xs2 s6">.deep-purple-600</div>
        </div>
        <div class="row deep-purple-700 white-text">
            <div class="col xs2 s6">$deep-purple-700</div>
            <div class="col xs2 s6">#512DA8</div>
            <div class="col xs2 s6">.deep-purple-700-text</div>
            <div class="col xs2 s6">.deep-purple-700</div>
        </div>
        <div class="row deep-purple-800 white-text">
            <div class="col xs2 s6">$deep-purple-800</div>
            <div class="col xs2 s6">#4527A0</div>
            <div class="col xs2 s6">.deep-purple-800-text</div>
            <div class="col xs2 s6">.deep-purple-800</div>
        </div>
        <div class="row deep-purple-900 white-text">
            <div class="col xs2 s6">$deep-purple-900</div>
            <div class="col xs2 s6">#311B92</div>
            <div class="col xs2 s6">.deep-purple-900-text</div>
            <div class="col xs2 s6">.deep-purple-900</div>
        </div>
        <div class="row deep-purple-a100">
            <div class="col xs2 s6">$deep-purple-a100</div>
            <div class="col xs2 s6">#B388FF</div>
            <div class="col xs2 s6">.deep-purple-a100-text</div>
            <div class="col xs2 s6">.deep-purple-a100</div>
        </div>
        <div class="row deep-purple-a200 white-text">
            <div class="col xs2 s6">$deep-purple-a200</div>
            <div class="col xs2 s6">#7C4DFF</div>
            <div class="col xs2 s6">.deep-purple-a200-text</div>
            <div class="col xs2 s6">.deep-purple-a200</div>
        </div>
        <div class="row deep-purple-a400 white-text">
            <div class="col xs2 s6">$deep-purple-a400</div>
            <div class="col xs2 s6">#651FFF</div>
            <div class="col xs2 s6">.deep-purple-a400-text</div>
            <div class="col xs2 s6">.deep-purple-a400</div>
        </div>
        <div class="row deep-purple-a700 white-text">
            <div class="col xs2 s6">$deep-purple-a700</div>
            <div class="col xs2 s6">#6200EA</div>
            <div class="col xs2 s6">.deep-purple-a700-text</div>
            <div class="col xs2 s6">.deep-purple-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 indigo-text">Indigo</h3>
        <div class="row indigo white-text">
            <div class="col xs2 s6">$indigo</div>
            <div class="col xs2 s6">#3F51B5</div>
            <div class="col xs2 s6">.indigo-text</div>
            <div class="col xs2 s6">.indigo</div>
        </div>
        <div class="row indigo-50">
            <div class="col xs2 s6">$indigo-50</div>
            <div class="col xs2 s6">#E8EAF6</div>
            <div class="col xs2 s6">.indigo-50-text</div>
            <div class="col xs2 s6">.indigo-50</div>
        </div>
        <div class="row indigo-100">
            <div class="col xs2 s6">$indigo-100</div>
            <div class="col xs2 s6">#C5CAE9</div>
            <div class="col xs2 s6">.indigo-100-text</div>
            <div class="col xs2 s6">.indigo-100</div>
        </div>
        <div class="row indigo-200">
            <div class="col xs2 s6">$indigo-200</div>
            <div class="col xs2 s6">#9FA8DA</div>
            <div class="col xs2 s6">.indigo-200-text</div>
            <div class="col xs2 s6">.indigo-200</div>
        </div>
        <div class="row indigo-300 white-text">
            <div class="col xs2 s6">$indigo-300</div>
            <div class="col xs2 s6">#7986CB</div>
            <div class="col xs2 s6">.indigo-300-text</div>
            <div class="col xs2 s6">.indigo-300</div>
        </div>
        <div class="row indigo-400 white-text">
            <div class="col xs2 s6">$indigo-400</div>
            <div class="col xs2 s6">#5C6BC0</div>
            <div class="col xs2 s6">.indigo-400-text</div>
            <div class="col xs2 s6">.indigo-400</div>
        </div>
        <div class="row indigo-500 white-text">
            <div class="col xs2 s6">$indigo-500</div>
            <div class="col xs2 s6">#3F51B5</div>
            <div class="col xs2 s6">.indigo-500-text</div>
            <div class="col xs2 s6">.indigo-500</div>
        </div>
        <div class="row indigo-600 white-text">
            <div class="col xs2 s6">$indigo-600</div>
            <div class="col xs2 s6">#3949AB</div>
            <div class="col xs2 s6">.indigo-600-text</div>
            <div class="col xs2 s6">.indigo-600</div>
        </div>
        <div class="row indigo-700 white-text">
            <div class="col xs2 s6">$indigo-700</div>
            <div class="col xs2 s6">#303F9F</div>
            <div class="col xs2 s6">.indigo-700-text</div>
            <div class="col xs2 s6">.indigo-700</div>
        </div>
        <div class="row indigo-800 white-text">
            <div class="col xs2 s6">$indigo-800</div>
            <div class="col xs2 s6">#283593</div>
            <div class="col xs2 s6">.indigo-800-text</div>
            <div class="col xs2 s6">.indigo-800</div>
        </div>
        <div class="row indigo-900 white-text">
            <div class="col xs2 s6">$indigo-900</div>
            <div class="col xs2 s6">#1A237E</div>
            <div class="col xs2 s6">.indigo-900-text</div>
            <div class="col xs2 s6">.indigo-900</div>
        </div>
        <div class="row indigo-a100">
            <div class="col xs2 s6">$indigo-a100</div>
            <div class="col xs2 s6">#8C9EFF</div>
            <div class="col xs2 s6">.indigo-a100-text</div>
            <div class="col xs2 s6">.indigo-a100</div>
        </div>
        <div class="row indigo-a200 white-text">
            <div class="col xs2 s6">$indigo-a200</div>
            <div class="col xs2 s6">#536DFE</div>
            <div class="col xs2 s6">.indigo-a200-text</div>
            <div class="col xs2 s6">.indigo-a200</div>
        </div>
        <div class="row indigo-a400 white-text">
            <div class="col xs2 s6">$indigo-a400</div>
            <div class="col xs2 s6">#3D5AFE</div>
            <div class="col xs2 s6">.indigo-a400-text</div>
            <div class="col xs2 s6">.indigo-a400</div>
        </div>
        <div class="row indigo-a700 white-text">
            <div class="col xs2 s6">$indigo-a700</div>
            <div class="col xs2 s6">#304FFE</div>
            <div class="col xs2 s6">.indigo-a700-text</div>
            <div class="col xs2 s6">.indigo-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 blue-text">Blue</h3>
        <div class="row blue white-text">
            <div class="col xs2 s6">$blue</div>
            <div class="col xs2 s6">#2196F3</div>
            <div class="col xs2 s6">.blue-text</div>
            <div class="col xs2 s6">.blue</div>
        </div>
        <div class="row blue-50">
            <div class="col xs2 s6">$blue-50</div>
            <div class="col xs2 s6">#E3F2FD</div>
            <div class="col xs2 s6">.blue-50-text</div>
            <div class="col xs2 s6">.blue-50</div>
        </div>
        <div class="row blue-100">
            <div class="col xs2 s6">$blue-100</div>
            <div class="col xs2 s6">#BBDEFB</div>
            <div class="col xs2 s6">.blue-100-text</div>
            <div class="col xs2 s6">.blue-100</div>
        </div>
        <div class="row blue-200">
            <div class="col xs2 s6">$blue-200</div>
            <div class="col xs2 s6">#90CAF9</div>
            <div class="col xs2 s6">.blue-200-text</div>
            <div class="col xs2 s6">.blue-200</div>
        </div>
        <div class="row blue-300">
            <div class="col xs2 s6">$blue-300</div>
            <div class="col xs2 s6">#64B5F6</div>
            <div class="col xs2 s6">.blue-300-text</div>
            <div class="col xs2 s6">.blue-300</div>
        </div>
        <div class="row blue-400">
            <div class="col xs2 s6">$blue-400</div>
            <div class="col xs2 s6">#42A5F5</div>
            <div class="col xs2 s6">.blue-400-text</div>
            <div class="col xs2 s6">.blue-400</div>
        </div>
        <div class="row blue-500 white-text">
            <div class="col xs2 s6">$blue-500</div>
            <div class="col xs2 s6">#2196F3</div>
            <div class="col xs2 s6">.blue-500-text</div>
            <div class="col xs2 s6">.blue-500</div>
        </div>
        <div class="row blue-600 white-text">
            <div class="col xs2 s6">$blue-600</div>
            <div class="col xs2 s6">#1E88E5</div>
            <div class="col xs2 s6">.blue-600-text</div>
            <div class="col xs2 s6">.blue-600</div>
        </div>
        <div class="row blue-700 white-text">
            <div class="col xs2 s6">$blue-700</div>
            <div class="col xs2 s6">#1976D2</div>
            <div class="col xs2 s6">.blue-700-text</div>
            <div class="col xs2 s6">.blue-700</div>
        </div>
        <div class="row blue-800 white-text">
            <div class="col xs2 s6">$blue-800</div>
            <div class="col xs2 s6">#1565C0</div>
            <div class="col xs2 s6">.blue-800-text</div>
            <div class="col xs2 s6">.blue-800</div>
        </div>
        <div class="row blue-900 white-text">
            <div class="col xs2 s6">$blue-900</div>
            <div class="col xs2 s6">#0D47A1</div>
            <div class="col xs2 s6">.blue-900-text</div>
            <div class="col xs2 s6">.blue-900</div>
        </div>
        <div class="row blue-a100">
            <div class="col xs2 s6">$blue-a100</div>
            <div class="col xs2 s6">#82B1FF</div>
            <div class="col xs2 s6">.blue-a100-text</div>
            <div class="col xs2 s6">.blue-a100</div>
        </div>
        <div class="row blue-a200 white-text">
            <div class="col xs2 s6">$blue-a200</div>
            <div class="col xs2 s6">#448AFF</div>
            <div class="col xs2 s6">.blue-a200-text</div>
            <div class="col xs2 s6">.blue-a200</div>
        </div>
        <div class="row blue-a400 white-text">
            <div class="col xs2 s6">$blue-a400</div>
            <div class="col xs2 s6">#2979FF</div>
            <div class="col xs2 s6">.blue-a400-text</div>
            <div class="col xs2 s6">.blue-a400</div>
        </div>
        <div class="row blue-a700 white-text">
            <div class="col xs2 s6">$blue-a700</div>
            <div class="col xs2 s6">#2962FF</div>
            <div class="col xs2 s6">.blue-a700-text</div>
            <div class="col xs2 s6">.blue-a700</div>
        </div>
    </div>
</section>
<section class="row">
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 light-blue-text">Light blue</h3>
        <div class="row light-blue">
            <div class="col xs2 s6">$light-blue</div>
            <div class="col xs2 s6">#03A9F4</div>
            <div class="col xs2 s6">.light-blue-text</div>
            <div class="col xs2 s6">.light-blue</div>
        </div>
        <div class="row light-blue-50">
            <div class="col xs2 s6">$light-blue-50</div>
            <div class="col xs2 s6">#E1F5FE</div>
            <div class="col xs2 s6">.light-blue-50-text</div>
            <div class="col xs2 s6">.light-blue-50</div>
        </div>
        <div class="row light-blue-100">
            <div class="col xs2 s6">$light-blue-100</div>
            <div class="col xs2 s6">#B3E5FC</div>
            <div class="col xs2 s6">.light-blue-100-text</div>
            <div class="col xs2 s6">.light-blue-100</div>
        </div>
        <div class="row light-blue-200">
            <div class="col xs2 s6">$light-blue-200</div>
            <div class="col xs2 s6">#81D4FA</div>
            <div class="col xs2 s6">.light-blue-200-text</div>
            <div class="col xs2 s6">.light-blue-200</div>
        </div>
        <div class="row light-blue-300">
            <div class="col xs2 s6">$light-blue-300</div>
            <div class="col xs2 s6">#4FC3F7</div>
            <div class="col xs2 s6">.light-blue-300-text</div>
            <div class="col xs2 s6">.light-blue-300</div>
        </div>
        <div class="row light-blue-400">
            <div class="col xs2 s6">$light-blue-400</div>
            <div class="col xs2 s6">#29B6F6</div>
            <div class="col xs2 s6">.light-blue-400-text</div>
            <div class="col xs2 s6">.light-blue-400</div>
        </div>
        <div class="row light-blue-500">
            <div class="col xs2 s6">$light-blue-500</div>
            <div class="col xs2 s6">#03A9F4</div>
            <div class="col xs2 s6">.light-blue-500-text</div>
            <div class="col xs2 s6">.light-blue-500</div>
        </div>
        <div class="row light-blue-600 white-text">
            <div class="col xs2 s6">$light-blue-600</div>
            <div class="col xs2 s6">#039BE5</div>
            <div class="col xs2 s6">.light-blue-600-text</div>
            <div class="col xs2 s6">.light-blue-600</div>
        </div>
        <div class="row light-blue-700 white-text">
            <div class="col xs2 s6">$light-blue-700</div>
            <div class="col xs2 s6">#0288D1</div>
            <div class="col xs2 s6">.light-blue-700-text</div>
            <div class="col xs2 s6">.light-blue-700</div>
        </div>
        <div class="row light-blue-800 white-text">
            <div class="col xs2 s6">$light-blue-800</div>
            <div class="col xs2 s6">#0277BD</div>
            <div class="col xs2 s6">.light-blue-800-text</div>
            <div class="col xs2 s6">.light-blue-800</div>
        </div>
        <div class="row light-blue-900 white-text">
            <div class="col xs2 s6">$light-blue-900</div>
            <div class="col xs2 s6">#01579B</div>
            <div class="col xs2 s6">.light-blue-900-text</div>
            <div class="col xs2 s6">.light-blue-900</div>
        </div>
        <div class="row light-blue-a100">
            <div class="col xs2 s6">$light-blue-a100</div>
            <div class="col xs2 s6">#80D8FF</div>
            <div class="col xs2 s6">.light-blue-a100-text</div>
            <div class="col xs2 s6">.light-blue-a100</div>
        </div>
        <div class="row light-blue-a200">
            <div class="col xs2 s6">$light-blue-a200</div>
            <div class="col xs2 s6">#40C4FF</div>
            <div class="col xs2 s6">.light-blue-a200-text</div>
            <div class="col xs2 s6">.light-blue-a200</div>
        </div>
        <div class="row light-blue-a400">
            <div class="col xs2 s6">$light-blue-a400</div>
            <div class="col xs2 s6">#00B0FF</div>
            <div class="col xs2 s6">.light-blue-a400-text</div>
            <div class="col xs2 s6">.light-blue-a400</div>
        </div>
        <div class="row light-blue-a700 white-text">
            <div class="col xs2 s6">$light-blue-a700</div>
            <div class="col xs2 s6">#0091EA</div>
            <div class="col xs2 s6">.light-blue-a700-text</div>
            <div class="col xs2 s6">.light-blue-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 cyan-text">Cyan</h3>
        <div class="row cyan">
            <div class="col xs2 s6">$cyan</div>
            <div class="col xs2 s6">#00BCD4</div>
            <div class="col xs2 s6">.cyan-text</div>
            <div class="col xs2 s6">.cyan</div>
        </div>
        <div class="row cyan-50">
            <div class="col xs2 s6">$cyan-50</div>
            <div class="col xs2 s6">#E0F7FA</div>
            <div class="col xs2 s6">.cyan-50-text</div>
            <div class="col xs2 s6">.cyan-50</div>
        </div>
        <div class="row cyan-100">
            <div class="col xs2 s6">$cyan-100</div>
            <div class="col xs2 s6">#B2EBF2</div>
            <div class="col xs2 s6">.cyan-100-text</div>
            <div class="col xs2 s6">.cyan-100</div>
        </div>
        <div class="row cyan-200">
            <div class="col xs2 s6">$cyan-200</div>
            <div class="col xs2 s6">#80DEEA</div>
            <div class="col xs2 s6">.cyan-200-text</div>
            <div class="col xs2 s6">.cyan-200</div>
        </div>
        <div class="row cyan-300">
            <div class="col xs2 s6">$cyan-300</div>
            <div class="col xs2 s6">#4DD0E1</div>
            <div class="col xs2 s6">.cyan-300-text</div>
            <div class="col xs2 s6">.cyan-300</div>
        </div>
        <div class="row cyan-400">
            <div class="col xs2 s6">$cyan-400</div>
            <div class="col xs2 s6">#26C6DA</div>
            <div class="col xs2 s6">.cyan-400-text</div>
            <div class="col xs2 s6">.cyan-400</div>
        </div>
        <div class="row cyan-500">
            <div class="col xs2 s6">$cyan-500</div>
            <div class="col xs2 s6">#00BCD4</div>
            <div class="col xs2 s6">.cyan-500-text</div>
            <div class="col xs2 s6">.cyan-500</div>
        </div>
        <div class="row cyan-600">
            <div class="col xs2 s6">$cyan-600</div>
            <div class="col xs2 s6">#00ACC1</div>
            <div class="col xs2 s6">.cyan-600-text</div>
            <div class="col xs2 s6">.cyan-600</div>
        </div>
        <div class="row cyan-700 white-text">
            <div class="col xs2 s6">$cyan-700</div>
            <div class="col xs2 s6">#0097A7</div>
            <div class="col xs2 s6">.cyan-700-text</div>
            <div class="col xs2 s6">.cyan-700</div>
        </div>
        <div class="row cyan-800 white-text">
            <div class="col xs2 s6">$cyan-800</div>
            <div class="col xs2 s6">#00838F</div>
            <div class="col xs2 s6">.cyan-800-text</div>
            <div class="col xs2 s6">.cyan-800</div>
        </div>
        <div class="row cyan-900 white-text">
            <div class="col xs2 s6">$cyan-900</div>
            <div class="col xs2 s6">#006064</div>
            <div class="col xs2 s6">.cyan-900-text</div>
            <div class="col xs2 s6">.cyan-900</div>
        </div>
        <div class="row cyan-a100">
            <div class="col xs2 s6">$cyan-a100</div>
            <div class="col xs2 s6">#84FFFF</div>
            <div class="col xs2 s6">.cyan-a100-text</div>
            <div class="col xs2 s6">.cyan-a100</div>
        </div>
        <div class="row cyan-a200">
            <div class="col xs2 s6">$cyan-a200</div>
            <div class="col xs2 s6">#18FFFF</div>
            <div class="col xs2 s6">.cyan-a200-text</div>
            <div class="col xs2 s6">.cyan-a200</div>
        </div>
        <div class="row cyan-a400">
            <div class="col xs2 s6">$cyan-a400</div>
            <div class="col xs2 s6">#00E5FF</div>
            <div class="col xs2 s6">.cyan-a400-text</div>
            <div class="col xs2 s6">.cyan-a400</div>
        </div>
        <div class="row cyan-a700">
            <div class="col xs2 s6">$cyan-a700</div>
            <div class="col xs2 s6">#00B8D4</div>
            <div class="col xs2 s6">.cyan-a700-text</div>
            <div class="col xs2 s6">.cyan-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 teal-text">Teal</h3>
        <div class="row teal white-text">
            <div class="col xs2 s6">$teal</div>
            <div class="col xs2 s6">#009688</div>
            <div class="col xs2 s6">.teal-text</div>
            <div class="col xs2 s6">.teal</div>
        </div>
        <div class="row teal-50">
            <div class="col xs2 s6">$teal-50</div>
            <div class="col xs2 s6">#E0F2F1</div>
            <div class="col xs2 s6">.teal-50-text</div>
            <div class="col xs2 s6">.teal-50</div>
        </div>
        <div class="row teal-100">
            <div class="col xs2 s6">$teal-100</div>
            <div class="col xs2 s6">#B2DFDB</div>
            <div class="col xs2 s6">.teal-100-text</div>
            <div class="col xs2 s6">.teal-100</div>
        </div>
        <div class="row teal-200">
            <div class="col xs2 s6">$teal-200</div>
            <div class="col xs2 s6">#80CBC4</div>
            <div class="col xs2 s6">.teal-200-text</div>
            <div class="col xs2 s6">.teal-200</div>
        </div>
        <div class="row teal-300">
            <div class="col xs2 s6">$teal-300</div>
            <div class="col xs2 s6">#4DB6AC</div>
            <div class="col xs2 s6">.teal-300-text</div>
            <div class="col xs2 s6">.teal-300</div>
        </div>
        <div class="row teal-400">
            <div class="col xs2 s6">$teal-400</div>
            <div class="col xs2 s6">#26A69A</div>
            <div class="col xs2 s6">.teal-400-text</div>
            <div class="col xs2 s6">.teal-400</div>
        </div>
        <div class="row teal-500 white-text">
            <div class="col xs2 s6">$teal-500</div>
            <div class="col xs2 s6">#009688</div>
            <div class="col xs2 s6">.teal-500-text</div>
            <div class="col xs2 s6">.teal-500</div>
        </div>
        <div class="row teal-600 white-text">
            <div class="col xs2 s6">$teal-600</div>
            <div class="col xs2 s6">#00897B</div>
            <div class="col xs2 s6">.teal-600-text</div>
            <div class="col xs2 s6">.teal-600</div>
        </div>
        <div class="row teal-700 white-text">
            <div class="col xs2 s6">$teal-700</div>
            <div class="col xs2 s6">#00796B</div>
            <div class="col xs2 s6">.teal-700-text</div>
            <div class="col xs2 s6">.teal-700</div>
        </div>
        <div class="row teal-800 white-text">
            <div class="col xs2 s6">$teal-800</div>
            <div class="col xs2 s6">#00695C</div>
            <div class="col xs2 s6">.teal-800-text</div>
            <div class="col xs2 s6">.teal-800</div>
        </div>
        <div class="row teal-900 white-text">
            <div class="col xs2 s6">$teal-900</div>
            <div class="col xs2 s6">#004D40</div>
            <div class="col xs2 s6">.teal-900-text</div>
            <div class="col xs2 s6">.teal-900</div>
        </div>
        <div class="row teal-a100">
            <div class="col xs2 s6">$teal-a100</div>
            <div class="col xs2 s6">#A7FFEB</div>
            <div class="col xs2 s6">.teal-a100-text</div>
            <div class="col xs2 s6">.teal-a100</div>
        </div>
        <div class="row teal-a200">
            <div class="col xs2 s6">$teal-a200</div>
            <div class="col xs2 s6">#64FFDA</div>
            <div class="col xs2 s6">.teal-a200-text</div>
            <div class="col xs2 s6">.teal-a200</div>
        </div>
        <div class="row teal-a400">
            <div class="col xs2 s6">$teal-a400</div>
            <div class="col xs2 s6">#1DE9B6</div>
            <div class="col xs2 s6">.teal-a400-text</div>
            <div class="col xs2 s6">.teal-a400</div>
        </div>
        <div class="row teal-a700">
            <div class="col xs2 s6">$teal-a700</div>
            <div class="col xs2 s6">#00BFA5</div>
            <div class="col xs2 s6">.teal-a700-text</div>
            <div class="col xs2 s6">.teal-a700</div>
        </div>
    </div>
</section>
<section class="row">
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 green-text">Green</h3>
        <div class="row green">
            <div class="col xs2 s6">$green</div>
            <div class="col xs2 s6">#4CAF50</div>
            <div class="col xs2 s6">.green-text</div>
            <div class="col xs2 s6">.green</div>
        </div>
        <div class="row green-50">
            <div class="col xs2 s6">$green-50</div>
            <div class="col xs2 s6">#E8F5E9</div>
            <div class="col xs2 s6">.green-50-text</div>
            <div class="col xs2 s6">.green-50</div>
        </div>
        <div class="row green-100">
            <div class="col xs2 s6">$green-100</div>
            <div class="col xs2 s6">#C8E6C9</div>
            <div class="col xs2 s6">.green-100-text</div>
            <div class="col xs2 s6">.green-100</div>
        </div>
        <div class="row green-200">
            <div class="col xs2 s6">$green-200</div>
            <div class="col xs2 s6">#A5D6A7</div>
            <div class="col xs2 s6">.green-200-text</div>
            <div class="col xs2 s6">.green-200</div>
        </div>
        <div class="row green-300">
            <div class="col xs2 s6">$green-300</div>
            <div class="col xs2 s6">#81C784</div>
            <div class="col xs2 s6">.green-300-text</div>
            <div class="col xs2 s6">.green-300</div>
        </div>
        <div class="row green-400">
            <div class="col xs2 s6">$green-400</div>
            <div class="col xs2 s6">#66BB6A</div>
            <div class="col xs2 s6">.green-400-text</div>
            <div class="col xs2 s6">.green-400</div>
        </div>
        <div class="row green-500">
            <div class="col xs2 s6">$green-500</div>
            <div class="col xs2 s6">#4CAF50</div>
            <div class="col xs2 s6">.green-500-text</div>
            <div class="col xs2 s6">.green-500</div>
        </div>
        <div class="row green-600 white-text">
            <div class="col xs2 s6">$green-600</div>
            <div class="col xs2 s6">#43A047</div>
            <div class="col xs2 s6">.green-600-text</div>
            <div class="col xs2 s6">.green-600</div>
        </div>
        <div class="row green-700 white-text">
            <div class="col xs2 s6">$green-700</div>
            <div class="col xs2 s6">#388E3C</div>
            <div class="col xs2 s6">.green-700-text</div>
            <div class="col xs2 s6">.green-700</div>
        </div>
        <div class="row green-800 white-text">
            <div class="col xs2 s6">$green-800</div>
            <div class="col xs2 s6">#2E7D32</div>
            <div class="col xs2 s6">.green-800-text</div>
            <div class="col xs2 s6">.green-800</div>
        </div>
        <div class="row green-900 white-text">
            <div class="col xs2 s6">$green-900</div>
            <div class="col xs2 s6">#1B5E20</div>
            <div class="col xs2 s6">.green-900-text</div>
            <div class="col xs2 s6">.green-900</div>
        </div>
        <div class="row green-a100">
            <div class="col xs2 s6">$green-a100</div>
            <div class="col xs2 s6">#B9F6CA</div>
            <div class="col xs2 s6">.green-a100-text</div>
            <div class="col xs2 s6">.green-a100</div>
        </div>
        <div class="row green-a200">
            <div class="col xs2 s6">$green-a200</div>
            <div class="col xs2 s6">#64FFDA</div>
            <div class="col xs2 s6">.green-a200-text</div>
            <div class="col xs2 s6">.green-a200</div>
        </div>
        <div class="row green-a400">
            <div class="col xs2 s6">$green-a400</div>
            <div class="col xs2 s6">#00E676</div>
            <div class="col xs2 s6">.green-a400-text</div>
            <div class="col xs2 s6">.green-a400</div>
        </div>
        <div class="row green-a700">
            <div class="col xs2 s6">$green-a700</div>
            <div class="col xs2 s6">#00C853</div>
            <div class="col xs2 s6">.green-a700-text</div>
            <div class="col xs2 s6">.green-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 light-green-text">Light green</h3>
        <div class="row light-green">
            <div class="col xs2 s6">$light-green</div>
            <div class="col xs2 s6">#8BC34A</div>
            <div class="col xs2 s6">.light-green-text</div>
            <div class="col xs2 s6">.light-green</div>
        </div>
        <div class="row light-green-50">
            <div class="col xs2 s6">$light-green-50</div>
            <div class="col xs2 s6">#F1F8E9</div>
            <div class="col xs2 s6">.light-green-50-text</div>
            <div class="col xs2 s6">.light-green-50</div>
        </div>
        <div class="row light-green-100">
            <div class="col xs2 s6">$light-green-100</div>
            <div class="col xs2 s6">#DCEDC8</div>
            <div class="col xs2 s6">.light-green-100-text</div>
            <div class="col xs2 s6">.light-green-100</div>
        </div>
        <div class="row light-green-200">
            <div class="col xs2 s6">$light-green-200</div>
            <div class="col xs2 s6">#C5E1A5</div>
            <div class="col xs2 s6">.light-green-200-text</div>
            <div class="col xs2 s6">.light-green-200</div>
        </div>
        <div class="row light-green-300">
            <div class="col xs2 s6">$light-green-300</div>
            <div class="col xs2 s6">#AED581</div>
            <div class="col xs2 s6">.light-green-300-text</div>
            <div class="col xs2 s6">.light-green-300</div>
        </div>
        <div class="row light-green-400">
            <div class="col xs2 s6">$light-green-400</div>
            <div class="col xs2 s6">#9CCC65</div>
            <div class="col xs2 s6">.light-green-400-text</div>
            <div class="col xs2 s6">.light-green-400</div>
        </div>
        <div class="row light-green-500">
            <div class="col xs2 s6">$light-green-500</div>
            <div class="col xs2 s6">#8BC34A</div>
            <div class="col xs2 s6">.light-green-500-text</div>
            <div class="col xs2 s6">.light-green-500</div>
        </div>
        <div class="row light-green-600">
            <div class="col xs2 s6">$light-green-600</div>
            <div class="col xs2 s6">#7CB342</div>
            <div class="col xs2 s6">.light-green-600-text</div>
            <div class="col xs2 s6">.light-green-600</div>
        </div>
        <div class="row light-green-700 white-text">
            <div class="col xs2 s6">$light-green-700</div>
            <div class="col xs2 s6">#689F38</div>
            <div class="col xs2 s6">.light-green-700-text</div>
            <div class="col xs2 s6">.light-green-700</div>
        </div>
        <div class="row light-green-800 white-text">
            <div class="col xs2 s6">$light-green-800</div>
            <div class="col xs2 s6">#558B2F</div>
            <div class="col xs2 s6">.light-green-800-text</div>
            <div class="col xs2 s6">.light-green-800</div>
        </div>
        <div class="row light-green-900 white-text">
            <div class="col xs2 s6">$light-green-900</div>
            <div class="col xs2 s6">#33691E</div>
            <div class="col xs2 s6">.light-green-900-text</div>
            <div class="col xs2 s6">.light-green-900</div>
        </div>
        <div class="row light-green-a100">
            <div class="col xs2 s6">$light-green-a100</div>
            <div class="col xs2 s6">#CCFF90</div>
            <div class="col xs2 s6">.light-green-a100-text</div>
            <div class="col xs2 s6">.light-green-a100</div>
        </div>
        <div class="row light-green-a200">
            <div class="col xs2 s6">$light-green-a200</div>
            <div class="col xs2 s6">#B2FF59</div>
            <div class="col xs2 s6">.light-green-a200-text</div>
            <div class="col xs2 s6">.light-green-a200</div>
        </div>
        <div class="row light-green-a400">
            <div class="col xs2 s6">$light-green-a400</div>
            <div class="col xs2 s6">#76FF03</div>
            <div class="col xs2 s6">.light-green-a400-text</div>
            <div class="col xs2 s6">.light-green-a400</div>
        </div>
        <div class="row light-green-a700">
            <div class="col xs2 s6">$light-green-a700</div>
            <div class="col xs2 s6">#64DD17</div>
            <div class="col xs2 s6">.light-green-a700-text</div>
            <div class="col xs2 s6">.light-green-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 lime-text">Lime</h3>
        <div class="row lime">
            <div class="col xs2 s6">$lime</div>
            <div class="col xs2 s6">#CDDC39</div>
            <div class="col xs2 s6">.lime-text</div>
            <div class="col xs2 s6">.lime</div>
        </div>
        <div class="row lime-50">
            <div class="col xs2 s6">$lime-50</div>
            <div class="col xs2 s6">#F9FBE7</div>
            <div class="col xs2 s6">.lime-50-text</div>
            <div class="col xs2 s6">.lime-50</div>
        </div>
        <div class="row lime-100">
            <div class="col xs2 s6">$lime-100</div>
            <div class="col xs2 s6">#F0F4C3</div>
            <div class="col xs2 s6">.lime-100-text</div>
            <div class="col xs2 s6">.lime-100</div>
        </div>
        <div class="row lime-200">
            <div class="col xs2 s6">$lime-200</div>
            <div class="col xs2 s6">#E6EE9C</div>
            <div class="col xs2 s6">.lime-200-text</div>
            <div class="col xs2 s6">.lime-200</div>
        </div>
        <div class="row lime-300">
            <div class="col xs2 s6">$lime-300</div>
            <div class="col xs2 s6">#DCE775</div>
            <div class="col xs2 s6">.lime-300-text</div>
            <div class="col xs2 s6">.lime-300</div>
        </div>
        <div class="row lime-400">
            <div class="col xs2 s6">$lime-400</div>
            <div class="col xs2 s6">#D4E157</div>
            <div class="col xs2 s6">.lime-400-text</div>
            <div class="col xs2 s6">.lime-400</div>
        </div>
        <div class="row lime-500">
            <div class="col xs2 s6">$lime-500</div>
            <div class="col xs2 s6">#CDDC39</div>
            <div class="col xs2 s6">.lime-500-text</div>
            <div class="col xs2 s6">.lime-500</div>
        </div>
        <div class="row lime-600">
            <div class="col xs2 s6">$lime-600</div>
            <div class="col xs2 s6">#C0CA33</div>
            <div class="col xs2 s6">.lime-600-text</div>
            <div class="col xs2 s6">.lime-600</div>
        </div>
        <div class="row lime-700">
            <div class="col xs2 s6">$lime-700</div>
            <div class="col xs2 s6">#AFB42B</div>
            <div class="col xs2 s6">.lime-700-text</div>
            <div class="col xs2 s6">.lime-700</div>
        </div>
        <div class="row lime-800">
            <div class="col xs2 s6">$lime-800</div>
            <div class="col xs2 s6">#9E9D24</div>
            <div class="col xs2 s6">.lime-800-text</div>
            <div class="col xs2 s6">.lime-800</div>
        </div>
        <div class="row lime-900 white-text">
            <div class="col xs2 s6">$lime-900</div>
            <div class="col xs2 s6">#827717</div>
            <div class="col xs2 s6">.lime-900-text</div>
            <div class="col xs2 s6">.lime-900</div>
        </div>
        <div class="row lime-a100">
            <div class="col xs2 s6">$lime-a100</div>
            <div class="col xs2 s6">#F4FF81</div>
            <div class="col xs2 s6">.lime-a100-text</div>
            <div class="col xs2 s6">.lime-a100</div>
        </div>
        <div class="row lime-a200">
            <div class="col xs2 s6">$lime-a200</div>
            <div class="col xs2 s6">#EEFF41</div>
            <div class="col xs2 s6">.lime-a200-text</div>
            <div class="col xs2 s6">.lime-a200</div>
        </div>
        <div class="row lime-a400">
            <div class="col xs2 s6">$lime-a400</div>
            <div class="col xs2 s6">#C6FF00</div>
            <div class="col xs2 s6">.lime-a400-text</div>
            <div class="col xs2 s6">.lime-a400</div>
        </div>
        <div class="row lime-a700">
            <div class="col xs2 s6">$lime-a700</div>
            <div class="col xs2 s6">#AEEA00</div>
            <div class="col xs2 s6">.lime-a700-text</div>
            <div class="col xs2 s6">.lime-a700</div>
        </div>
    </div>
</section>
<section class="row">
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 yellow-text">Yellow</h3>
        <div class="row yellow">
            <div class="col xs2 s6">$yellow</div>
            <div class="col xs2 s6">#FFEB3B</div>
            <div class="col xs2 s6">.yellow-text</div>
            <div class="col xs2 s6">.yellow</div>
        </div>
        <div class="row yellow-50">
            <div class="col xs2 s6">$yellow-50</div>
            <div class="col xs2 s6">#FFFDE7</div>
            <div class="col xs2 s6">.yellow-50-text</div>
            <div class="col xs2 s6">.yellow-50</div>
        </div>
        <div class="row yellow-100">
            <div class="col xs2 s6">$yellow-100</div>
            <div class="col xs2 s6">#FFF9C4</div>
            <div class="col xs2 s6">.yellow-100-text</div>
            <div class="col xs2 s6">.yellow-100</div>
        </div>
        <div class="row yellow-200">
            <div class="col xs2 s6">$yellow-200</div>
            <div class="col xs2 s6">#FFF59D</div>
            <div class="col xs2 s6">.yellow-200-text</div>
            <div class="col xs2 s6">.yellow-200</div>
        </div>
        <div class="row yellow-300">
            <div class="col xs2 s6">$yellow-300</div>
            <div class="col xs2 s6">#FFF176</div>
            <div class="col xs2 s6">.yellow-300-text</div>
            <div class="col xs2 s6">.yellow-300</div>
        </div>
        <div class="row yellow-400">
            <div class="col xs2 s6">$yellow-400</div>
            <div class="col xs2 s6">#FFEE58</div>
            <div class="col xs2 s6">.yellow-400-text</div>
            <div class="col xs2 s6">.yellow-400</div>
        </div>
        <div class="row yellow-500">
            <div class="col xs2 s6">$yellow-500</div>
            <div class="col xs2 s6">#FFEB3B</div>
            <div class="col xs2 s6">.yellow-500-text</div>
            <div class="col xs2 s6">.yellow-500</div>
        </div>
        <div class="row yellow-600">
            <div class="col xs2 s6">$yellow-600</div>
            <div class="col xs2 s6">#FDD835</div>
            <div class="col xs2 s6">.yellow-600-text</div>
            <div class="col xs2 s6">.yellow-600</div>
        </div>
        <div class="row yellow-700">
            <div class="col xs2 s6">$yellow-700</div>
            <div class="col xs2 s6">#FBC02D</div>
            <div class="col xs2 s6">.yellow-700-text</div>
            <div class="col xs2 s6">.yellow-700</div>
        </div>
        <div class="row yellow-800">
            <div class="col xs2 s6">$yellow-800</div>
            <div class="col xs2 s6">#F9A825</div>
            <div class="col xs2 s6">.yellow-800-text</div>
            <div class="col xs2 s6">.yellow-800</div>
        </div>
        <div class="row yellow-900">
            <div class="col xs2 s6">$yellow-900</div>
            <div class="col xs2 s6">#F57F17</div>
            <div class="col xs2 s6">.yellow-900-text</div>
            <div class="col xs2 s6">.yellow-900</div>
        </div>
        <div class="row yellow-a100">
            <div class="col xs2 s6">$yellow-a100</div>
            <div class="col xs2 s6">#FFFF8D</div>
            <div class="col xs2 s6">.yellow-a100-text</div>
            <div class="col xs2 s6">.yellow-a100</div>
        </div>
        <div class="row yellow-a200">
            <div class="col xs2 s6">$yellow-a200</div>
            <div class="col xs2 s6">#FFFF00</div>
            <div class="col xs2 s6">.yellow-a200-text</div>
            <div class="col xs2 s6">.yellow-a200</div>
        </div>
        <div class="row yellow-a400">
            <div class="col xs2 s6">$yellow-a400</div>
            <div class="col xs2 s6">#FFEA00</div>
            <div class="col xs2 s6">.yellow-a400-text</div>
            <div class="col xs2 s6">.yellow-a400</div>
        </div>
        <div class="row yellow-a700">
            <div class="col xs2 s6">$yellow-a700</div>
            <div class="col xs2 s6">#FFD600</div>
            <div class="col xs2 s6">.yellow-a700-text</div>
            <div class="col xs2 s6">.yellow-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 amber-text">Amber</h3>
        <div class="row amber">
            <div class="col xs2 s6">$amber</div>
            <div class="col xs2 s6">#FFC107</div>
            <div class="col xs2 s6">.amber-text</div>
            <div class="col xs2 s6">.amber</div>
        </div>
        <div class="row amber-50">
            <div class="col xs2 s6">$amber-50</div>
            <div class="col xs2 s6">#FFF8E1</div>
            <div class="col xs2 s6">.amber-50-text</div>
            <div class="col xs2 s6">.amber-50</div>
        </div>
        <div class="row amber-100">
            <div class="col xs2 s6">$amber-100</div>
            <div class="col xs2 s6">#FFECB3</div>
            <div class="col xs2 s6">.amber-100-text</div>
            <div class="col xs2 s6">.amber-100</div>
        </div>
        <div class="row amber-200">
            <div class="col xs2 s6">$amber-200</div>
            <div class="col xs2 s6">#FFE082</div>
            <div class="col xs2 s6">.amber-200-text</div>
            <div class="col xs2 s6">.amber-200</div>
        </div>
        <div class="row amber-300">
            <div class="col xs2 s6">$amber-300</div>
            <div class="col xs2 s6">#FFD54F</div>
            <div class="col xs2 s6">.amber-300-text</div>
            <div class="col xs2 s6">.amber-300</div>
        </div>
        <div class="row amber-400">
            <div class="col xs2 s6">$amber-400</div>
            <div class="col xs2 s6">#FFCA28</div>
            <div class="col xs2 s6">.amber-400-text</div>
            <div class="col xs2 s6">.amber-400</div>
        </div>
        <div class="row amber-500">
            <div class="col xs2 s6">$amber-500</div>
            <div class="col xs2 s6">#FFC107</div>
            <div class="col xs2 s6">.amber-500-text</div>
            <div class="col xs2 s6">.amber-500</div>
        </div>
        <div class="row amber-600">
            <div class="col xs2 s6">$amber-600</div>
            <div class="col xs2 s6">#FFB300</div>
            <div class="col xs2 s6">.amber-600-text</div>
            <div class="col xs2 s6">.amber-600</div>
        </div>
        <div class="row amber-700">
            <div class="col xs2 s6">$amber-700</div>
            <div class="col xs2 s6">#FFA000</div>
            <div class="col xs2 s6">.amber-700-text</div>
            <div class="col xs2 s6">.amber-700</div>
        </div>
        <div class="row amber-800">
            <div class="col xs2 s6">$amber-800</div>
            <div class="col xs2 s6">#FF8F00</div>
            <div class="col xs2 s6">.amber-800-text</div>
            <div class="col xs2 s6">.amber-800</div>
        </div>
        <div class="row amber-900">
            <div class="col xs2 s6">$amber-900</div>
            <div class="col xs2 s6">#FF6F00</div>
            <div class="col xs2 s6">.amber-900-text</div>
            <div class="col xs2 s6">.amber-900</div>
        </div>
        <div class="row amber-a100">
            <div class="col xs2 s6">$amber-a100</div>
            <div class="col xs2 s6">#FFE57F</div>
            <div class="col xs2 s6">.amber-a100-text</div>
            <div class="col xs2 s6">.amber-a100</div>
        </div>
        <div class="row amber-a200">
            <div class="col xs2 s6">$amber-a200</div>
            <div class="col xs2 s6">#FFD740</div>
            <div class="col xs2 s6">.amber-a200-text</div>
            <div class="col xs2 s6">.amber-a200</div>
        </div>
        <div class="row amber-a400">
            <div class="col xs2 s6">$amber-a400</div>
            <div class="col xs2 s6">#FFC400</div>
            <div class="col xs2 s6">.amber-a400-text</div>
            <div class="col xs2 s6">.amber-a400</div>
        </div>
        <div class="row amber-a700">
            <div class="col xs2 s6">$amber-a700</div>
            <div class="col xs2 s6">#FFAB00</div>
            <div class="col xs2 s6">.amber-a700-text</div>
            <div class="col xs2 s6">.amber-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 orange-text">Orange</h3>
        <div class="row orange">
            <div class="col xs2 s6">$orange</div>
            <div class="col xs2 s6">#FF9800</div>
            <div class="col xs2 s6">.orange-text</div>
            <div class="col xs2 s6">.orange</div>
        </div>
        <div class="row orange-50">
            <div class="col xs2 s6">$orange-50</div>
            <div class="col xs2 s6">#FFF3E0</div>
            <div class="col xs2 s6">.orange-50-text</div>
            <div class="col xs2 s6">.orange-50</div>
        </div>
        <div class="row orange-100">
            <div class="col xs2 s6">$orange-100</div>
            <div class="col xs2 s6">#FFE0B2</div>
            <div class="col xs2 s6">.orange-100-text</div>
            <div class="col xs2 s6">.orange-100</div>
        </div>
        <div class="row orange-200">
            <div class="col xs2 s6">$orange-200</div>
            <div class="col xs2 s6">#FFCC80</div>
            <div class="col xs2 s6">.orange-200-text</div>
            <div class="col xs2 s6">.orange-200</div>
        </div>
        <div class="row orange-300">
            <div class="col xs2 s6">$orange-300</div>
            <div class="col xs2 s6">#FFB74D</div>
            <div class="col xs2 s6">.orange-300-text</div>
            <div class="col xs2 s6">.orange-300</div>
        </div>
        <div class="row orange-400">
            <div class="col xs2 s6">$orange-400</div>
            <div class="col xs2 s6">#FFA726</div>
            <div class="col xs2 s6">.orange-400-text</div>
            <div class="col xs2 s6">.orange-400</div>
        </div>
        <div class="row orange-500">
            <div class="col xs2 s6">$orange-500</div>
            <div class="col xs2 s6">#FF9800</div>
            <div class="col xs2 s6">.orange-500-text</div>
            <div class="col xs2 s6">.orange-500</div>
        </div>
        <div class="row orange-600">
            <div class="col xs2 s6">$orange-600</div>
            <div class="col xs2 s6">#FB8C00</div>
            <div class="col xs2 s6">.orange-600-text</div>
            <div class="col xs2 s6">.orange-600</div>
        </div>
        <div class="row orange-700">
            <div class="col xs2 s6">$orange-700</div>
            <div class="col xs2 s6">#F57C00</div>
            <div class="col xs2 s6">.orange-700-text</div>
            <div class="col xs2 s6">.orange-700</div>
        </div>
        <div class="row orange-800 white-text">
            <div class="col xs2 s6">$orange-800</div>
            <div class="col xs2 s6">#EF6C00</div>
            <div class="col xs2 s6">.orange-800-text</div>
            <div class="col xs2 s6">.orange-800</div>
        </div>
        <div class="row orange-900 white-text">
            <div class="col xs2 s6">$orange-900</div>
            <div class="col xs2 s6">#E65100</div>
            <div class="col xs2 s6">.orange-900-text</div>
            <div class="col xs2 s6">.orange-900</div>
        </div>
        <div class="row orange-a100">
            <div class="col xs2 s6">$orange-a100</div>
            <div class="col xs2 s6">#FFD180</div>
            <div class="col xs2 s6">.orange-a100-text</div>
            <div class="col xs2 s6">.orange-a100</div>
        </div>
        <div class="row orange-a200">
            <div class="col xs2 s6">$orange-a200</div>
            <div class="col xs2 s6">#FFAB40</div>
            <div class="col xs2 s6">.orange-a200-text</div>
            <div class="col xs2 s6">.orange-a200</div>
        </div>
        <div class="row orange-a400">
            <div class="col xs2 s6">$orange-a400</div>
            <div class="col xs2 s6">#FF9100</div>
            <div class="col xs2 s6">.orange-a400-text</div>
            <div class="col xs2 s6">.orange-a400</div>
        </div>
        <div class="row orange-a700">
            <div class="col xs2 s6">$orange-a700</div>
            <div class="col xs2 s6">#FF6D00</div>
            <div class="col xs2 s6">.orange-a700-text</div>
            <div class="col xs2 s6">.orange-a700</div>
        </div>
    </div>
</section>
<section class="row">
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 deep-orange-text">Deep orange</h3>
        <div class="row deep-orange white-text">
            <div class="col xs2 s6">$deep-orange</div>
            <div class="col xs2 s6">#FF5722</div>
            <div class="col xs2 s6">.deep-orange-text</div>
            <div class="col xs2 s6">.deep-orange</div>
        </div>
        <div class="row deep-orange-50">
            <div class="col xs2 s6">$deep-orange-50</div>
            <div class="col xs2 s6">#FBE9E7</div>
            <div class="col xs2 s6">.deep-orange-50-text</div>
            <div class="col xs2 s6">.deep-orange-50</div>
        </div>
        <div class="row deep-orange-100">
            <div class="col xs2 s6">$deep-orange-100</div>
            <div class="col xs2 s6">#FFCCBC</div>
            <div class="col xs2 s6">.deep-orange-100-text</div>
            <div class="col xs2 s6">.deep-orange-100</div>
        </div>
        <div class="row deep-orange-200">
            <div class="col xs2 s6">$deep-orange-200</div>
            <div class="col xs2 s6">#FFAB91</div>
            <div class="col xs2 s6">.deep-orange-200-text</div>
            <div class="col xs2 s6">.deep-orange-200</div>
        </div>
        <div class="row deep-orange-300">
            <div class="col xs2 s6">$deep-orange-300</div>
            <div class="col xs2 s6">#FF8A65</div>
            <div class="col xs2 s6">.deep-orange-300-text</div>
            <div class="col xs2 s6">.deep-orange-300</div>
        </div>
        <div class="row deep-orange-400">
            <div class="col xs2 s6">$deep-orange-400</div>
            <div class="col xs2 s6">#FF7043</div>
            <div class="col xs2 s6">.deep-orange-400-text</div>
            <div class="col xs2 s6">.deep-orange-400</div>
        </div>
        <div class="row deep-orange-500 white-text">
            <div class="col xs2 s6">$deep-orange-500</div>
            <div class="col xs2 s6">#FF5722</div>
            <div class="col xs2 s6">.deep-orange-500-text</div>
            <div class="col xs2 s6">.deep-orange-500</div>
        </div>
        <div class="row deep-orange-600 white-text">
            <div class="col xs2 s6">$deep-orange-600</div>
            <div class="col xs2 s6">#F4511E</div>
            <div class="col xs2 s6">.deep-orange-600-text</div>
            <div class="col xs2 s6">.deep-orange-600</div>
        </div>
        <div class="row deep-orange-700 white-text">
            <div class="col xs2 s6">$deep-orange-700</div>
            <div class="col xs2 s6">#E64A19</div>
            <div class="col xs2 s6">.deep-orange-700-text</div>
            <div class="col xs2 s6">.deep-orange-700</div>
        </div>
        <div class="row deep-orange-800 white-text">
            <div class="col xs2 s6">$deep-orange-800</div>
            <div class="col xs2 s6">#D84315</div>
            <div class="col xs2 s6">.deep-orange-800-text</div>
            <div class="col xs2 s6">.deep-orange-800</div>
        </div>
        <div class="row deep-orange-900 white-text">
            <div class="col xs2 s6">$deep-orange-900</div>
            <div class="col xs2 s6">#BF360C</div>
            <div class="col xs2 s6">.deep-orange-900-text</div>
            <div class="col xs2 s6">.deep-orange-900</div>
        </div>
        <div class="row deep-orange-a100">
            <div class="col xs2 s6">$deep-orange-a100</div>
            <div class="col xs2 s6">#FF9E80</div>
            <div class="col xs2 s6">.deep-orange-a100-text</div>
            <div class="col xs2 s6">.deep-orange-a100</div>
        </div>
        <div class="row deep-orange-a200">
            <div class="col xs2 s6">$deep-orange-a200</div>
            <div class="col xs2 s6">#FF6E40</div>
            <div class="col xs2 s6">.deep-orange-a200-text</div>
            <div class="col xs2 s6">.deep-orange-a200</div>
        </div>
        <div class="row deep-orange-a400 white-text">
            <div class="col xs2 s6">$deep-orange-a400</div>
            <div class="col xs2 s6">#FF3D00</div>
            <div class="col xs2 s6">.deep-orange-a400-text</div>
            <div class="col xs2 s6">.deep-orange-a400</div>
        </div>
        <div class="row deep-orange-a700 white-text">
            <div class="col xs2 s6">$deep-orange-a700</div>
            <div class="col xs2 s6">#DD2C00</div>
            <div class="col xs2 s6">.deep-orange-a700-text</div>
            <div class="col xs2 s6">.deep-orange-a700</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 brown-text">Brown</h3>
        <div class="row brown white-text">
            <div class="col xs2 s6">$brown</div>
            <div class="col xs2 s6">#795548</div>
            <div class="col xs2 s6">.brown-text</div>
            <div class="col xs2 s6">.brown</div>
        </div>
        <div class="row brown-50">
            <div class="col xs2 s6">$brown-50</div>
            <div class="col xs2 s6">#EFEBE9</div>
            <div class="col xs2 s6">.brown-50-text</div>
            <div class="col xs2 s6">.brown-50</div>
        </div>
        <div class="row brown-100">
            <div class="col xs2 s6">$brown-100</div>
            <div class="col xs2 s6">#D7CCC8</div>
            <div class="col xs2 s6">.brown-100-text</div>
            <div class="col xs2 s6">.brown-100</div>
        </div>
        <div class="row brown-200">
            <div class="col xs2 s6">$brown-200</div>
            <div class="col xs2 s6">#BCAAA4</div>
            <div class="col xs2 s6">.brown-200-text</div>
            <div class="col xs2 s6">.brown-200</div>
        </div>
        <div class="row brown-300 white-text">
            <div class="col xs2 s6">$brown-300</div>
            <div class="col xs2 s6">#A1887F</div>
            <div class="col xs2 s6">.brown-300-text</div>
            <div class="col xs2 s6">.brown-300</div>
        </div>
        <div class="row brown-400 white-text">
            <div class="col xs2 s6">$brown-400</div>
            <div class="col xs2 s6">#8D6E63</div>
            <div class="col xs2 s6">.brown-400-text</div>
            <div class="col xs2 s6">.brown-400</div>
        </div>
        <div class="row brown-500 white-text">
            <div class="col xs2 s6">$brown-500</div>
            <div class="col xs2 s6">#795548</div>
            <div class="col xs2 s6">.brown-500-text</div>
            <div class="col xs2 s6">.brown-500</div>
        </div>
        <div class="row brown-600 white-text">
            <div class="col xs2 s6">$brown-600</div>
            <div class="col xs2 s6">#6D4C41</div>
            <div class="col xs2 s6">.brown-600-text</div>
            <div class="col xs2 s6">.brown-600</div>
        </div>
        <div class="row brown-700 white-text">
            <div class="col xs2 s6">$brown-700</div>
            <div class="col xs2 s6">#5D4037</div>
            <div class="col xs2 s6">.brown-700-text</div>
            <div class="col xs2 s6">.brown-700</div>
        </div>
        <div class="row brown-800 white-text">
            <div class="col xs2 s6">$brown-800</div>
            <div class="col xs2 s6">#4E342E</div>
            <div class="col xs2 s6">.brown-800-text</div>
            <div class="col xs2 s6">.brown-800</div>
        </div>
        <div class="row brown-900 white-text">
            <div class="col xs2 s6">$brown-900</div>
            <div class="col xs2 s6">#3E2723</div>
            <div class="col xs2 s6">.brown-900-text</div>
            <div class="col xs2 s6">.brown-900</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 grey-text">Grey</h3>
        <div class="row grey">
            <div class="col xs2 s6">$grey</div>
            <div class="col xs2 s6">#9E9E9E</div>
            <div class="col xs2 s6">.grey-text</div>
            <div class="col xs2 s6">.grey</div>
        </div>
        <div class="row grey-50">
            <div class="col xs2 s6">$grey-50</div>
            <div class="col xs2 s6">#FAFAFA</div>
            <div class="col xs2 s6">.grey-50-text</div>
            <div class="col xs2 s6">.grey-50</div>
        </div>
        <div class="row grey-100">
            <div class="col xs2 s6">$grey-100</div>
            <div class="col xs2 s6">#F5F5F5</div>
            <div class="col xs2 s6">.grey-100-text</div>
            <div class="col xs2 s6">.grey-100</div>
        </div>
        <div class="row grey-200">
            <div class="col xs2 s6">$grey-200</div>
            <div class="col xs2 s6">#EEEEEE</div>
            <div class="col xs2 s6">.grey-200-text</div>
            <div class="col xs2 s6">.grey-200</div>
        </div>
        <div class="row grey-300">
            <div class="col xs2 s6">$grey-300</div>
            <div class="col xs2 s6">#E0E0E0</div>
            <div class="col xs2 s6">.grey-300-text</div>
            <div class="col xs2 s6">.grey-300</div>
        </div>
        <div class="row grey-400">
            <div class="col xs2 s6">$grey-400</div>
            <div class="col xs2 s6">#BDBDBD</div>
            <div class="col xs2 s6">.grey-400-text</div>
            <div class="col xs2 s6">.grey-400</div>
        </div>
        <div class="row grey-500">
            <div class="col xs2 s6">$grey-500</div>
            <div class="col xs2 s6">#9E9E9E</div>
            <div class="col xs2 s6">.grey-500-text</div>
            <div class="col xs2 s6">.grey-500</div>
        </div>
        <div class="row grey-600 white-text">
            <div class="col xs2 s6">$grey-600</div>
            <div class="col xs2 s6">#757575</div>
            <div class="col xs2 s6">.grey-600-text</div>
            <div class="col xs2 s6">.grey-600</div>
        </div>
        <div class="row grey-700 white-text">
            <div class="col xs2 s6">$grey-700</div>
            <div class="col xs2 s6">#616161</div>
            <div class="col xs2 s6">.grey-700-text</div>
            <div class="col xs2 s6">.grey-700</div>
        </div>
        <div class="row grey-800 white-text">
            <div class="col xs2 s6">$grey-800</div>
            <div class="col xs2 s6">#424242</div>
            <div class="col xs2 s6">.grey-800-text</div>
            <div class="col xs2 s6">.grey-800</div>
        </div>
        <div class="row grey-900 white-text">
            <div class="col xs2 s6">$grey-900</div>
            <div class="col xs2 s6">#212121</div>
            <div class="col xs2 s6">.grey-900-text</div>
            <div class="col xs2 s6">.grey-900</div>
        </div>
    </div>
</section>
<section class="row">
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 blue-grey-text">Blue grey</h3>
        <div class="row blue-grey white-text">
            <div class="col xs2 s6">$blue-grey</div>
            <div class="col xs2 s6">#607D8B</div>
            <div class="col xs2 s6">.blue-grey-text</div>
            <div class="col xs2 s6">.blue-grey</div>
        </div>
        <div class="row blue-grey-50">
            <div class="col xs2 s6">$blue-grey-50</div>
            <div class="col xs2 s6">#ECEFF1</div>
            <div class="col xs2 s6">.blue-grey-50-text</div>
            <div class="col xs2 s6">.blue-grey-50</div>
        </div>
        <div class="row blue-grey-100">
            <div class="col xs2 s6">$blue-grey-100</div>
            <div class="col xs2 s6">#CFD8DC</div>
            <div class="col xs2 s6">.blue-grey-100-text</div>
            <div class="col xs2 s6">.blue-grey-100</div>
        </div>
        <div class="row blue-grey-200">
            <div class="col xs2 s6">$blue-grey-200</div>
            <div class="col xs2 s6">#B0BEC5</div>
            <div class="col xs2 s6">.blue-grey-200-text</div>
            <div class="col xs2 s6">.blue-grey-200</div>
        </div>
        <div class="row blue-grey-300">
            <div class="col xs2 s6">$blue-grey-300</div>
            <div class="col xs2 s6">#90A4AE</div>
            <div class="col xs2 s6">.blue-grey-300-text</div>
            <div class="col xs2 s6">.blue-grey-300</div>
        </div>
        <div class="row blue-grey-400 white-text">
            <div class="col xs2 s6">$blue-grey-400</div>
            <div class="col xs2 s6">#78909C</div>
            <div class="col xs2 s6">.blue-grey-400-text</div>
            <div class="col xs2 s6">.blue-grey-400</div>
        </div>
        <div class="row blue-grey-500 white-text">
            <div class="col xs2 s6">$blue-grey-500</div>
            <div class="col xs2 s6">#607D8B</div>
            <div class="col xs2 s6">.blue-grey-500-text</div>
            <div class="col xs2 s6">.blue-grey-500</div>
        </div>
        <div class="row blue-grey-600 white-text">
            <div class="col xs2 s6">$blue-grey-600</div>
            <div class="col xs2 s6">#546E7A</div>
            <div class="col xs2 s6">.blue-grey-600-text</div>
            <div class="col xs2 s6">.blue-grey-600</div>
        </div>
        <div class="row blue-grey-700 white-text">
            <div class="col xs2 s6">$blue-grey-700</div>
            <div class="col xs2 s6">#455A64</div>
            <div class="col xs2 s6">.blue-grey-700-text</div>
            <div class="col xs2 s6">.blue-grey-700</div>
        </div>
        <div class="row blue-grey-800 white-text">
            <div class="col xs2 s6">$blue-grey-800</div>
            <div class="col xs2 s6">#37474F</div>
            <div class="col xs2 s6">.blue-grey-800-text</div>
            <div class="col xs2 s6">.blue-grey-800</div>
        </div>
        <div class="row blue-grey-900 white-text">
            <div class="col xs2 s6">$blue-grey-900</div>
            <div class="col xs2 s6">#263238</div>
            <div class="col xs2 s6">.blue-grey-900-text</div>
            <div class="col xs2 s6">.blue-grey-900</div>
        </div>
    </div>
    <div class="col xs4 s12 m4">
        <h3 class="col xs4 s12 black-text">Shade</h3>
        <div class="row black white-text">
            <div class="col xs2 s6">$black</div>
            <div class="col xs2 s6">#000000</div>
            <div class="col xs2 s6">.black-text</div>
            <div class="col xs2 s6">.black</div>
        </div>
        <div class="row white">
            <div class="col xs2 s6">$white</div>
            <div class="col xs2 s6">#FFFFFF</div>
            <div class="col xs2 s6">.white-text</div>
            <div class="col xs2 s6">.white</div>
        </div>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';