<?php 

if( !defined('WP_LOAD_PATH') ) 
{
	/** classic root path if wp-content and plugins is below wp-config.php */
	$classic_root = dirname(dirname(dirname(dirname(__FILE__)))) . '/' ;
	
	if( file_exists( $classic_root . 'wp-load.php') )
	{
		define( 'WP_LOAD_PATH', $classic_root );
	}
	else
	{
		if( file_exists( $path . 'wp-load.php') )
		{
			define( 'WP_LOAD_PATH', $path);
		}
		else
		{
			exit("Could not find wp-load.php");
		}
	}
}
