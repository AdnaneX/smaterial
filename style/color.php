<?php
$title = 'Color';
$description = 'Colors swatches based on Google\'s Material Design. How to use Material Design colors in your website. How to use different themes';
$keywords = 'color, swatches, material colors, theme, black light theme';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="sc-row">
    <h2 class="sc-col sc-xs4 sc-s12">Color usage</h2>

    <p class="sc-col sc-xs4 sc-s12 sc-m6">
        All of the below colors are used in the same way.
        Both SCSS variables and css classes and color codes are named.
    </p>

    <p class="sc-col sc-xs4 sc-s12 sc-m6">
        You can easily change the colors you use. In the settings you can remove all colors you don't use <strong>NOTE*</strong>
        that you need to recompile with SCSS.
        In SCSS the variables for each color will remain accessible. Therefore it's recommended to remove each color
        when using SCSS unless you need to use a class in HTML.
    </p>
</section>

<section class="sc-row">
    <h3 class="sc-col sc-xs4">Theme</h3>

    <p class="sc-col sc-xs2">
        With SMaterial and SCSS you're also able to choose between a light and dark theme.
        You can define the theme in the <strong>_settings.scss</strong> file or by overwriting the <code class="language-css">$theme</code> variable.
        The variable can either be light or dark.
    </p>

    <pre class="language-css sc-col sc-xs4 sc-s12 sc-m6">
		<code>
$theme: light;
$theme: dark;
		</code>
</section>

<section class="sc-row">
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-red-text">Red</h3>
        <div class="sc-row sc-red sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red</div>
            <div class="sc-col sc-xs2 sc-s6">#F44336</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red</div>
        </div>
        <div class="sc-row sc-red-50">
            <div class="sc-col sc-xs2 sc-s6">$red-50</div>
            <div class="sc-col sc-xs2 sc-s6">#FFEBEE</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-50</div>
        </div>
        <div class="sc-row sc-red-100">
            <div class="sc-col sc-xs2 sc-s6">$red-100</div>
            <div class="sc-col sc-xs2 sc-s6">#FFCDD2</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-100</div>
        </div>
        <div class="sc-row sc-red-200">
            <div class="sc-col sc-xs2 sc-s6">$red-200</div>
            <div class="sc-col sc-xs2 sc-s6">#EF9A9A</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-200</div>
        </div>
        <div class="sc-row sc-red-300">
            <div class="sc-col sc-xs2 sc-s6">$red-300</div>
            <div class="sc-col sc-xs2 sc-s6">#E57373</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-300</div>
        </div>
        <div class="sc-row sc-red-400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-400</div>
            <div class="sc-col sc-xs2 sc-s6">#EF5350</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-400</div>
        </div>
        <div class="sc-row sc-red-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-500</div>
            <div class="sc-col sc-xs2 sc-s6">#F44336</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-500</div>
        </div>
        <div class="sc-row sc-red-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-600</div>
            <div class="sc-col sc-xs2 sc-s6">#E53935</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-600</div>
        </div>
        <div class="sc-row sc-red-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-700</div>
            <div class="sc-col sc-xs2 sc-s6">#D32F2F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-700</div>
        </div>
        <div class="sc-row sc-red-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-800</div>
            <div class="sc-col sc-xs2 sc-s6">#C62828</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-800</div>
        </div>
        <div class="sc-row sc-red-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-900</div>
            <div class="sc-col sc-xs2 sc-s6">#B71C1C</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-900</div>
        </div>
        <div class="sc-row sc-red-a100">
            <div class="sc-col sc-xs2 sc-s6">$red-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#FF8A80</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-a100</div>
        </div>
        <div class="sc-row sc-red-a200 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#FF8A80</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-a200</div>
        </div>
        <div class="sc-row sc-red-a400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#FF1744</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-a400</div>
        </div>
        <div class="sc-row sc-red-a700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$red-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#D50000</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-red-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-pink-text">Pink</h3>
        <div class="sc-row sc-pink sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink</div>
            <div class="sc-col sc-xs2 sc-s6">#E91E63</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink</div>
        </div>
        <div class="sc-row sc-pink-50">
            <div class="sc-col sc-xs2 sc-s6">$pink-50</div>
            <div class="sc-col sc-xs2 sc-s6">#FCE4EC</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-50</div>
        </div>
        <div class="sc-row sc-pink-100">
            <div class="sc-col sc-xs2 sc-s6">$pink-100</div>
            <div class="sc-col sc-xs2 sc-s6">#F8BBD0</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-100</div>
        </div>
        <div class="sc-row sc-pink-200">
            <div class="sc-col sc-xs2 sc-s6">$pink-200</div>
            <div class="sc-col sc-xs2 sc-s6">#F48FB1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-200</div>
        </div>
        <div class="sc-row sc-pink-300 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-300</div>
            <div class="sc-col sc-xs2 sc-s6">#F06292</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-300</div>
        </div>
        <div class="sc-row sc-pink-400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-400</div>
            <div class="sc-col sc-xs2 sc-s6">#EC407A</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-400</div>
        </div>
        <div class="sc-row sc-pink-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-500</div>
            <div class="sc-col sc-xs2 sc-s6">#E91E63</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-500</div>
        </div>
        <div class="sc-row sc-pink-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-600</div>
            <div class="sc-col sc-xs2 sc-s6">#D81B60</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-600</div>
        </div>
        <div class="sc-row sc-pink-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-700</div>
            <div class="sc-col sc-xs2 sc-s6">#C2185B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-700</div>
        </div>
        <div class="sc-row sc-pink-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-800</div>
            <div class="sc-col sc-xs2 sc-s6">#AD1457</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-800</div>
        </div>
        <div class="sc-row sc-pink-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-900</div>
            <div class="sc-col sc-xs2 sc-s6">#880E4F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-900</div>
        </div>
        <div class="sc-row sc-pink-a100">
            <div class="sc-col sc-xs2 sc-s6">$pink-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#FF80AB</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-a100</div>
        </div>
        <div class="sc-row sc-pink-a200 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#FF4081</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-a200</div>
        </div>
        <div class="sc-row sc-pink-a400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#F50057</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-a400</div>
        </div>
        <div class="sc-row sc-pink-a700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$pink-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#C51162</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-pink-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-purple-text">Purple</h3>
        <div class="sc-row sc-purple sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple</div>
            <div class="sc-col sc-xs2 sc-s6">#9C27B0</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple</div>
        </div>
        <div class="sc-row sc-purple-50">
            <div class="sc-col sc-xs2 sc-s6">$purple-50</div>
            <div class="sc-col sc-xs2 sc-s6">#F3E5F5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-50</div>
        </div>
        <div class="sc-row sc-purple-100">
            <div class="sc-col sc-xs2 sc-s6">$purple-100</div>
            <div class="sc-col sc-xs2 sc-s6">#E1BEE7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-100</div>
        </div>
        <div class="sc-row sc-purple-200">
            <div class="sc-col sc-xs2 sc-s6">$purple-200</div>
            <div class="sc-col sc-xs2 sc-s6">#CE93D8</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-200</div>
        </div>
        <div class="sc-row sc-purple-300 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-300</div>
            <div class="sc-col sc-xs2 sc-s6">#BA68C8</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-300</div>
        </div>
        <div class="sc-row sc-purple-400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-400</div>
            <div class="sc-col sc-xs2 sc-s6">#AB47BC</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-400</div>
        </div>
        <div class="sc-row sc-purple-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-500</div>
            <div class="sc-col sc-xs2 sc-s6">#9C27B0</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-500</div>
        </div>
        <div class="sc-row sc-purple-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-600</div>
            <div class="sc-col sc-xs2 sc-s6">#8E24AA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-600</div>
        </div>
        <div class="sc-row sc-purple-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-700</div>
            <div class="sc-col sc-xs2 sc-s6">#7B1FA2</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-700</div>
        </div>
        <div class="sc-row sc-purple-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-800</div>
            <div class="sc-col sc-xs2 sc-s6">#6A1B9A</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-800</div>
        </div>
        <div class="sc-row sc-purple-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-900</div>
            <div class="sc-col sc-xs2 sc-s6">#4A148C</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-900</div>
        </div>
        <div class="sc-row sc-purple-a100">
            <div class="sc-col sc-xs2 sc-s6">$purple-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#EA80FC</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-a100</div>
        </div>
        <div class="sc-row sc-purple-a200 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#E040FB</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-a200</div>
        </div>
        <div class="sc-row sc-purple-a400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#D500F9</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-a400</div>
        </div>
        <div class="sc-row sc-purple-a700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$purple-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#AA00FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-purple-a700</div>
        </div>
    </div>
