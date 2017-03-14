<?php

/**
 * Event Callback Shortcode creation.
 *
 * @author     Time.ly Network Inc.
 * @since      2.0
 *
 * @instantiator new
 * @package      AI1EC
 * @subpackage   AI1EC.Event
 */
class Ai1ec_Event_Callback_Shortcode extends Ai1ec_Event_Callback_Abstract {
}

/* Attempt to strip out unwanted br tags... */

		$array = array (
			'<p>[' => '[', 
			']</p>' => ']', 
			']<br />' => ']'
		);
	
		$page_content = strtr($page_content, $array);		
		
		/* END Attempt to strip out unwanted br tags... */			
						
		return $page_content;