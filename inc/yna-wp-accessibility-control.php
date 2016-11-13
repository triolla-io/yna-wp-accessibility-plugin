<?php

if (!defined('ABSPATH')){
    exit;
}
?>

<?php function yna_accessibility_content($content){

    global $yna_accessibility_options;
    ?>

    <a href="#accessibility-controls" tabindex="1" class="access-control-trigger">
<!--        --><?php //_e('Accessibility', 'yna') ?>
    <i class="fa fa-universal-access fa-2x"></i>
    </a>

    <div id="accessibility-controls" class="accessibility-controls" tabindex="-1" role="dialog" aria-labelledby="accessibility-dialog-label">
        <h2 id="accessibility-dialog-label">
            <?php _e('Site accessibility', 'ynaap_domain') ?>
        </h2>
        <div class="font-controls controls-group">
            <h3>
                <?php _e('Change font size', 'ynaap_domain'); ?>
            </h3>
            <div role="button"
                 tabindex="1"
                 aria-checked="true"
                 class="access-control change-font-size change-font-100"
                 data-access-type="font-size"
                 data-access-value="null"
                 title="<?php _e('Change the font size to 100%', 'ynaap_domain') ?>">
                <?php _e('A', 'ynaap_domain') ?>
            </div>
            <div role="button"
                 tabindex="1"
                 aria-checked="false"
                 class="access-control change-font-size change-font-150"
                 data-access-type="font-size"
                 data-access-value="150"
                 title="<?php _e('Change the font size to 100%', 'ynaap_domain') ?>">
                <?php _e('A', 'ynaap_domain') ?>
            </div>
            <div role="button"
                 tabindex="1"
                 aria-checked="false"
                 class="access-control change-font-size change-font-200"
                 data-access-type="font-size"
                 data-access-value="200"
                 title="<?php _e('Change the font size to 200%', 'ynaap_domain') ?>">
                <?php _e('A', 'ynaap_domain') ?>
            </div>
        </div>
        <div class="contrast-controls controls-group">
            <h3><?php _e('Change contrast', 'ynaap_domain') ?></h3>
            <div role="button" tabindex="1" aria-checked="true" class="access-control change-contrast change-contrast-normal" data-access-type="contrast" data-access-value="null"
                 title="<?php _e('Normal contrast', 'ynaap_domain') ?>">
                <?php _e('Normal contrast', 'ynaap_domain') ?>
            </div>
            <div role="button" tabindex="1" aria-checked="false" class="access-control change-contrast change-contrast-gray" data-access-type="contrast" data-access-value="gray"
                 title="<?php _e('Grayscale', 'ynaap_domain') ?>">
                <?php _e('Grayscale', 'ynaap_domain') ?>
            </div>
            <div role="button" tabindex="1" aria-checked="false" class="access-control change-contrast change-contrast-high" data-access-type="contrast" data-access-value="high"
                 title="<?php _e('High contrast', 'ynaap_domain') ?>">
                <?php _e('High contrast', 'ynaap_domain') ?>
            </div>
        </div>
        <div class="flash-controls controls-group">
            <h3><?php _e('Block flashes', 'ynaap_domain') ?></h3>
            <div role="button" tabindex="1" aria-checked="false" class="access-control flash-block on" data-access-type="transition" data-access-value="on"
                 title="<?php _e('On', 'ynaap_domain') ?>">
                <?php _e('On', 'ynaap_domain') ?>
            </div>
            <div role="button" tabindex="1" aria-checked="true" class="access-control flash-block off" data-access-type="transition" data-access-value="off"
                 title="<?php _e('Off', 'ynaap_domain') ?>">
                <?php _e('Off', 'ynaap_domain') ?>
            </div>
        </div>
        <a href="#accessibility-controls" tabindex="1" class="access-control-close"><?php _e('Close', 'ynaap_domain') ?></a>
    </div>


<?php };
add_filter('wp', 'yna_accessibility_content');
