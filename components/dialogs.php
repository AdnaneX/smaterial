<?php
$title = 'Dialogs';
$description = 'Dialogs based on Google\'s Material Design. Currently there is only one type of dialog.';
$keywords = 'dialogs';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
    <h2 class="col xs4">Dialog usage</h2>

    <p class="col xs4 m6">
        Click on the buttons to trigger a dialog.
        <button type="button" class="raised-button trigger" data-trigger="default">Default</button>
    </p>

    <pre class="language-html col xs4 m6">
		<code>
&lt;div class="dialog" id="default">
  &lt;div class="dialog-title">
    Example of default dialog
  &lt;/div>


  &lt;div class="dialog-content">
    &lt;b>Put dialog content here.&lt;/b>
  &lt;/div>

  &lt;div class="dialog-actions">
    &lt;button type="button" data-trigger="default" class="flat-button trigger">Agree&lt;/button>
    &lt;button type="button" data-trigger="default" class="flat-button trigger">Disagree&lt;/button>
  &lt;/div>
&lt;/div>
        </code>
    </pre>

    <div class="dialog" id="default">
        <div class="dialog-title">
            Example of default dialog
        </div>


        <div class="dialog-content">
            <b>Put dialog content here.</b>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet mauris sit amet mauris bibendum dictum quis non mi. Nullam quis neque id diam porta placerat. Nulla facilisi. Morbi quis cursus ipsum. Pellentesque at velit nulla. Praesent suscipit quam eu arcu efficitur aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse nulla ipsum, lacinia at pellentesque et, bibendum nec leo. Nunc hendrerit metus ac venenatis dictum. Sed lacinia condimentum neque ac efficitur. Nullam placerat vulputate cursus. Etiam eu sapien elementum, consequat enim eu, varius quam. Aliquam eu dui in augue ornare placerat ut id mi. Etiam sed volutpat tortor. Phasellus sodales nulla justo, ut feugiat nulla consectetur id. Nam lobortis odio eu metus pretium, eu feugiat leo facilisis.
            </p>
            <p>
                Curabitur sodales libero ex, et consequat nulla aliquet ac. Fusce ac mauris iaculis, consequat tortor quis, consequat nunc. Nullam dapibus, risus sit amet tincidunt rutrum, nisi nunc tristique velit, in faucibus risus arcu a mi. Integer tempor, nisi quis elementum pretium, dui lorem ullamcorper lacus, eu dictum elit magna eget arcu. Nam sollicitudin sem ut commodo tempor. Fusce vitae lectus ultricies, tristique lectus ut, euismod nibh. Curabitur eu pretium purus. Praesent lobortis lobortis volutpat. Nunc lacinia molestie tempus. Nam et aliquet elit, id convallis tellus. Suspendisse et accumsan urna. Ut magna nulla, faucibus vitae augue id, aliquet dapibus ex. Donec lobortis metus nec eros pharetra tempor.
            </p>
            <p>
                Donec ornare sem quis lectus efficitur pharetra. Sed commodo risus ut eros finibus finibus. Vivamus facilisis id tellus ut mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam congue imperdiet libero non lacinia. Morbi commodo neque eu magna mattis eleifend. Donec urna ex, pretium non finibus et, facilisis sed tellus. Mauris massa lectus, dictum non tempus quis, porta et massa. Sed ut cursus dolor.
            </p>
            <p>
                Vivamus diam sapien, posuere ac leo vel, pellentesque fringilla massa. Vivamus ac ultrices libero. In euismod at mi vel lacinia. Aliquam consectetur metus id nibh lobortis faucibus. Integer urna diam, dapibus hendrerit sem eget, lobortis consequat mi. Donec turpis lectus, cursus vel turpis nec, auctor hendrerit eros. Donec pharetra lectus eget leo luctus elementum sit amet at purus.
            </p>
            <p>
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Praesent a ultrices enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam massa mauris, vehicula eget arcu ut, tincidunt ultricies augue. Donec nunc justo, fringilla nec erat non, tincidunt venenatis eros. Maecenas dapibus semper felis finibus consectetur. Nulla accumsan volutpat rhoncus. Curabitur sodales sit amet mauris ac pharetra. Nullam facilisis ultrices arcu a porta. Praesent dictum, nisl sed dictum rutrum, mauris orci fermentum justo, vel pharetra augue sem et ipsum. Duis molestie lobortis consequat. Pellentesque rutrum vestibulum aliquet. Cras pharetra, tortor ac venenatis sagittis, lorem purus vulputate ante, non condimentum nisi diam et nulla. Quisque in tristique lacus. Vestibulum tristique tincidunt blandit.
            </p>
        </div>

        <div class="dialog-actions">
            <button type="button" data-trigger="default" class="flat-button trigger">Agree</button>
            <button type="button" data-trigger="default" class="flat-button trigger">Disagree</button>
        </div>
    </div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';