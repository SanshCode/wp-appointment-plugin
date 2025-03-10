<?php
/*
Plugin Name: Appointment Booking
Plugin URI:  https://yourwebsite.com
Description: A simple appointment booking plugin with React.js UI.
Version:     1.0
Author:      Anshul
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue React frontend
function ab_enqueue_scripts() {
    wp_enqueue_script('ab-react-app', plugins_url('/build/index.js', __FILE__), array(), '1.0', true);
    wp_enqueue_style('ab-style', plugins_url('/build/index.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'ab_enqueue_scripts');

// Create a shortcode to display the booking UI
function ab_booking_shortcode() {
    return '<div id="ab-booking-app"></div>';
}
add_shortcode('appointment_booking', 'ab_booking_shortcode');
