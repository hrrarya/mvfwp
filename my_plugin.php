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



// ACTION HOOKS
do_action(); // We use it to create our own action.

add_action(); // We use it to perform actions on do_action(). We can manipulate function whatever function is created with do_action() hook.

remove_action(); // We use it to remove an action.

has_action(); // Conditional statement. We use it to check an action already exists in codebase or not.


// FILTER HOOK

apply_filters(); // We use it to apply our own  filters
 
add_filter(); // We use it to add filter.
 
remove_filter(); // We use it to remove a filter.

has_filter(); // We use it to check a filter already exists or not