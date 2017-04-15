<?php
$title = 'Text fields';
$description = 'Text fields based on Google\'s Material Design. Text fields have a couple of different styles not only floating and single line but also dense';
$keywords = 'text fields, input, select, textarea, autocomplete';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
	<h2 class="sc-col sc-xs4 sc-s12">Text fields</h2>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		There are numerous text fields you can use.
		The text fields and the options you can use are listed below.
		<strong>NOTE*</strong> that the label should always be below the input.
	</p>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		If you are looking for a date or time picker take a look at <a href="/components/pickers.php">pickers</a>.
		if you need to use <code class="language-html">&lt;select></code> take a look at <a href=""></a>.
		If you are looking for <code class="language-html">&lt;input type="range"></code> take a look at <a href="/components/sliders.php">sliders</a>.
		<strong>Note*</strong> These elements are under construction.
	</p>
</section>

<section class="sc-row" id="floating">
	<h3 class="sc-col sc-xs4 sc-s12">Floating input</h3>

    <div class="sc-col sc-xs4 sc-s12 sc-m6">
        <p>
            The floating input is most commonly used for forms.
        </p>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="sc-floating-input">
                <input type="text" name="name" id="name" required>
                <label for="name">Name</label>
            </div>

            <div class="sc-floating-input">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>

            <input type="submit" class="sc-raised-button">
        </form>

        <p>
            The <span class="sc-red-text"><i class="material-icons">star</i></span>  is automatically added by required fields but can easily be turned off.
        </p>
    </div>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-floating-input">
			<input type="text" id="example">
			<label for="example">Example</label>
		</div>

		<div class="sc-floating-input">
			<input type="password" id="example2">
			<label for="example2">Password</label>
		</div>

		<div class="sc-floating-input">
			<input type="number" id="example3">
			<label for="example3">Number</label>
		</div>

		<div class="sc-floating-input">
			<input type="email" id="example4">
			<label for="example4">Email</label>
		</div>
	</div>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-floating-input">
			<input type="search" id="example5">
			<label for="example5">Search</label>
		</div>

		<div class="sc-floating-input">
			<input type="tel" id="example6">
			<label for="example6">Telephone</label>
		</div>

		<div class="sc-floating-input">
			<input type="url" id="example7">
			<label for="example7">Url</label>
		</div>

		<div class="sc-floating-input">
			<input type="text" id="disabled" disabled>
			<label for="disabled">Disabled</label>
		</div>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-floating-input">
  &lt;input type="url" id="example">
  &lt;label for="example">Url&lt;/label>
&lt;/div>

&lt;div class="sc-floating-input">
  &lt;input type="text" id="disabled" disabled>
  &lt;label for="disabled">Disabled&lt;/label>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row" id="floating-dense">
	<h3 class="sc-col sc-xs4 sc-s12">Floating dense input</h3>

    <div class="sc-col sc-xs4 sc-s12 sc-m6">
        <p>
            Compared to the "<a href="#floating">floating input</a>" the floating dense input is a bit smaller.
        </p>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="sc-floating-dense-input">
                <input type="text" name="name" id="name1" required>
                <label for="name1">Name</label>
            </div>

            <div class="sc-floating-dense-input">
                <input type="email" name="email" id="email2" required>
                <label for="email2">Email</label>
            </div>

            <input type="submit" class="sc-raised-button">
        </form>
    </div>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-floating-dense-input">
			<input type="text" id="example8">
			<label for="example8">Example</label>
		</div>

		<div class="sc-floating-dense-input">
			<input type="password" id="example9">
			<label for="example9">Password</label>
		</div>

		<div class="sc-floating-dense-input">
			<input type="number" id="example10">
			<label for="example10">Number</label>
		</div>

		<div class="sc-floating-dense-input">
			<input type="email" id="example11">
			<label for="example11">Email</label>
		</div>
	</div>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-floating-dense-input">
			<input type="search" id="example12">
			<label for="example12">Search</label>
		</div>

		<div class="sc-floating-dense-input">
			<input type="tel" id="example13">
			<label for="example13">Telephone</label>
		</div>

		<div class="sc-floating-dense-input">
			<input type="url" id="example14">
			<label for="example14">Url</label>
		</div>

		<div class="sc-floating-dense-input">
			<input type="text" id="disabled1" disabled>
			<label for="disabled1">Disabled</label>
		</div>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-floating-dense-input">
  &lt;input type="url" id="example7">
  &lt;label for="example">Url&lt;/label>