</section>
<section class="sc-row">
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-deep-purple-text">Deep purple</h3>
        <div class="sc-row sc-deep-purple sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple</div>
            <div class="sc-col sc-xs2 sc-s6">#673AB7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple</div>
        </div>
        <div class="sc-row sc-deep-purple-50">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-50</div>
            <div class="sc-col sc-xs2 sc-s6">#EDE7F6</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-50</div>
        </div>
        <div class="sc-row sc-deep-purple-100">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-100</div>
            <div class="sc-col sc-xs2 sc-s6">#D1C4E9</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-100</div>
        </div>
        <div class="sc-row sc-deep-purple-200">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-200</div>
            <div class="sc-col sc-xs2 sc-s6">#B39DDB</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-200</div>
        </div>
        <div class="sc-row sc-deep-purple-300 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-300</div>
            <div class="sc-col sc-xs2 sc-s6">#9575CD</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-300</div>
        </div>
        <div class="sc-row sc-deep-purple-400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-400</div>
            <div class="sc-col sc-xs2 sc-s6">#7E57C2</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-400</div>
        </div>
        <div class="sc-row sc-deep-purple-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-500</div>
            <div class="sc-col sc-xs2 sc-s6">#673AB7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-500</div>
        </div>
        <div class="sc-row sc-deep-purple-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-600</div>
            <div class="sc-col sc-xs2 sc-s6">#5E35B1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-600</div>
        </div>
        <div class="sc-row sc-deep-purple-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-700</div>
            <div class="sc-col sc-xs2 sc-s6">#512DA8</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-700</div>
        </div>
        <div class="sc-row sc-deep-purple-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-800</div>
            <div class="sc-col sc-xs2 sc-s6">#4527A0</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-800</div>
        </div>
        <div class="sc-row sc-deep-purple-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-900</div>
            <div class="sc-col sc-xs2 sc-s6">#311B92</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-900</div>
        </div>
        <div class="sc-row sc-deep-purple-a100">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#B388FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-a100</div>
        </div>
        <div class="sc-row sc-deep-purple-a200 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#7C4DFF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-a200</div>
        </div>
        <div class="sc-row sc-deep-purple-a400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#651FFF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-a400</div>
        </div>
        <div class="sc-row sc-deep-purple-a700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-purple-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#6200EA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-purple-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-indigo-text">Indigo</h3>
        <div class="sc-row sc-indigo sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo</div>
            <div class="sc-col sc-xs2 sc-s6">#3F51B5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo</div>
        </div>
        <div class="sc-row sc-indigo-50">
            <div class="sc-col sc-xs2 sc-s6">$indigo-50</div>
            <div class="sc-col sc-xs2 sc-s6">#E8EAF6</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-50</div>
        </div>
        <div class="sc-row sc-indigo-100">
            <div class="sc-col sc-xs2 sc-s6">$indigo-100</div>
            <div class="sc-col sc-xs2 sc-s6">#C5CAE9</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-100</div>
        </div>
        <div class="sc-row sc-indigo-200">
            <div class="sc-col sc-xs2 sc-s6">$indigo-200</div>
            <div class="sc-col sc-xs2 sc-s6">#9FA8DA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-200</div>
        </div>
        <div class="sc-row sc-indigo-300 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-300</div>
            <div class="sc-col sc-xs2 sc-s6">#7986CB</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-300</div>
        </div>
        <div class="sc-row sc-indigo-400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-400</div>
            <div class="sc-col sc-xs2 sc-s6">#5C6BC0</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-400</div>
        </div>
        <div class="sc-row sc-indigo-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-500</div>
            <div class="sc-col sc-xs2 sc-s6">#3F51B5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-500</div>
        </div>
        <div class="sc-row sc-indigo-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-600</div>
            <div class="sc-col sc-xs2 sc-s6">#3949AB</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-600</div>
        </div>
        <div class="sc-row sc-indigo-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-700</div>
            <div class="sc-col sc-xs2 sc-s6">#303F9F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-700</div>
        </div>
        <div class="sc-row sc-indigo-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-800</div>
            <div class="sc-col sc-xs2 sc-s6">#283593</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-800</div>
        </div>
        <div class="sc-row sc-indigo-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-900</div>
            <div class="sc-col sc-xs2 sc-s6">#1A237E</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-900</div>
        </div>
        <div class="sc-row sc-indigo-a100">
            <div class="sc-col sc-xs2 sc-s6">$indigo-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#8C9EFF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-a100</div>
        </div>
        <div class="sc-row sc-indigo-a200 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#536DFE</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-a200</div>
        </div>
        <div class="sc-row sc-indigo-a400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#3D5AFE</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-a400</div>
        </div>
        <div class="sc-row sc-indigo-a700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$indigo-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#304FFE</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-indigo-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-blue-text">Blue</h3>
        <div class="sc-row sc-blue sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue</div>
            <div class="sc-col sc-xs2 sc-s6">#2196F3</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue</div>
        </div>
        <div class="sc-row sc-blue-50">
            <div class="sc-col sc-xs2 sc-s6">$blue-50</div>
            <div class="sc-col sc-xs2 sc-s6">#E3F2FD</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-50</div>
        </div>
        <div class="sc-row sc-blue-100">
            <div class="sc-col sc-xs2 sc-s6">$blue-100</div>
            <div class="sc-col sc-xs2 sc-s6">#BBDEFB</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-100</div>
        </div>
        <div class="sc-row sc-blue-200">
            <div class="sc-col sc-xs2 sc-s6">$blue-200</div>
            <div class="sc-col sc-xs2 sc-s6">#90CAF9</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-200</div>
        </div>
        <div class="sc-row sc-blue-300">
            <div class="sc-col sc-xs2 sc-s6">$blue-300</div>
            <div class="sc-col sc-xs2 sc-s6">#64B5F6</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-300</div>
        </div>
        <div class="sc-row sc-blue-400">
            <div class="sc-col sc-xs2 sc-s6">$blue-400</div>
            <div class="sc-col sc-xs2 sc-s6">#42A5F5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-400</div>
        </div>
        <div class="sc-row sc-blue-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-500</div>
            <div class="sc-col sc-xs2 sc-s6">#2196F3</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-500</div>
        </div>
        <div class="sc-row sc-blue-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-600</div>
            <div class="sc-col sc-xs2 sc-s6">#1E88E5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-600</div>
        </div>
        <div class="sc-row sc-blue-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-700</div>
            <div class="sc-col sc-xs2 sc-s6">#1976D2</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-700</div>
        </div>
        <div class="sc-row sc-blue-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-800</div>
            <div class="sc-col sc-xs2 sc-s6">#1565C0</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-800</div>
        </div>
        <div class="sc-row sc-blue-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-900</div>
            <div class="sc-col sc-xs2 sc-s6">#0D47A1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-900</div>
        </div>
        <div class="sc-row sc-blue-a100">
            <div class="sc-col sc-xs2 sc-s6">$blue-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#82B1FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-a100</div>
        </div>
        <div class="sc-row sc-blue-a200 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#448AFF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-a200</div>
        </div>
        <div class="sc-row sc-blue-a400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#2979FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-a400</div>
        </div>
        <div class="sc-row sc-blue-a700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#2962FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-a700</div>
        </div>
    </div>
