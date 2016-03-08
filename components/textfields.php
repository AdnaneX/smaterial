<?php
$title = 'Text fields';
$description = 'Tables based on Google\'s Material Design';
$keywords = 'material design, smaterial, text fields, input, select, textarea, autocomplete';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sm-row">
	<h2>Text fields</h2>

	<p class="sm-col sm-s12 sm-m6">
		There are numerous text fields you can use.
		The textfields and the options you can use are listed below.
		<strong>NOTE*</strong> that the label should always be below the input.
	</p>
</section>

<section class="sm-row" id="floating">
	<h3>Floating input</h3>

	<p class="sm-col sm-s12 sm-m6">
		The floating input is most commonly used for forms.
	</p>

	<div class="sm-col sm-s12 sm-m3">
		<div class="sm-floating-input">
			<input type="text" id="example">
			<label for="example">Example</label>
		</div>

		<div class="sm-floating-input">
			<input type="password" id="example2">
			<label for="example2">Password</label>
		</div>

		<div class="sm-floating-input">
			<input type="number" id="example3">
			<label for="example3">Number</label>
		</div>

		<div class="sm-floating-input">
			<input type="email" id="example4">
			<label for="example4">Email</label>
		</div>
	</div>

	<div class="sm-col sm-s12 sm-m3">
		<div class="sm-floating-input">
			<input type="search" id="example5">
			<label for="example5">Search</label>
		</div>

		<div class="sm-floating-input">
			<input type="tel" id="example6">
			<label for="example6">Telephone</label>
		</div>

		<div class="sm-floating-input">
			<input type="url" id="example7">
			<label for="example7">Url</label>
		</div>

		<div class="sm-floating-input">
			<input type="text" id="disabled" class="sm-disabled">
			<label for="disabled">Disabled</label>
		</div>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-floating-input">
  &lt;input type="url" id="example">
  &lt;label for="example">Url&lt;/label>
&lt;/div>

&lt;div class="sm-floating-input">
  &lt;input type="text" id="disabled" class="sm-disabled">
  &lt;label for="disabled">Disabled&lt;/label>
&lt;/div>
		</pre>
	</code>
</section>

<section class="sm-row">
	<h3>Form example</h3>

	<div class="sm-col sm-s12 sm-m3">
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="sm-floating-input">
				<input type="text" name="name" id="name" required>
				<label for="name">Name</label>
			</div>

			<div class="sm-floating-input">
				<input type="email" name="email" id="email" required>
				<label for="email">Email</label>
			</div>

			<input type="submit" class="sm-raised-button">
		</form>
	</div>

	<div class="sm-col sm-s12 sm-push-m3 sm-m6">
		The <span class="sm-red-text">*</span> is automatically added by required fields but can easily be turned off.
	</div>

	<code class="sm-col sm-s12 sm-push-m3 sm-m6">
		<pre>
&lt;form action="" method="post">
  &lt;div class="sm-floating-input">
    &lt;input type="text" name="name" id="name" required>
    &lt;label for="name">Name&lt;/label>
  &lt;/div>

  &lt;div class="sm-floating-input">
    &lt;input type="email" name="email" id="email" required>
    &lt;label for="email">Email&lt;/label>
  &lt;/div>

  &lt;input type="submit" class="sm-raised-button">
&lt;/form>
		</pre>
	</code>
</section>

<section class="sm-row" id="floating-dense">
	<h3>Floating dense input</h3>

	<p class="sm-col sm-s12 sm-m6">
		Compared to the "<a href="#floating">floating input</a>" the floating dense input is a bit smaller.
	</p>

	<div class="sm-col sm-s12 sm-m3">
		<div class="sm-floating-dense-input">
			<input type="text" id="example8">
			<label for="example8">Example</label>
		</div>

		<div class="sm-floating-dense-input">
			<input type="password" id="example9">
			<label for="example9">Password</label>
		</div>

		<div class="sm-floating-dense-input">
			<input type="number" id="example10">
			<label for="example10">Number</label>
		</div>

		<div class="sm-floating-dense-input">
			<input type="email" id="example11">
			<label for="example11">Email</label>
		</div>
	</div>

	<div class="sm-col sm-s12 sm-m3">
		<div class="sm-floating-dense-input">
			<input type="search" id="example12">
			<label for="example12">Search</label>
		</div>

		<div class="sm-floating-dense-input">
			<input type="tel" id="example13">
			<label for="example13">Telephone</label>
		</div>

		<div class="sm-floating-dense-input">
			<input type="url" id="example14">
			<label for="example14">Url</label>
		</div>

		<div class="sm-floating-dense-input">
			<input type="text" id="disabled1" class="sm-disabled">
			<label for="disabled1">Disabled</label>
		</div>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-floating-dense-input">
  &lt;input type="url" id="example7">
  &lt;label for="example">Url&lt;/label>
&lt;/div>

&lt;div class="sm-floating-dense-input">
  &lt;input type="text" id="disabled" class="sm-disabled">
  &lt;label for="disabled">Disabled&lt;/label>
&lt;/div>
		</pre>
	</code>
</section>

<section class="sm-row" id="single-line">
	<h3>Single line-textfield</h3>

	<p class="sm-col sm-s12 sm-m6">
		The single line text fields can also have an icon. These are more commonly used when used in a tight area.
	</p>

	<div class="sm-col sm-s12 sm-m3">
		<div class="sm-single-input">
			<input type="text" id="example15">
			<label for="example15">Example</label>
		</div>

		<div class="sm-single-input">
			<i class="material-icons">cloud</i>
			<input type="text" id="example17">
			<label for="example17">Icons</label>
		</div>

		<div class="sm-single-input">
			<input type="text" id="disabled2" class="sm-disabled">
			<label for="disabled2">Disabled</label>
		</div>
	</div>
</section>

<section class="sm-row" id="single-line-dense">
	<h3>Single dense line-textfield</h3>

	<p class="sm-col sm-s12 sm-m6">
		The single dense line-text fields can also have an icon but are smaller than "<a href="#single-line">single line-textfields</a>".
		These are more commonly used when used in a tight area.
	</p>

	<div class="sm-col sm-s12 sm-m3">
		<div class="sm-single-dense-input">
			<input type="text" id="example16">
			<label for="example16">Example</label>
		</div>

		<div class="sm-single-dense-input">
			<input type="text" id="disabled3" class="sm-disabled">
			<label for="disabled3">Disabled</label>
		</div>
	</div>

	<code class="sm-col sm-s12 sm-m6">
		<pre>
&lt;div class="sm-single-dense-input">
  &lt;input type="text" id="example">
  &lt;label for="example">Example&lt;/label>
&lt;/div>

&lt;div class="sm-single-dense-input">
  &lt;input type="text" id="disabled" class="sm-disabled">
  &lt;label for="disabled">Disabled&lt;/label>
&lt;/div>
		</pre>
	</code>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';