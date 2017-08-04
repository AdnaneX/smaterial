<?php
$title = 'Text fields';
$description = 'Text fields based on Google\'s Material Design. Text fields have a couple of different styles';
$keywords = 'text fields, input, select, textarea, autocomplete';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Text fields</h2>

	<p class="col xs4 s12 m6">
		There are two types of fields you can use.
		The text fields and the options you can use are listed below.
        <strong>NOTE*</strong> that additional elements like the <code class="language-html">&lt;label></code> and
        <code class="language-html">&lt;div class="helper-text"></code> should always be below the input or textarea.
	</p>

	<p class="col xs4 s12 m6">
		If you are looking for a date or time picker take a look at <a href="/components/pickers.php">pickers</a>.
		if you need to use <code class="language-html">&lt;select></code> take a look at <a href="/components/menu.php">menu</a>.
		If you are looking for <code class="language-html">&lt;input type="range"></code> take a look at <a href="/components/sliders.php">sliders</a>.
		<strong>Note*</strong> These elements are under construction.
	</p>
</section>

<section class="row" id="floating">
	<h3 class="col xs4 s12">Input</h3>

    <div class="col xs4 s12 m6">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="input">
                <input type="text" name="name" id="name" required placeholder="Name">
                <label for="name">Name</label>
                <div class="helper-text">Helper text</div>
            </div>

            <div class="input">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>

            <div class="input icon">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
                <i class="material-icons">mail</i>
            </div>

            <input type="submit" class="raised-button">
        </form>

        <p>
            The <span class="red-text"><i class="material-icons">star</i></span>  is automatically added by required fields but can easily be turned off.
        </p>
    </div>

	<div class="col xs4 s12 m3">
		<div class="input">
			<input type="text" id="example">
			<label for="example">Example</label>
		</div>

		<div class="input">
			<input type="password" id="example2">
			<label for="example2">Password</label>
		</div>

		<div class="input">
			<input type="number" id="example3">
			<label for="example3">Number</label>
		</div>

		<div class="input">
			<input type="email" id="example4">
			<label for="example4">Email</label>
		</div>
	</div>

	<div class="col xs4 s12 m3">
		<div class="input">
			<input type="search" id="example5">
			<label for="example5">Search</label>
		</div>

		<div class="input">
			<input type="tel" id="example6">
			<label for="example6">Telephone</label>
		</div>

		<div class="input">
			<input type="url" id="example7">
			<label for="example7">Url</label>
		</div>

		<div class="input">
			<input type="text" id="disabled" disabled>
			<label for="disabled">Disabled</label>
		</div>
	</div>

	<pre class="language-html col xs4 s12 m6 offset-m6">
		<code>
&lt;div class="input">
  &lt;input type="url" id="example">
  &lt;label for="example">Url&lt;/label>
  &lt;div class="helper-text">Helper text&lt;/div>
&lt;/div>

&lt;div class="input">
  &lt;input type="text" id="disabled" disabled>
  &lt;label for="disabled">Disabled&lt;/label>
&lt;/div>

&lt;div class="input icon">
  &lt;input type="email" name="email" id="email" required>
  &lt;label for="email">Email&lt;/label>
  &lt;i class="material-icons">mail&lt;/i>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Text area</h3>

	<p class="col xs4 s12 m6">
		The text area works the same as the floating text fields
	</p>

	<div class="col xs4 s12 m6">
        <form>
            <div class="textarea">
                <textarea id="textarea" required></textarea>
                <label for="textarea">Text area</label>
                <div class="helper-text">Helper text</div>
            </div>

            <button class="raised-button">Send</button>
        </form>
	</div>

    <pre class="language-html col xs4 m6 offset-m6">
        <code>
&lt;div class="textarea">
  &lt;textarea id="textarea" required>&lt;/textarea>
  &lt;label for="textarea">Text area&lt;/label>
  &lt;div class="helper-text">Helper text&lt;/div>
&lt;/div>
        </code>
    </pre>
</section>

<section class="row">
	<h3 class="col xs4 s12">Settings</h3>

	<table>
		<thead>
		<tr>
			<th>Variable</th>
			<th>Options</th>
			<th>Result</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>$textfield-off-color</td>
			<td>Variable / color</td>
			<td>Changes the color of label, border bottom and icon when text field isn't active</td>
		</tr>
		<tr>
			<td>$textfield-on-color</td>
			<td>Variable / color</td>
			<td>Changes the color of label, border bottom and icon when text field is active</td>
		</tr>
		<tr>
			<td>$textfield-disabled-color</td>
			<td>Variable / color</td>
			<td>Changes the color of label, border bottom and icon when text field disabled</td>
		</tr>
		<tr>
			<td>$textfield-required-color</td>
			<td>Variable / color</td>
			<td>Changes the color of the required star</td>
		</tr>
        <tr>
            <td>$textfield-error-color</td>
            <td>Variable / color</td>
            <td>Changes the color of invalid fields</td>
        </tr>
		</tbody>
	</table>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';