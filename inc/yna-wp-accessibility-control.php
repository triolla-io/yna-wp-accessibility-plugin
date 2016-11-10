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
    <i class="fa fa-universal-access fa-3x"></i>
    </a>

    <div id="accessibility-controls" class="accessibility-controls" tabindex="-1" role="dialog" aria-labelledby="accessibility-dialog-label">
        <h2 id="accessibility-dialog-label">
            <?php _e('Site accessibility', 'yna') ?>
        </h2>
        <div class="font-controls controls-group">
            <h3>
                <?php _e('Change font size', 'yna'); ?>
            </h3>
            <div role="button"
                 tabindex="1"
                 aria-checked="true"
                 class="access-control change-font-size change-font-100"
                 data-access-type="font-size"
                 data-access-value="null"
                 title="<?php _e('Change the font size to 100%', 'yna') ?>">
                <?php _e('A', 'yna') ?>
            </div>
            <div role="button"
                 tabindex="1"
                 aria-checked="false"
                 class="access-control change-font-size change-font-150"
                 data-access-type="font-size"
                 data-access-value="150"
                 title="<?php _e('Change the font size to 100%', 'yna') ?>">
                <?php _e('A', 'yna') ?>
            </div>
            <div role="button"
                 tabindex="1"
                 aria-checked="false"
                 class="access-control change-font-size change-font-200"
                 data-access-type="font-size"
                 data-access-value="200"
                 title="<?php _e('Change the font size to 200%', 'yna') ?>">
                <?php _e('A', 'yna') ?>
            </div>
        </div>
        <div class="contrast-controls controls-group">
            <h3><?php _e('Change contrast', 'yna') ?></h3>
            <div role="button" tabindex="1" aria-checked="true" class="access-control change-contrast change-contrast-normal" data-access-type="contrast" data-access-value="null"
                 title="<?php _e('Normal contrast', 'yna') ?>">
                <?php _e('Normal contrast', 'yna') ?>
            </div>
            <div role="button" tabindex="1" aria-checked="false" class="access-control change-contrast change-contrast-gray" data-access-type="contrast" data-access-value="gray"
                 title="<?php _e('Grayscale', 'yna') ?>">
                <?php _e('Grayscale', 'yna') ?>
            </div>
            <div role="button" tabindex="1" aria-checked="false" class="access-control change-contrast change-contrast-high" data-access-type="contrast" data-access-value="high"
                 title="<?php _e('High contrast', 'yna') ?>">
                <?php _e('High contrast', 'yna') ?>
            </div>
        </div>
        <div class="flash-controls controls-group">
            <h3><?php _e('Block flashes', 'yna') ?></h3>
            <div role="button" tabindex="1" aria-checked="false" class="access-control flash-block on" data-access-type="transition" data-access-value="on"
                 title="<?php _e('On', 'yna') ?>">
                <?php _e('On', 'yna') ?>
            </div>
            <div role="button" tabindex="1" aria-checked="true" class="access-control flash-block off" data-access-type="transition" data-access-value="off"
                 title="<?php _e('Off', 'yna') ?>">
                <?php _e('Off', 'yna') ?>
            </div>
        </div>
        <a href="#accessibility-controls" tabindex="1" class="access-control-close"><?php _e('Close', 'yna') ?></a>
    </div>


<?php


                if($yna_accessibility_options['enable']){
                        return $content;

                }

            }
add_filter('init', 'yna_accessibility_content');
