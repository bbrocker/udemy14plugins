<?php
/**
Plugin Name:  MyPlugin
Description:  Udemy plugin course
Plugin URI:   billbrocker.com
Author:       Bill Brocker
Version:      0.1.0
Text Domain:  myplugin
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
 */

// exit if file is called directly
if (! defined( 'ABSPATH' ) ) {

    exit;

}

// Filter hook
add_filter('the_content',array('billbro_fix_wordpress','fix_spelling'));

class billbro_fix_wordpress
{
	static function fix_spelling($content)
	{

		$content= str_replace('Wordpress','WordPress',$content);
		// $content = $content . "<hr/>Thank you for watching this video tutorial.";
		return "$content";
	}

}


?>