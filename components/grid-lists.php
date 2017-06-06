<?php
$title = 'Grid lists';
$description = 'Grid lists based on Google\'s Material Design';
$keywords = 'grid lists';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Grid lists usage</h2>

    <div class="col xs4 s4">
        <figure class="grid">
            <img src="/images/album-example.jpg">
            <figcaption class="grid-header grid-single">Single line</figcaption>
        </figure>
    </div>

    <div class="col xs4 s4">
        <figure class="grid">
            <img src="/images/album-example.jpg">
            <figcaption class="grid-footer grid-two">
                <div class="first-large">2 Line large</div>
                <div class="second">Example</div>
                <div class="action left">
                    <i class="material-icons">
                        star
                    </i>
                </div>
            </figcaption>
        </figure>
    </div>

    <div class="col xs4 s4">
        <figure class="grid">
            <img src="/images/album-example.jpg">
            <figcaption class="grid-footer grid-two">
                <div class="first-small">2 Line small</div>
                <div class="second">Example</div>
                <div class="action right">
                    <i class="material-icons">
                        star
                    </i>
                </div>
            </figcaption>
        </figure>
    </div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';