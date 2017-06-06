<?php
$title = 'Dialogs';
$description = 'Dialogs based on Google\'s Material Design. Currently there is only one type of dialog.';
$keywords = 'dialogs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
    <h2 class="col xs4 s12">Dialog usage</h2>

    <p class="col xs4 s12 m6">
        Click on the buttons to trigger a dialog.
    </p>
</section>

<section class="row">
    <h3 class="col xs4 s12">Default dialog</h3>

    <p class="col xs4 s12 m6">
        <button type="button" class="raised-button trigger" data-trigger="default">Default</button>
    </p>

    <div class="col xs4 s12 m6">

    </div>

    <div class="dialog" id="default">
        <div class="dialog-container">
            <div class="dialog-title">
                Example of default dialog
            </div>

            <div class="dialog-content">
                Put dialog content here.
            </div>
        </div>

        <div class="dialog-actions">
            <button type="button" data-trigger="default" class="flat-button trigger">Agree</button>
            <button type="button" data-trigger="default" class="flat-button trigger">Disagree</button>
        </div>
    </div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';