</section>
<section class="sc-row">
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-light-blue-text">Light blue</h3>
        <div class="sc-row sc-light-blue">
            <div class="sc-col sc-xs2 sc-s6">$light-blue</div>
            <div class="sc-col sc-xs2 sc-s6">#03A9F4</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue</div>
        </div>
        <div class="sc-row sc-light-blue-50">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-50</div>
            <div class="sc-col sc-xs2 sc-s6">#E1F5FE</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-50</div>
        </div>
        <div class="sc-row sc-light-blue-100">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-100</div>
            <div class="sc-col sc-xs2 sc-s6">#B3E5FC</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-100</div>
        </div>
        <div class="sc-row sc-light-blue-200">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-200</div>
            <div class="sc-col sc-xs2 sc-s6">#81D4FA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-200</div>
        </div>
        <div class="sc-row sc-light-blue-300">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-300</div>
            <div class="sc-col sc-xs2 sc-s6">#4FC3F7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-300</div>
        </div>
        <div class="sc-row sc-light-blue-400">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-400</div>
            <div class="sc-col sc-xs2 sc-s6">#29B6F6</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-400</div>
        </div>
        <div class="sc-row sc-light-blue-500">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-500</div>
            <div class="sc-col sc-xs2 sc-s6">#03A9F4</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-500</div>
        </div>
        <div class="sc-row sc-light-blue-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-600</div>
            <div class="sc-col sc-xs2 sc-s6">#039BE5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-600</div>
        </div>
        <div class="sc-row sc-light-blue-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-700</div>
            <div class="sc-col sc-xs2 sc-s6">#0288D1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-700</div>
        </div>
        <div class="sc-row sc-light-blue-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-800</div>
            <div class="sc-col sc-xs2 sc-s6">#0277BD</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-800</div>
        </div>
        <div class="sc-row sc-light-blue-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-900</div>
            <div class="sc-col sc-xs2 sc-s6">#01579B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-900</div>
        </div>
        <div class="sc-row sc-light-blue-a100">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#80D8FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-a100</div>
        </div>
        <div class="sc-row sc-light-blue-a200">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#40C4FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-a200</div>
        </div>
        <div class="sc-row sc-light-blue-a400">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#00B0FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-a400</div>
        </div>
        <div class="sc-row sc-light-blue-a700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$light-blue-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#0091EA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-blue-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-cyan-text">Cyan</h3>
        <div class="sc-row sc-cyan">
            <div class="sc-col sc-xs2 sc-s6">$cyan</div>
            <div class="sc-col sc-xs2 sc-s6">#00BCD4</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan</div>
        </div>
        <div class="sc-row sc-cyan-50">
            <div class="sc-col sc-xs2 sc-s6">$cyan-50</div>
            <div class="sc-col sc-xs2 sc-s6">#E0F7FA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-50</div>
        </div>
        <div class="sc-row sc-cyan-100">
            <div class="sc-col sc-xs2 sc-s6">$cyan-100</div>
            <div class="sc-col sc-xs2 sc-s6">#B2EBF2</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-100</div>
        </div>
        <div class="sc-row sc-cyan-200">
            <div class="sc-col sc-xs2 sc-s6">$cyan-200</div>
            <div class="sc-col sc-xs2 sc-s6">#80DEEA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-200</div>
        </div>
        <div class="sc-row sc-cyan-300">
            <div class="sc-col sc-xs2 sc-s6">$cyan-300</div>
            <div class="sc-col sc-xs2 sc-s6">#4DD0E1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-300</div>
        </div>
        <div class="sc-row sc-cyan-400">
            <div class="sc-col sc-xs2 sc-s6">$cyan-400</div>
            <div class="sc-col sc-xs2 sc-s6">#26C6DA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-400</div>
        </div>
        <div class="sc-row sc-cyan-500">
            <div class="sc-col sc-xs2 sc-s6">$cyan-500</div>
            <div class="sc-col sc-xs2 sc-s6">#00BCD4</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-500</div>
        </div>
        <div class="sc-row sc-cyan-600">
            <div class="sc-col sc-xs2 sc-s6">$cyan-600</div>
            <div class="sc-col sc-xs2 sc-s6">#00ACC1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-600</div>
        </div>
        <div class="sc-row sc-cyan-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$cyan-700</div>
            <div class="sc-col sc-xs2 sc-s6">#0097A7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-700</div>
        </div>
        <div class="sc-row sc-cyan-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$cyan-800</div>
            <div class="sc-col sc-xs2 sc-s6">#00838F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-800</div>
        </div>
        <div class="sc-row sc-cyan-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$cyan-900</div>
            <div class="sc-col sc-xs2 sc-s6">#006064</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-900</div>
        </div>
        <div class="sc-row sc-cyan-a100">
            <div class="sc-col sc-xs2 sc-s6">$cyan-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#84FFFF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-a100</div>
        </div>
        <div class="sc-row sc-cyan-a200">
            <div class="sc-col sc-xs2 sc-s6">$cyan-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#18FFFF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-a200</div>
        </div>
        <div class="sc-row sc-cyan-a400">
            <div class="sc-col sc-xs2 sc-s6">$cyan-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#00E5FF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-a400</div>
        </div>
        <div class="sc-row sc-cyan-a700">
            <div class="sc-col sc-xs2 sc-s6">$cyan-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#00B8D4</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-cyan-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-teal-text">Teal</h3>
        <div class="sc-row sc-teal sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$teal</div>
            <div class="sc-col sc-xs2 sc-s6">#009688</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal</div>
        </div>
        <div class="sc-row sc-teal-50">
            <div class="sc-col sc-xs2 sc-s6">$teal-50</div>
            <div class="sc-col sc-xs2 sc-s6">#E0F2F1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-50</div>
        </div>
        <div class="sc-row sc-teal-100">
            <div class="sc-col sc-xs2 sc-s6">$teal-100</div>
            <div class="sc-col sc-xs2 sc-s6">#B2DFDB</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-100</div>
        </div>
        <div class="sc-row sc-teal-200">
            <div class="sc-col sc-xs2 sc-s6">$teal-200</div>
            <div class="sc-col sc-xs2 sc-s6">#80CBC4</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-200</div>
        </div>
        <div class="sc-row sc-teal-300">
            <div class="sc-col sc-xs2 sc-s6">$teal-300</div>
            <div class="sc-col sc-xs2 sc-s6">#4DB6AC</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-300</div>
        </div>
        <div class="sc-row sc-teal-400">
            <div class="sc-col sc-xs2 sc-s6">$teal-400</div>
            <div class="sc-col sc-xs2 sc-s6">#26A69A</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-400</div>
        </div>
        <div class="sc-row sc-teal-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$teal-500</div>
            <div class="sc-col sc-xs2 sc-s6">#009688</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-500</div>
        </div>
        <div class="sc-row sc-teal-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$teal-600</div>
            <div class="sc-col sc-xs2 sc-s6">#00897B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-600</div>
        </div>
        <div class="sc-row sc-teal-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$teal-700</div>
            <div class="sc-col sc-xs2 sc-s6">#00796B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-700</div>
        </div>
        <div class="sc-row sc-teal-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$teal-800</div>
            <div class="sc-col sc-xs2 sc-s6">#00695C</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-800</div>
        </div>
        <div class="sc-row sc-teal-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$teal-900</div>
            <div class="sc-col sc-xs2 sc-s6">#004D40</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-900</div>
        </div>
        <div class="sc-row sc-teal-a100">
            <div class="sc-col sc-xs2 sc-s6">$teal-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#A7FFEB</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-a100</div>
        </div>
        <div class="sc-row sc-teal-a200">
            <div class="sc-col sc-xs2 sc-s6">$teal-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#64FFDA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-a200</div>
        </div>
        <div class="sc-row sc-teal-a400">
            <div class="sc-col sc-xs2 sc-s6">$teal-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#1DE9B6</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-a400</div>
        </div>
        <div class="sc-row sc-teal-a700">
            <div class="sc-col sc-xs2 sc-s6">$teal-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#00BFA5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-teal-a700</div>
        </div>
    </div>
