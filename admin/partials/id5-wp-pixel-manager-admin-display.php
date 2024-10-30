<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://id5.io
 * @since      1.0.0
 *
 * @package    Id5_Wp_Pixel_Manager
 * @subpackage Id5_Wp_Pixel_Manager/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="cleanup_options" action="options.php">

        <p>
            To install the ID5 initiating pixel, simply enter your ID5 Account Number in the box below. If you do not know your Account Number, please ask your ID5 representative or look in the <a href="https://console.id5.io" target="_blank">ID5 Console</a>.
        </p>

    	<?php
	        // Grab all options
	        $options = get_option($this->plugin_name);
	        $id5_account_number = $options['id5_account_number'];

    		settings_fields($this->plugin_name);
    		do_settings_sections($this->plugin_name);
    	?>

        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('ID5 Account Number', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-id5_account_number" id="<?php echo $this->plugin_name; ?>-id5_account_number-label">
                <span><?php esc_attr_e('ID5 Account Number', $this->plugin_name); ?></span>
                <input type="text" id="<?php echo $this->plugin_name; ?>-id5_account_number" name="<?php echo $this->plugin_name; ?>[id5_account_number]" value="<?php if(!empty($id5_account_number)) echo $id5_account_number; ?>" />
            </label>
        </fieldset>

        <?php submit_button(__('Save', $this->plugin_name), 'primary','submit', TRUE); ?>

    </form>

</div>