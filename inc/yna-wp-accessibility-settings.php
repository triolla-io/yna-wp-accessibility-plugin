<?php

/* add the below code to your header file after the opening <body> tag

get_template_part('accessibility', 'controls')

*/?>

<?php

if (!defined('ABSPATH')){
    exit;
}

// Create the Menu link

function yna_accessibility_options_menu_link(){
    add_options_page('Yna Accessibility Plugin', 'yna accessibility plugin', 'manage_options', 'yna-accessibility-options', 'yna_accessibility_options_content');

}

//Create Options page content
function yna_accessibility_options_content(){

// init global variable for options

    global $yna_accessibility_options;

    ob_start();?>

    <div class="wrap">
        <h2><?php _e('Yna Accessibility Plugin', 'ynaap_domain') ;?></h2>
        <p>
            <?php _e('Settings For the Yna Accessibility Plugin', 'ynaap_domain') ;?>
        </p>
        <form action="options.php" method="post">

            <?php settings_fields('yna_accessibility_settings_group') ;?>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="yna_accessibility_settings[enable]"><i class="dashicons dashicons-universal-access"></i>
                            <?php _e('Enable Accessibility Options', 'ynaap_domain') ;?>
                        </label>
                    </th>
                    <td>
                        <input type="checkbox" name="yna_accessibility_settings[enable]" value="1" <?php checked( '1', $yna_accessibility_options[ 'enable']) ;?> id="yna_accessibility_settings[enable]">
                    </td>
                </tr>
                </tbody>

            </table>
            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'ynaap_domain') ;?>">
            </p>
        </form>
    </div>

    <?php

    echo ob_get_clean();

}

add_action('admin_menu','yna_accessibility_options_menu_link');

//register the settings

function yna_accessibility_register_settings(){
    register_setting('yna_accessibility_settings_group', 'yna_accessibility_settings');

}
add_action('admin_init', 'yna_accessibility_register_settings');