</section>
<section class="sc-row">
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-green-text">Green</h3>
        <div class="sc-row sc-green">
            <div class="sc-col sc-xs2 sc-s6">$green</div>
            <div class="sc-col sc-xs2 sc-s6">#4CAF50</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green</div>
        </div>
        <div class="sc-row sc-green-50">
            <div class="sc-col sc-xs2 sc-s6">$green-50</div>
            <div class="sc-col sc-xs2 sc-s6">#E8F5E9</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-50</div>
        </div>
        <div class="sc-row sc-green-100">
            <div class="sc-col sc-xs2 sc-s6">$green-100</div>
            <div class="sc-col sc-xs2 sc-s6">#C8E6C9</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-100</div>
        </div>
        <div class="sc-row sc-green-200">
            <div class="sc-col sc-xs2 sc-s6">$green-200</div>
            <div class="sc-col sc-xs2 sc-s6">#A5D6A7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-200</div>
        </div>
        <div class="sc-row sc-green-300">
            <div class="sc-col sc-xs2 sc-s6">$green-300</div>
            <div class="sc-col sc-xs2 sc-s6">#81C784</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-300</div>
        </div>
        <div class="sc-row sc-green-400">
            <div class="sc-col sc-xs2 sc-s6">$green-400</div>
            <div class="sc-col sc-xs2 sc-s6">#66BB6A</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-400</div>
        </div>
        <div class="sc-row sc-green-500">
            <div class="sc-col sc-xs2 sc-s6">$green-500</div>
            <div class="sc-col sc-xs2 sc-s6">#4CAF50</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-500</div>
        </div>
        <div class="sc-row sc-green-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$green-600</div>
            <div class="sc-col sc-xs2 sc-s6">#43A047</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-600</div>
        </div>
        <div class="sc-row sc-green-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$green-700</div>
            <div class="sc-col sc-xs2 sc-s6">#388E3C</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-700</div>
        </div>
        <div class="sc-row sc-green-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$green-800</div>
            <div class="sc-col sc-xs2 sc-s6">#2E7D32</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-800</div>
        </div>
        <div class="sc-row sc-green-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$green-900</div>
            <div class="sc-col sc-xs2 sc-s6">#1B5E20</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-900</div>
        </div>
        <div class="sc-row sc-green-a100">
            <div class="sc-col sc-xs2 sc-s6">$green-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#B9F6CA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-a100</div>
        </div>
        <div class="sc-row sc-green-a200">
            <div class="sc-col sc-xs2 sc-s6">$green-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#64FFDA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-a200</div>
        </div>
        <div class="sc-row sc-green-a400">
            <div class="sc-col sc-xs2 sc-s6">$green-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#00E676</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-a400</div>
        </div>
        <div class="sc-row sc-green-a700">
            <div class="sc-col sc-xs2 sc-s6">$green-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#00C853</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-green-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-light-green-text">Light green</h3>
        <div class="sc-row sc-light-green">
            <div class="sc-col sc-xs2 sc-s6">$light-green</div>
            <div class="sc-col sc-xs2 sc-s6">#8BC34A</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green</div>
        </div>
        <div class="sc-row sc-light-green-50">
            <div class="sc-col sc-xs2 sc-s6">$light-green-50</div>
            <div class="sc-col sc-xs2 sc-s6">#F1F8E9</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-50</div>
        </div>
        <div class="sc-row sc-light-green-100">
            <div class="sc-col sc-xs2 sc-s6">$light-green-100</div>
            <div class="sc-col sc-xs2 sc-s6">#DCEDC8</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-100</div>
        </div>
        <div class="sc-row sc-light-green-200">
            <div class="sc-col sc-xs2 sc-s6">$light-green-200</div>
            <div class="sc-col sc-xs2 sc-s6">#C5E1A5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-200</div>
        </div>
        <div class="sc-row sc-light-green-300">
            <div class="sc-col sc-xs2 sc-s6">$light-green-300</div>
            <div class="sc-col sc-xs2 sc-s6">#AED581</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-300</div>
        </div>
        <div class="sc-row sc-light-green-400">
            <div class="sc-col sc-xs2 sc-s6">$light-green-400</div>
            <div class="sc-col sc-xs2 sc-s6">#9CCC65</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-400</div>
        </div>
        <div class="sc-row sc-light-green-500">
            <div class="sc-col sc-xs2 sc-s6">$light-green-500</div>
            <div class="sc-col sc-xs2 sc-s6">#8BC34A</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-500</div>
        </div>
        <div class="sc-row sc-light-green-600">
            <div class="sc-col sc-xs2 sc-s6">$light-green-600</div>
            <div class="sc-col sc-xs2 sc-s6">#7CB342</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-600</div>
        </div>
        <div class="sc-row sc-light-green-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$light-green-700</div>
            <div class="sc-col sc-xs2 sc-s6">#689F38</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-700</div>
        </div>
        <div class="sc-row sc-light-green-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$light-green-800</div>
            <div class="sc-col sc-xs2 sc-s6">#558B2F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-800</div>
        </div>
        <div class="sc-row sc-light-green-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$light-green-900</div>
            <div class="sc-col sc-xs2 sc-s6">#33691E</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-900</div>
        </div>
        <div class="sc-row sc-light-green-a100">
            <div class="sc-col sc-xs2 sc-s6">$light-green-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#CCFF90</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-a100</div>
        </div>
        <div class="sc-row sc-light-green-a200">
            <div class="sc-col sc-xs2 sc-s6">$light-green-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#B2FF59</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-a200</div>
        </div>
        <div class="sc-row sc-light-green-a400">
            <div class="sc-col sc-xs2 sc-s6">$light-green-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#76FF03</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-a400</div>
        </div>
        <div class="sc-row sc-light-green-a700">
            <div class="sc-col sc-xs2 sc-s6">$light-green-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#64DD17</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-light-green-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-lime-text">Lime</h3>
        <div class="sc-row sc-lime">
            <div class="sc-col sc-xs2 sc-s6">$lime</div>
            <div class="sc-col sc-xs2 sc-s6">#CDDC39</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime</div>
        </div>
        <div class="sc-row sc-lime-50">
            <div class="sc-col sc-xs2 sc-s6">$lime-50</div>
            <div class="sc-col sc-xs2 sc-s6">#F9FBE7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-50</div>
        </div>
        <div class="sc-row sc-lime-100">
            <div class="sc-col sc-xs2 sc-s6">$lime-100</div>
            <div class="sc-col sc-xs2 sc-s6">#F0F4C3</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-100</div>
        </div>
        <div class="sc-row sc-lime-200">
            <div class="sc-col sc-xs2 sc-s6">$lime-200</div>
            <div class="sc-col sc-xs2 sc-s6">#E6EE9C</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-200</div>
        </div>
        <div class="sc-row sc-lime-300">
            <div class="sc-col sc-xs2 sc-s6">$lime-300</div>
            <div class="sc-col sc-xs2 sc-s6">#DCE775</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-300</div>
        </div>
        <div class="sc-row sc-lime-400">
            <div class="sc-col sc-xs2 sc-s6">$lime-400</div>
            <div class="sc-col sc-xs2 sc-s6">#D4E157</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-400</div>
        </div>
        <div class="sc-row sc-lime-500">
            <div class="sc-col sc-xs2 sc-s6">$lime-500</div>
            <div class="sc-col sc-xs2 sc-s6">#CDDC39</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-500</div>
        </div>
        <div class="sc-row sc-lime-600">
            <div class="sc-col sc-xs2 sc-s6">$lime-600</div>
            <div class="sc-col sc-xs2 sc-s6">#C0CA33</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-600</div>
        </div>
        <div class="sc-row sc-lime-700">
            <div class="sc-col sc-xs2 sc-s6">$lime-700</div>
            <div class="sc-col sc-xs2 sc-s6">#AFB42B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-700</div>
        </div>
        <div class="sc-row sc-lime-800">
            <div class="sc-col sc-xs2 sc-s6">$lime-800</div>
            <div class="sc-col sc-xs2 sc-s6">#9E9D24</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-800</div>
        </div>
        <div class="sc-row sc-lime-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$lime-900</div>
            <div class="sc-col sc-xs2 sc-s6">#827717</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-900</div>
        </div>
        <div class="sc-row sc-lime-a100">
            <div class="sc-col sc-xs2 sc-s6">$lime-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#F4FF81</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-a100</div>
        </div>
        <div class="sc-row sc-lime-a200">
            <div class="sc-col sc-xs2 sc-s6">$lime-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#EEFF41</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-a200</div>
        </div>
        <div class="sc-row sc-lime-a400">
            <div class="sc-col sc-xs2 sc-s6">$lime-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#C6FF00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-a400</div>
        </div>
        <div class="sc-row sc-lime-a700">
            <div class="sc-col sc-xs2 sc-s6">$lime-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#AEEA00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-lime-a700</div>
        </div>
    </div>
