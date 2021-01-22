<?php 

/**
* Plugin Name: My Plugin
* Plugin Uri: https://hridoymozumder.com
* Author: Hridoy Mozumder
* Author Uri: https:hrrarya.net
* Version: 0.0.1
* Description: This is simply a plugin creating for learing basis.
* Tags: tag1, tag2, hrrarya
* License: GPL V2
**/

defined( 'ABSPATH' ) || die('You can\'t access this file directly');

add_action('init', 'my_plugin_init');


function my_plugin_init() {
	add_shortcode('test', 'my_plugin_test_shortcode');
}

function my_plugin_test_shortcode($attrs) {
	$attrs = shortcode_atts(array(
		'message' => 'Hello, World!'
	), $attrs, 'test');
	return $attrs['message'];
}