<?php

// add meta box function //
function aem_add_event_meta_boxes()
{
    add_meta_box(
        'aem_event_details',
        'Event Details',
        'aem_event_meta_box_callback', 
        'event',
        'normal',
        'high'
    );
}

add_action('add_meta_boxes', 'aem_add_event_meta_boxes', 20);

// callback function for meta box //
function aem_event_meta_box_callback($post) {
    $event_date = get_post_meta($post->ID, '_aem_event_date', true);
    $event_location = get_post_meta($post->ID, '_aem_event_location', true);

    // Nonce field for security //
    wp_nonce_field('aem_save_event_details', 'aem_event_nonce');
    ?>

    <p>
        <label for="aem_event_date">Event Date: </label>
        <input type="date" id="aem_event_date" name="aem_event_date" value="<?= esc_attr($event_date); ?>" />
    </p>

    <p>
        <label for="aem_event_location">Event Location: </label>
        <input type="text" id="aem_event_location" name="aem_event_location" value="<?= esc_attr($event_location); ?>" />
    </p>

    <?php 
}


function aem_save_event_details($post_id) {
    // check for nonce security //
    if(!isset($_POST['aem_event_nonce']) || !wp_verify_nonce($_POST['aem_event_nonce'], 'aem_save_event_details' )) {
        return $post_id;
    }

    // check for auto save //
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return $post_id;
    }

    // check user permission //
    if(!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }


    // save meta fields //
    if(isset($_POST['aem_event_date'] ) ) {
        update_post_meta($post_id, '_aem_event_date', sanitize_text_field($_POST['aem_event_date']));
    }

    if(isset($_POST['aem_event_location'] ) ) {
        update_post_meta($post_id, '_aem_event_location', sanitize_text_field($_POST['aem_event_location']));
    }

}

add_action('save_post', 'aem_save_event_details');