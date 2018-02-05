<?php
$title = 'Chips';
$description = 'Chips based on Google\'s Material Design. They contain basic chips but also deletable and contact chips.';
$keywords = 'chips, contact, deletable';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<section class="row">
    <h2 class="col xs4">Chips usage</h2>

    <p class="col xs4 m6">
        You could use chips for something like tags or contacts.
    </p>
</section>

<section class="row">
    <h3 class="col xs4">Chip examples</h3>

    <p class="col xs4 m6">
    There are a couple of chips. The normal (<code>.chip</code>), the deletable (<code>.chip .chip-deletable</code>),
    the contact (<code>.chip .chip-contact</code>) and the deletable contact (<code>.chip .chip-deletable .chip-contact</code>).
    </p>

    <div class="col xs4 m6">
        <div class="chip chip-deletable">
            <span>John Doe</span>
            <i class="material-icons chip-delete">clear</i>
        </div>

        <div class="chip">
            <span>John Doe</span>
        </div>

        <div class="chip chip-contact chip-deletable">
            <<?php echo ($amp ? 'amp-img layout="responsive"' : 'img'); ?> class="left" src="/images/profile-icon.jpg" alt="Chip contact example">
            <span>John Doe</span>
            <i class="material-icons chip-delete">clear</i>
        </div>

        <div class="chip chip-contact">
            <<?php echo ($amp ? 'amp-img layout="responsive"' : 'img'); ?> class="left" src="/images/profile-icon.jpg" alt="Chip contact example">
            <span>John Doe</span>
        </div>
    </div>

    <pre class="language-html col s12 m6">
		<code>
&lt;div class="chip chip-deletable">
  &lt;span>John Doe&lt;/span>
  &lt;i class="material-icons chip-delete">clear&lt;/i>
&lt;/div>

&lt;div class="chip">
  &lt;span>John Doe&lt;/span>
&lt;/div>

&lt;div class="chip chip-contact chip-deletable">
  &lt;img class="left" src="" alt="">
  &lt;span>John Doe&lt;/span>
  &lt;i class="material-icons chip-delete">clear&lt;/i>
&lt;/div>

&lt;div class="chip chip-contact">
  &lt;img class="left" src="" alt="">
  &lt;span>John Doe&lt;/span>
&lt;/div>
		</code>
	</pre>
</section>

<section class="row">
    <h3 class="col xs4">Settings</h3>

    <table class="col xs4">
        <thead>
        <tr>
            <th>Variable</th>
            <th>Options</th>
            <th>Result</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>$chips-text</td>
            <td>Change to color or variable</td>
            <td>Changes the color of the text</td>
        </tr>
        <tr>
            <td>$chips-text-hover</td>
            <td>Change to color or variable</td>
            <td>Changed the color of text when hovered and deletable</td>
        </tr>
        <tr>
            <td>$chips-background</td>
            <td>Change to color or variable</td>
            <td>Changes the background color of a chip</td>
        </tr>
        <tr>
            <td>$chips-background-hover</td>
            <td>Change to color or variable</td>
            <td>Changes the background color of a chip when hovered and deletable</td>
        </tr>
        <tr>
            <td>$chips-delete-cross</td>
            <td>Change to color or variable</td>
            <td>Changes the delete cross color when deletable</td>
        </tr>
        <tr>
            <td>$chips-delete-cross-hover</td>
            <td>Change to color or variable</td>
            <td>Changes the delete cross color when hovered and deletable</td>
        </tr>
        <tr>
            <td>$chips-delete-background</td>
            <td>Change to color or variable</td>
            <td>Changes the delete cross background when deletable</td>
        </tr>
        <tr>
            <td>$chips-delete-background-hover</td>
            <td>Change to color or variable</td>
            <td>Changes the delete cross background when hovered and deletable</td>
        </tr>
        </tbody>
    </table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
