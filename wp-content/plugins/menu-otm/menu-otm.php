<?php

/*
Plugin Name: OTM SMALL MENU
Plugin URI: 
Description: A simple plugin that integrates with WordPress using custom post types!
Author: Helixsoft
Version: 0.5
Author URI: http://www.helixsoft.in
*/
/*Some Set-up*/
define('OTM_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('OTM_NAME', "Helixsoft");
define ("OTM_VERSION", "0.1");
/*Files to Include*/
require_once('menu-item-type.php');
function otm_get_menu(){
							
							
							$menu_query= "post_type=menu-item";
							query_posts($menu_query);
							if (have_posts()) : while (have_posts()) : the_post();
							$menu.='<h3>'.get_the_title($post->ID).'</h3>';
		                	$menu.='<ul>';
			                	$menu.='<li><span>'.get_field('menu_item_name_1',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_2',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_3',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_4',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_5',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_6',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_7',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_8',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_9',$post->ID) .'</span></li>';
			                	$menu.='<li><span>'.get_field('menu_item_name_10',$post->ID) .'</span></li>';
		                    $menu.='</ul>';	
							endwhile; endif; wp_reset_query();
	return $menu;
}


/**add the shortcode for the slider- for use in editor**/

function otm_insert_menu($atts, $content=null){
$menu= otm_get_menu();
return $menu;
}
add_shortcode('otm_menu', 'otm_insert_menu');
/**add template tag- for use in themes**/

function otm_menu(){

	print otm_get_menu();
}
?>