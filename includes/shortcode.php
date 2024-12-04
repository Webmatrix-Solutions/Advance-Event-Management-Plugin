<?php 
function aem_event_list_shortcode() {
    $args = array(
        'post_type' => 'event',
        'meta_key' => '_aem_event_date',
        'orderby' => 'meta_value',
        'order' => 'ASC'
    );

    $query = new WP_Query($args);

    if (!$query->have_posts()) {
        return '<p>No Upcoming events found</p>';
    }

    $output = '<div class="aem-event-list">';

    while ($query->have_posts()) {
        $query->the_post();
        $location = get_post_meta(get_the_ID(), '_aem_event_location', true);
        $weather = aem_get_weather($location);
        $output .= '<div class="event-item">';
        $output .= '<h3>' . get_the_title() . '</h3>';
        $output .= '<p> Date: ' . esc_html(get_post_meta(get_the_ID(), '_aem_event_date', true)) . '</p>';
        $output .= '<p> Location: ' . esc_html($location) . '</p>';
        $output .= '<p> Weather: ' . esc_html($weather) . '</p>';
        $output .= '</div>';
    }

    $output .= '</div>';

    wp_reset_postdata();
    return $output;
}

add_shortcode('event_list', 'aem_event_list_shortcode');