</section>
<section class="sc-row">
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-yellow-text">Yellow</h3>
        <div class="sc-row sc-yellow">
            <div class="sc-col sc-xs2 sc-s6">$yellow</div>
            <div class="sc-col sc-xs2 sc-s6">#FFEB3B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow</div>
        </div>
        <div class="sc-row sc-yellow-50">
            <div class="sc-col sc-xs2 sc-s6">$yellow-50</div>
            <div class="sc-col sc-xs2 sc-s6">#FFFDE7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-50</div>
        </div>
        <div class="sc-row sc-yellow-100">
            <div class="sc-col sc-xs2 sc-s6">$yellow-100</div>
            <div class="sc-col sc-xs2 sc-s6">#FFF9C4</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-100</div>
        </div>
        <div class="sc-row sc-yellow-200">
            <div class="sc-col sc-xs2 sc-s6">$yellow-200</div>
            <div class="sc-col sc-xs2 sc-s6">#FFF59D</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-200</div>
        </div>
        <div class="sc-row sc-yellow-300">
            <div class="sc-col sc-xs2 sc-s6">$yellow-300</div>
            <div class="sc-col sc-xs2 sc-s6">#FFF176</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-300</div>
        </div>
        <div class="sc-row sc-yellow-400">
            <div class="sc-col sc-xs2 sc-s6">$yellow-400</div>
            <div class="sc-col sc-xs2 sc-s6">#FFEE58</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-400</div>
        </div>
        <div class="sc-row sc-yellow-500">
            <div class="sc-col sc-xs2 sc-s6">$yellow-500</div>
            <div class="sc-col sc-xs2 sc-s6">#FFEB3B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-500</div>
        </div>
        <div class="sc-row sc-yellow-600">
            <div class="sc-col sc-xs2 sc-s6">$yellow-600</div>
            <div class="sc-col sc-xs2 sc-s6">#FDD835</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-600</div>
        </div>
        <div class="sc-row sc-yellow-700">
            <div class="sc-col sc-xs2 sc-s6">$yellow-700</div>
            <div class="sc-col sc-xs2 sc-s6">#FBC02D</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-700</div>
        </div>
        <div class="sc-row sc-yellow-800">
            <div class="sc-col sc-xs2 sc-s6">$yellow-800</div>
            <div class="sc-col sc-xs2 sc-s6">#F9A825</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-800</div>
        </div>
        <div class="sc-row sc-yellow-900">
            <div class="sc-col sc-xs2 sc-s6">$yellow-900</div>
            <div class="sc-col sc-xs2 sc-s6">#F57F17</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-900</div>
        </div>
        <div class="sc-row sc-yellow-a100">
            <div class="sc-col sc-xs2 sc-s6">$yellow-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#FFFF8D</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-a100</div>
        </div>
        <div class="sc-row sc-yellow-a200">
            <div class="sc-col sc-xs2 sc-s6">$yellow-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#FFFF00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-a200</div>
        </div>
        <div class="sc-row sc-yellow-a400">
            <div class="sc-col sc-xs2 sc-s6">$yellow-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#FFEA00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-a400</div>
        </div>
        <div class="sc-row sc-yellow-a700">
            <div class="sc-col sc-xs2 sc-s6">$yellow-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#FFD600</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-yellow-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-amber-text">Amber</h3>
        <div class="sc-row sc-amber">
            <div class="sc-col sc-xs2 sc-s6">$amber</div>
            <div class="sc-col sc-xs2 sc-s6">#FFC107</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber</div>
        </div>
        <div class="sc-row sc-amber-50">
            <div class="sc-col sc-xs2 sc-s6">$amber-50</div>
            <div class="sc-col sc-xs2 sc-s6">#FFF8E1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-50</div>
        </div>
        <div class="sc-row sc-amber-100">
            <div class="sc-col sc-xs2 sc-s6">$amber-100</div>
            <div class="sc-col sc-xs2 sc-s6">#FFECB3</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-100</div>
        </div>
        <div class="sc-row sc-amber-200">
            <div class="sc-col sc-xs2 sc-s6">$amber-200</div>
            <div class="sc-col sc-xs2 sc-s6">#FFE082</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-200</div>
        </div>
        <div class="sc-row sc-amber-300">
            <div class="sc-col sc-xs2 sc-s6">$amber-300</div>
            <div class="sc-col sc-xs2 sc-s6">#FFD54F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-300</div>
        </div>
        <div class="sc-row sc-amber-400">
            <div class="sc-col sc-xs2 sc-s6">$amber-400</div>
            <div class="sc-col sc-xs2 sc-s6">#FFCA28</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-400</div>
        </div>
        <div class="sc-row sc-amber-500">
            <div class="sc-col sc-xs2 sc-s6">$amber-500</div>
            <div class="sc-col sc-xs2 sc-s6">#FFC107</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-500</div>
        </div>
        <div class="sc-row sc-amber-600">
            <div class="sc-col sc-xs2 sc-s6">$amber-600</div>
            <div class="sc-col sc-xs2 sc-s6">#FFB300</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-600</div>
        </div>
        <div class="sc-row sc-amber-700">
            <div class="sc-col sc-xs2 sc-s6">$amber-700</div>
            <div class="sc-col sc-xs2 sc-s6">#FFA000</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-700</div>
        </div>
        <div class="sc-row sc-amber-800">
            <div class="sc-col sc-xs2 sc-s6">$amber-800</div>
            <div class="sc-col sc-xs2 sc-s6">#FF8F00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-800</div>
        </div>
        <div class="sc-row sc-amber-900">
            <div class="sc-col sc-xs2 sc-s6">$amber-900</div>
            <div class="sc-col sc-xs2 sc-s6">#FF6F00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-900</div>
        </div>
        <div class="sc-row sc-amber-a100">
            <div class="sc-col sc-xs2 sc-s6">$amber-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#FFE57F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-a100</div>
        </div>
        <div class="sc-row sc-amber-a200">
            <div class="sc-col sc-xs2 sc-s6">$amber-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#FFD740</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-a200</div>
        </div>
        <div class="sc-row sc-amber-a400">
            <div class="sc-col sc-xs2 sc-s6">$amber-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#FFC400</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-a400</div>
        </div>
        <div class="sc-row sc-amber-a700">
            <div class="sc-col sc-xs2 sc-s6">$amber-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#FFAB00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-amber-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-orange-text">Orange</h3>
        <div class="sc-row sc-orange">
            <div class="sc-col sc-xs2 sc-s6">$orange</div>
            <div class="sc-col sc-xs2 sc-s6">#FF9800</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange</div>
        </div>
        <div class="sc-row sc-orange-50">
            <div class="sc-col sc-xs2 sc-s6">$orange-50</div>
            <div class="sc-col sc-xs2 sc-s6">#FFF3E0</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-50</div>
        </div>
        <div class="sc-row sc-orange-100">
            <div class="sc-col sc-xs2 sc-s6">$orange-100</div>
            <div class="sc-col sc-xs2 sc-s6">#FFE0B2</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-100</div>
        </div>
        <div class="sc-row sc-orange-200">
            <div class="sc-col sc-xs2 sc-s6">$orange-200</div>
            <div class="sc-col sc-xs2 sc-s6">#FFCC80</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-200</div>
        </div>
        <div class="sc-row sc-orange-300">
            <div class="sc-col sc-xs2 sc-s6">$orange-300</div>
            <div class="sc-col sc-xs2 sc-s6">#FFB74D</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-300</div>
        </div>
        <div class="sc-row sc-orange-400">
            <div class="sc-col sc-xs2 sc-s6">$orange-400</div>
            <div class="sc-col sc-xs2 sc-s6">#FFA726</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-400</div>
        </div>
        <div class="sc-row sc-orange-500">
            <div class="sc-col sc-xs2 sc-s6">$orange-500</div>
            <div class="sc-col sc-xs2 sc-s6">#FF9800</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-500</div>
        </div>
        <div class="sc-row sc-orange-600">
            <div class="sc-col sc-xs2 sc-s6">$orange-600</div>
            <div class="sc-col sc-xs2 sc-s6">#FB8C00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-600</div>
        </div>
        <div class="sc-row sc-orange-700">
            <div class="sc-col sc-xs2 sc-s6">$orange-700</div>
            <div class="sc-col sc-xs2 sc-s6">#F57C00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-700</div>
        </div>
        <div class="sc-row sc-orange-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$orange-800</div>
            <div class="sc-col sc-xs2 sc-s6">#EF6C00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-800</div>
        </div>
        <div class="sc-row sc-orange-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$orange-900</div>
            <div class="sc-col sc-xs2 sc-s6">#E65100</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-900</div>
        </div>
        <div class="sc-row sc-orange-a100">
            <div class="sc-col sc-xs2 sc-s6">$orange-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#FFD180</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-a100</div>
        </div>
        <div class="sc-row sc-orange-a200">
            <div class="sc-col sc-xs2 sc-s6">$orange-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#FFAB40</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-a200</div>
        </div>
        <div class="sc-row sc-orange-a400">
            <div class="sc-col sc-xs2 sc-s6">$orange-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#FF9100</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-a400</div>
        </div>
        <div class="sc-row sc-orange-a700">
            <div class="sc-col sc-xs2 sc-s6">$orange-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#FF6D00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-orange-a700</div>
        </div>
    </div>
