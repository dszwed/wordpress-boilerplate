<?php
/**
 * Plugin Name:     Contact Form
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     contact-form
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Contact_Form
 */

add_shortcode('contact-form', function($atts, $content = '') {
	$defaults = [];

	$shortcode_atts = shortcode_atts($defaults, $atts);

	include('templates/form.php');
});

add_action('wp_ajax_nopriv_send-form', function(){
	check_ajax_referer('send-form');

	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$message = filter_input(INPUT_POST, 'message', FILTER_);

	if(!$email) {
		wp_send_json_error();
	}

	if(empty($message)) {
		wp_send_json_error();
	}

	$result = wp_mail('admin@gootek.pl', 'Message from ' . $email, $message);

	if($result) {
		wp_send_json_success();
	}

	wp_send_json_error();
});
