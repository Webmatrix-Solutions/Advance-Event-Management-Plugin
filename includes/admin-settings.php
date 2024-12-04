<?php 

function aem_create_settings_page() {
    add_options_page( 
        __( 'Event Manager Settings', 'AEM' ),
        __( 'Event Manager', 'AEM' ),
        'manage_options',
        'aem-settings',
        'aem_settings_page_html'
    );
} 

function aem_settings_page_html() {
    if (!current_user_can('manage_options')) {
        return;
    }

    if (isset($_POST['aem_api_key'])) {
        check_admin_referer('aem_api_key_nonce');
        
        update_option('aem_api_key', sanitize_text_field($_POST['aem_api_key']));
        
        echo '
        <div class="updated">
            <p>' . __('API Key Saved', 'AEM') . '</p>
        </div>';
    }

    $api_key = get_option('aem_api_key', '');
?>

    <div class="wrap">
        <h3><?php echo esc_html__('Event Manager Settings', 'AEM'); ?></h3>
        <form method="POST" action="">
            <?php wp_nonce_field('aem_api_key_nonce'); ?>
            <label for="aem_api_key"><?php echo esc_html__('Weather API Key:', 'AEM'); ?></label>
            <input type="text" name="aem_api_key" value="<?php echo esc_attr($api_key); ?>" class="regular-text" />
            <input type="submit" name="aem_save_api_key" id="aem_save-api_key" class="button-primary" value="<?php echo esc_attr__('Save', 'AEM'); ?>" />
        </form>
    </div>

<?php
}