</section>
<section class="sc-row">
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-deep-orange-text">Deep orange</h3>
        <div class="sc-row sc-deep-orange sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange</div>
            <div class="sc-col sc-xs2 sc-s6">#FF5722</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange</div>
        </div>
        <div class="sc-row sc-deep-orange-50">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-50</div>
            <div class="sc-col sc-xs2 sc-s6">#FBE9E7</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-50</div>
        </div>
        <div class="sc-row sc-deep-orange-100">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-100</div>
            <div class="sc-col sc-xs2 sc-s6">#FFCCBC</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-100</div>
        </div>
        <div class="sc-row sc-deep-orange-200">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-200</div>
            <div class="sc-col sc-xs2 sc-s6">#FFAB91</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-200</div>
        </div>
        <div class="sc-row sc-deep-orange-300">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-300</div>
            <div class="sc-col sc-xs2 sc-s6">#FF8A65</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-300</div>
        </div>
        <div class="sc-row sc-deep-orange-400">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-400</div>
            <div class="sc-col sc-xs2 sc-s6">#FF7043</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-400</div>
        </div>
        <div class="sc-row sc-deep-orange-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-500</div>
            <div class="sc-col sc-xs2 sc-s6">#FF5722</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-500</div>
        </div>
        <div class="sc-row sc-deep-orange-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-600</div>
            <div class="sc-col sc-xs2 sc-s6">#F4511E</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-600</div>
        </div>
        <div class="sc-row sc-deep-orange-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-700</div>
            <div class="sc-col sc-xs2 sc-s6">#E64A19</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-700</div>
        </div>
        <div class="sc-row sc-deep-orange-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-800</div>
            <div class="sc-col sc-xs2 sc-s6">#D84315</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-800</div>
        </div>
        <div class="sc-row sc-deep-orange-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-900</div>
            <div class="sc-col sc-xs2 sc-s6">#BF360C</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-900</div>
        </div>
        <div class="sc-row sc-deep-orange-a100">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-a100</div>
            <div class="sc-col sc-xs2 sc-s6">#FF9E80</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-a100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-a100</div>
        </div>
        <div class="sc-row sc-deep-orange-a200">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-a200</div>
            <div class="sc-col sc-xs2 sc-s6">#FF6E40</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-a200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-a200</div>
        </div>
        <div class="sc-row sc-deep-orange-a400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-a400</div>
            <div class="sc-col sc-xs2 sc-s6">#FF3D00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-a400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-a400</div>
        </div>
        <div class="sc-row sc-deep-orange-a700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$deep-orange-a700</div>
            <div class="sc-col sc-xs2 sc-s6">#DD2C00</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-a700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-deep-orange-a700</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-brown-text">Brown</h3>
        <div class="sc-row sc-brown sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$brown</div>
            <div class="sc-col sc-xs2 sc-s6">#795548</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown</div>
        </div>
        <div class="sc-row sc-brown-50">
            <div class="sc-col sc-xs2 sc-s6">$brown-50</div>
            <div class="sc-col sc-xs2 sc-s6">#EFEBE9</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-50</div>
        </div>
        <div class="sc-row sc-brown-100">
            <div class="sc-col sc-xs2 sc-s6">$brown-100</div>
            <div class="sc-col sc-xs2 sc-s6">#D7CCC8</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-100</div>
        </div>
        <div class="sc-row sc-brown-200">
            <div class="sc-col sc-xs2 sc-s6">$brown-200</div>
            <div class="sc-col sc-xs2 sc-s6">#BCAAA4</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-200</div>
        </div>
        <div class="sc-row sc-brown-300 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$brown-300</div>
            <div class="sc-col sc-xs2 sc-s6">#A1887F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-300</div>
        </div>
        <div class="sc-row sc-brown-400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$brown-400</div>
            <div class="sc-col sc-xs2 sc-s6">#8D6E63</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-400</div>
        </div>
        <div class="sc-row sc-brown-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$brown-500</div>
            <div class="sc-col sc-xs2 sc-s6">#795548</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-500</div>
        </div>
        <div class="sc-row sc-brown-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$brown-600</div>
            <div class="sc-col sc-xs2 sc-s6">#6D4C41</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-600</div>
        </div>
        <div class="sc-row sc-brown-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$brown-700</div>
            <div class="sc-col sc-xs2 sc-s6">#5D4037</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-700</div>
        </div>
        <div class="sc-row sc-brown-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$brown-800</div>
            <div class="sc-col sc-xs2 sc-s6">#4E342E</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-800</div>
        </div>
        <div class="sc-row sc-brown-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$brown-900</div>
            <div class="sc-col sc-xs2 sc-s6">#3E2723</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-brown-900</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-grey-text">Grey</h3>
        <div class="sc-row sc-grey">
            <div class="sc-col sc-xs2 sc-s6">$grey</div>
            <div class="sc-col sc-xs2 sc-s6">#9E9E9E</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey</div>
        </div>
        <div class="sc-row sc-grey-50">
            <div class="sc-col sc-xs2 sc-s6">$grey-50</div>
            <div class="sc-col sc-xs2 sc-s6">#FAFAFA</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-50</div>
        </div>
        <div class="sc-row sc-grey-100">
            <div class="sc-col sc-xs2 sc-s6">$grey-100</div>
            <div class="sc-col sc-xs2 sc-s6">#F5F5F5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-100</div>
        </div>
        <div class="sc-row sc-grey-200">
            <div class="sc-col sc-xs2 sc-s6">$grey-200</div>
            <div class="sc-col sc-xs2 sc-s6">#EEEEEE</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-200</div>
        </div>
        <div class="sc-row sc-grey-300">
            <div class="sc-col sc-xs2 sc-s6">$grey-300</div>
            <div class="sc-col sc-xs2 sc-s6">#E0E0E0</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-300</div>
        </div>
        <div class="sc-row sc-grey-400">
            <div class="sc-col sc-xs2 sc-s6">$grey-400</div>
            <div class="sc-col sc-xs2 sc-s6">#BDBDBD</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-400</div>
        </div>
        <div class="sc-row sc-grey-500">
            <div class="sc-col sc-xs2 sc-s6">$grey-500</div>
            <div class="sc-col sc-xs2 sc-s6">#9E9E9E</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-500</div>
        </div>
        <div class="sc-row sc-grey-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$grey-600</div>
            <div class="sc-col sc-xs2 sc-s6">#757575</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-600</div>
        </div>
        <div class="sc-row sc-grey-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$grey-700</div>
            <div class="sc-col sc-xs2 sc-s6">#616161</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-700</div>
        </div>
        <div class="sc-row sc-grey-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$grey-800</div>
            <div class="sc-col sc-xs2 sc-s6">#424242</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-800</div>
        </div>
        <div class="sc-row sc-grey-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$grey-900</div>
            <div class="sc-col sc-xs2 sc-s6">#212121</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-grey-900</div>
        </div>
    </div>
