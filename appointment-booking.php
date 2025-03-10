<?php
/*
Plugin Name: Appointment Booking
Description: React-based appointment booking system without user login.
Version: 1.0
Author: Anshul
*/

if (!defined('ABSPATH')) {
    exit;
}

// Enqueue React build files
function ab_enqueue_react_app() {
    $build_dir = plugin_dir_path(__FILE__) . 'build/';
    $build_url = plugin_dir_url(__FILE__) . 'build/';

    // CSS
    $css_files = glob($build_dir . 'static/css/main.*.css');
    if ($css_files) {
        wp_enqueue_style(
            'ab-react-style',
            $build_url . 'static/css/' . basename($css_files[0]),
            array(),
            filemtime($css_files[0])
        );
    }

    // JS
    $js_files = glob($build_dir . 'static/js/main.*.js');
    if ($js_files) {
        wp_enqueue_script(
            'ab-react-script',
            $build_url . 'static/js/' . basename($js_files[0]),
            array(),
            filemtime($js_files[0]),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'ab_enqueue_react_app');

// Add shortcode to display the React app
function ab_booking_shortcode() {
    return '<div id="ab-booking-app"></div>';
}
add_shortcode('appointment_booking', 'ab_booking_shortcode');
