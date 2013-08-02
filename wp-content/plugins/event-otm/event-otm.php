<?php

/*
Plugin Name: OTM EVENT
Plugin URI: 
Description: A simple plugin that integrates with WordPress using custom post types!
Author: Helixsoft
Version: 0.5
Author URI: http://www.helixsoft.in
*/
/*Some Set-up*/
define('OTME_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('OTME_NAME', "OTM EVENT");
define ("OTME_VERSION", "0.1");
/*Files to Include*/
require_once('event-list-type.php');
function otme_get_event(){
							
							
							$event_query= "post_type=event-list";
							query_posts($event_query);
							if (have_posts()) : while (have_posts()) : the_post();
							$event.='<span class=\'accTrigger question\'><a href=\'#\'>'.get_the_title($post->ID).'</a></span>';
				                $event.='<div class=\'accContainer\'>';
				                $event.='<div class=\'accContent\'>';
				                $event.='<div class=\'accImage\'>';
				                $event.='<div class=\'accImageInner\'><img src=\''.get_field('event_image',$post->ID).'\'  class=\'scale-with-grid\' /></div>';
				                $event.='</div>';
				                $event.='<div class=\'accTitle\'>';
				                $event.='<h3>'.get_field('event_creative_text',$post->ID).'</h3>';
				                $event.='</div>';
				                $event.='<div class=\'accText\'>'.get_field('event_creative_text_detail',$post->ID).'</div>';
				                $event.='</div>';
				                $event.='</div>';
							endwhile; endif; wp_reset_query();
	return $event;
}


/**add the shortcode for the slider- for use in editor**/

function otme_insert_event($atts, $content=null){
$event= otme_get_event();
return $event;
}
add_shortcode('otme_event', 'otme_insert_event');
/**add template tag- for use in themes**/

function otme_event(){

	print otme_get_event();
}
?>