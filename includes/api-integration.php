<?php 
function aem_get_weather($location) {
    $api_key = get_option('aem_api_key', '');

    if (empty($api_key)) {
        return 'Weather data unavailable: API key not set';
    }

    $url = "https://api.openweathermap.org/data/2.5/weather?appid={$api_key}&q=" . urlencode($location);

    $response = wp_remote_get($url);

    if (is_wp_error($response)) {
        return 'Weather data unavailable';
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (isset($data['weather']) && isset($data['weather'][0]['description'])) {
        return $data['weather'][0]['description'];
    } else {
        return 'Weather data unavailable'; 
    }
}
