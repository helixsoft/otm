<?php

/*
Plugin Name: OTM GALLERY
Plugin URI: 
Description: A simple plugin that integrates with WordPress using custom post types!
Author: Helixsoft
Version: 0.5
Author URI: http://www.helixsoft.in
*/
/*Some Set-up*/
define('OTMG_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('OTMG_NAME', "Gallery");
define ("OTMG_VERSION", "0.1");
/*Files to Include*/
require_once('gallery-item-type.php');
function otm_get_gallery(){
							
							
							$gallery_query= "post_type=gallery-item";
							query_posts($gallery_query);
							if (have_posts()) : while (have_posts()) : the_post();
							$gallery.='<article class=\'one-fifth column\'>';
				                $gallery.='<a class=\'thumbLink\' href=\''.get_field('thumb_image',$post->ID).'\' rel=\'prettyPhoto[gallery1]\' title=\''.get_field('image_description',$post->ID).'\'>';
									$gallery.='<section class=\'thumbImage\'>';
				                        $gallery.='<div><span class=\'iconWrapper iconLink\'></span></div>';
				                    	$gallery.='<img src=\''.get_field('big_image',$post->ID).'\' alt=\'\' class=\'scale-with-grid\' />';
				                    $gallery.='</section>';
				                $gallery.='</a>';
							$gallery.='</article>';	
							endwhile; endif; wp_reset_query();
	return $gallery;
}


/**add the shortcode for the slider- for use in editor**/

function otm_insert_gallery($atts, $content=null){
$gallery= otm_get_gallery();
return $gallery;
}
add_shortcode('otm_gallery', 'otm_insert_gallery');
/**add template tag- for use in themes**/

function otm_gallery(){

	print otm_get_gallery();
}
?>