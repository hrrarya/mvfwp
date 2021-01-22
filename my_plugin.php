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



register_activation_hook(__FILE__, 'my_plugin_register_activation_hook');


register_deactivation_hook(__FILE__, 'my_plugin_register_deactivation_hook');


register_uninstall_hook(__FILE__, 'my_plugin_register_uninstall_hook');


function my_plugin_register_activation_hook() {
	add_option('updateTitle', 'Your title is hacked!');
}
function my_plugin_register_deactivation_hook() {
	delete_option('updateTitle');
}
function my_plugin_register_uninstall_hook() {}