&lt;/div>

&lt;div class="sc-floating-dense-input">
  &lt;input type="text" id="disabled" disabled>
  &lt;label for="disabled">Disabled&lt;/label>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row" id="single-line">
	<h3 class="sc-col sc-xs4 sc-s12">Single line-textfield</h3>

    <div class="sc-col sc-xs4 sc-s12 sc-m6">
        <p class="sc-col sc-xs4 sc-s12 sc-m6">
            The single line text fields can also have an icon. These are more commonly used when used in a tight area.
        </p>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="sc-single-input">
                <input type="text" id="name3">
                <label for="name3">Name</label>
            </div>

            <div class="sc-single-input sc-icon">
                <input type="email" id="email3">
                <label for="email3">Email</label>
                <i class="material-icons">email</i>
            </div>

            <input type="submit" class="sc-raised-button">
        </form>
    </div>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-single-input">
			<input type="text" id="example15">
			<label for="example15">Example</label>
		</div>

		<div class="sc-single-input sc-icon">
			<input type="text" id="example17">
			<label for="example17">Icons</label>
			<i class="material-icons">cloud</i>
		</div>

		<div class="sc-single-input">
			<input type="text" id="disabled2" disabled>
			<label for="disabled2">Disabled</label>
		</div>
	</div>

    <pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-single-input sc-icon">
  &lt;input type="text" id="example17">
  &lt;label for="example17">Icons&lt;/label>
  &lt;i class="material-icons">cloud&lt;/i>
&lt;/div>

&lt;div class="sc-single-input">
  &lt;input type="text" id="disabled" disabled>
  &lt;label for="disabled">Disabled&lt;/label>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row" id="single-line-dense">
	<h3 class="sc-col sc-xs4 sc-s12">Single dense line text field</h3>

    <div class="sc-col sc-xs4 sc-s12 sc-m6">
        <p>
            The single dense line-text fields can also have an icon but are smaller than "<a href="#single-line">single line-textfields</a>".
            These are more commonly used when used in a tight area.
        </p>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="sc-single-dense-input">
                <input type="text" id="name3">
                <label for="name3">Name</label>
            </div>

            <div class="sc-single-dense-input sc-icon">
                <input type="email" id="email3">
                <label for="email3">Email</label>
                <i class="material-icons">email</i>
            </div>

            <input type="submit" class="sc-raised-button">
        </form>
    </div>

	<div class="sc-col sc-xs4 sc-s12 sc-m3">
		<div class="sc-single-dense-input">
			<input type="text" id="example16">
			<label for="example16">Example</label>
		</div>

		<div class="sc-single-dense-input">
			<input type="text" id="disabled3" disabled>
			<label for="disabled3">Disabled</label>
		</div>

		<div class="sc-single-dense-input sc-icon">
			<input type="text" id="test">
			<label for="test">Test</label>
			<i class="material-icons">cloud</i>
		</div>
	</div>

	<pre class="language-html sc-col sc-xs4 sc-s12 sc-m6 sc-offset-m6">
		<code>
&lt;div class="sc-single-dense-input">
  &lt;input type="text" id="example">
  &lt;label for="example">Example&lt;/label>
&lt;/div>

&lt;div class="sc-single-dense-input">
  &lt;input type="text" id="disabled" disabled>
  &lt;label for="disabled">Disabled&lt;/label>
&lt;/div>
		</code>
	</pre>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Multi-line text field</h3>

	<p class="sc-col sc-xs4 sc-s12 sc-m6">
		The textarea works the same as the floating text fields
	</p>

	<div class="sc-col sc-xs4 sc-s12 sc-m6">
		<div class="sc-multi-input">
			<textarea id="textarea"></textarea>
			<label for="textarea">Text area</label>
		</div>
	</div>
</section>

<section class="sc-row">
	<h3 class="sc-col sc-xs4 sc-s12">Settings</h3>

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