</section>
<section class="sc-row">
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-blue-grey-text">Blue grey</h3>
        <div class="sc-row sc-blue-grey sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey</div>
            <div class="sc-col sc-xs2 sc-s6">#607D8B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey</div>
        </div>
        <div class="sc-row sc-blue-grey-50">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-50</div>
            <div class="sc-col sc-xs2 sc-s6">#ECEFF1</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-50-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-50</div>
        </div>
        <div class="sc-row sc-blue-grey-100">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-100</div>
            <div class="sc-col sc-xs2 sc-s6">#CFD8DC</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-100-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-100</div>
        </div>
        <div class="sc-row sc-blue-grey-200">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-200</div>
            <div class="sc-col sc-xs2 sc-s6">#B0BEC5</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-200-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-200</div>
        </div>
        <div class="sc-row sc-blue-grey-300">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-300</div>
            <div class="sc-col sc-xs2 sc-s6">#90A4AE</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-300-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-300</div>
        </div>
        <div class="sc-row sc-blue-grey-400 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-400</div>
            <div class="sc-col sc-xs2 sc-s6">#78909C</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-400-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-400</div>
        </div>
        <div class="sc-row sc-blue-grey-500 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-500</div>
            <div class="sc-col sc-xs2 sc-s6">#607D8B</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-500-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-500</div>
        </div>
        <div class="sc-row sc-blue-grey-600 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-600</div>
            <div class="sc-col sc-xs2 sc-s6">#546E7A</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-600-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-600</div>
        </div>
        <div class="sc-row sc-blue-grey-700 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-700</div>
            <div class="sc-col sc-xs2 sc-s6">#455A64</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-700-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-700</div>
        </div>
        <div class="sc-row sc-blue-grey-800 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-800</div>
            <div class="sc-col sc-xs2 sc-s6">#37474F</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-800-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-800</div>
        </div>
        <div class="sc-row sc-blue-grey-900 sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$blue-grey-900</div>
            <div class="sc-col sc-xs2 sc-s6">#263238</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-900-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-blue-grey-900</div>
        </div>
    </div>
    <div class="sc-col sc-xs4 sc-s12 sc-m4">
        <h3 class="sc-col sc-xs4 sc-s12 sc-black-text">Shade</h3>
        <div class="sc-row sc-black sc-white-text">
            <div class="sc-col sc-xs2 sc-s6">$black</div>
            <div class="sc-col sc-xs2 sc-s6">#000000</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-black-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-black</div>
        </div>
        <div class="sc-row sc-white">
            <div class="sc-col sc-xs2 sc-s6">$white</div>
            <div class="sc-col sc-xs2 sc-s6">#FFFFFF</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-white-text</div>
            <div class="sc-col sc-xs2 sc-s6">.sc-white</div>
        </div>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';