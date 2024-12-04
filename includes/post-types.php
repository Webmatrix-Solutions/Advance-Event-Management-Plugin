<?php 
function aem_register_event_post_type() {
	register_post_type('event',
		array(
			'labels'      => array(
				'name'          => __('Events', 'AEM'),
				'singular_name' => __('Event', 'AEM'),
			),
				'public'      => true,
                'supports'    => ['title', 'editor'],
				'has_archive' => true,
				'show_in_rest' => true,
		)
	);
}
add_action('init', 'aem_register_event_post_type');
