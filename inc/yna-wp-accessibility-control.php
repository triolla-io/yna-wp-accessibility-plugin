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
            <?php
                if ( is_rtl() ) {
                    echo'נגישות האתר';
            }else {
                    _e('Site accessibility', 'ynaap_domain');
            } ?>
        </h2>
        <div class="font-controls controls-group">
            <h3>
                <?php
                    if ( is_rtl() ) {
                        echo 'שנה גודל פונט' ;
                    }else{
                    _e('Change font size', 'ynaap_domain');
                }

                 ?>
            </h3>
            <div role="button"
                 tabindex="1"
                 aria-checked="true"
                 class="access-control change-font-size change-font-100"
                 data-access-type="font-size"
                 data-access-value="null"
                 title="<?php if ( is_rtl() ) {
                     echo 'שנה גודל פונט ל 100%' ;
                 }else{

                     _e('Change the font size to 100%', 'ynaap_domain');
                 }
                 ?>">
                <?php if ( is_rtl() ) {
                    echo 'א';
                }else{

                    _e('A', 'ynaap_domain');
                }


                ?>
            </div>
            <div role="button"
                 tabindex="1"
                 aria-checked="false"
                 class="access-control change-font-size change-font-150"
                 data-access-type="font-size"
                 data-access-value="150"
                 title="<?php if ( is_rtl() ) {
                     echo 'גודל פונט רגיל' ;
                 }else{

                     _e('Normal font size', 'ynaap_domain');
                 }
                 ?>">
                <?php if ( is_rtl() ) {
                    echo 'א';
                }else{

                    _e('A', 'ynaap_domain');
                }?>
            </div>
            <div role="button"
                 tabindex="1"
                 aria-checked="false"
                 class="access-control change-font-size change-font-200"
                 data-access-type="font-size"
                 data-access-value="200"
                 title="<?php if ( is_rtl() ) {
                     echo 'שנה גודל פונט ל 200%' ;
                 }else{

                     _e('Change the font size to 200%', 'ynaap_domain');
                 }
                 ?>">
                <?php if ( is_rtl() ) {
                    echo 'א';
                }else{

                    _e('A', 'ynaap_domain');
                }?>
            </div>
        </div>
        <div class="contrast-controls controls-group">
            <h3><?php
                if( is_rtl() ){
                    echo 'שנה ניגודיות';
                }else{

                    _e('Change contrast', 'ynaap_domain');
                }

                ?></h3>
            <div role="button" tabindex="1" aria-checked="true" class="access-control change-contrast change-contrast-normal" data-access-type="contrast" data-access-value="null"
                 title="<?php
                 if (is_rtl() ){
                     echo 'ניגודיות רגילה';
                 }else{

                     _e('Normal contrast', 'ynaap_domain') ;
                 }
                 ?>">
                <?php
                        if ( is_rtl() ){
                            echo 'ניגודיות רגילה';
                        }else{

                            _e('Normal contrast', 'ynaap_domain');
                        }

                ?>
            </div>
            <div role="button" tabindex="1" aria-checked="false" class="access-control change-contrast change-contrast-gray" data-access-type="contrast" data-access-value="gray"
                 title="<?php
                    if ( is_rtl() ){
                        echo 'גווני אפור';
                    }else{

                        _e('Grayscale', 'ynaap_domain') ;
                    }
                 ?>">
                <?php
                    if ( is_rtl() ){
                        echo 'גווני אפור';
                    }else{

                        _e('Grayscale', 'ynaap_domain') ;
                    }
                ?>
            </div>
            <div role="button" tabindex="1" aria-checked="false" class="access-control change-contrast change-contrast-high" data-access-type="contrast" data-access-value="high"
                 title="<?php
                    if ( is_rtl() ){
                        echo 'ניגודיות גבוהה';
                    }else{

                        _e('High contrast', 'ynaap_domain') ;
                    }
                 ?>">
                <?php
                    if ( is_rtl() ){
                        echo 'ניגודיות גבוהה';
                    }else{

                        _e('High contrast', 'ynaap_domain') ;
                    }
                ?>
            </div>
        </div>
        <div class="flash-controls controls-group">
            <h3><?php
                    if ( is_rtl() ){
                        echo 'חסום אנימציות פלאש';
                    }else{

                        _e('Block flashes', 'ynaap_domain') ;
                    }
                ?></h3>
            <div role="button" tabindex="1" aria-checked="false" class="access-control flash-block on" data-access-type="transition" data-access-value="on"
                 title="<?php
                    if ( is_rtl() ){
                        echo 'הפעלה';
                    }else{

                        _e('On', 'ynaap_domain') ;
                    }
                 ?>">
                <?php
                    if ( is_rtl() ){
                        echo 'הפעלה';
                    }else{

                        _e('On', 'ynaap_domain') ;
                    }
                ?>
            </div>
            <div role="button" tabindex="1" aria-checked="true" class="access-control flash-block off" data-access-type="transition" data-access-value="off"
                 title="<?php
                    if ( is_rtl() ){
                        echo 'כיבוי';
                    }else{

                        _e('Off', 'ynaap_domain');
                    }
                 ?>">
                <?php
                    if ( is_rtl() ){
                        echo 'כיבוי';
                    }else{

                        _e('Off', 'ynaap_domain') ;
                    }
                ?>
            </div>
        </div>
        <a href="#accessibility-controls" tabindex="1" class="access-control-close"><?php
                if ( is_rtl() ){
                        echo 'סגור';
                }else{

                    _e('Close', 'ynaap_domain') ;
                }
            ?></a>
    </div>


<?php };
add_filter('wp', 'yna_accessibility_content');
