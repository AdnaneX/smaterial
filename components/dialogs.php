<?php
$title = 'Dialogs';
$description = 'Dialogs based on Google\'s Material Design';
$keywords = 'dialogs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="sc-row">
    <h2 class="sc-col sc-xs4 sc-s12">Dialog usage</h2>

    <p class="sc-col sc-xs4 sc-s12 sc-m6">
        Click on the buttons to trigger a dialog.
    </p>
</section>

<section class="sc-row">
    <h3 class="sc-col sc-xs4 sc-s12">Default dialog</h3>

    <p class="sc-col sc-xs4 sc-s12 sc-m6">
        <button type="button" class="sc-raised-button sc-trigger" data-sc-trigger="default">Default</button>
    </p>

    <div class="sc-col sc-xs4 sc-s12 sc-m6">

    </div>

    <div class="sc-dialog" id="default">
        <div class="sc-dialog-container">
            <div class="sc-dialog-title">
                Example of default dialog
            </div>

            <div class="sc-dialog-content">
                Put dialog content here.
            </div>
        </div>

        <div class="sc-dialog-actions">
            <button type="button" data-sc-trigger="default" class="sc-flat-button sc-trigger">Agree</button>
            <button type="button" data-sc-trigger="default" class="sc-flat-button sc-trigger">Disagree</button>
        </div>
    </div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';