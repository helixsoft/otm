<?php
define('OTMM_NAME', "Menu Items");
define('OTMM_SINGLE', "Menu Item");
define('OTMM_TYPE', "menu-item");
  
function otm_register() {  
    $args = array(  
        'label' => __(OTMM_NAME),  
        'singular_label' => __(OTMM_SINGLE),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title')  
       );  
  
    register_post_type(OTMM_TYPE , $args ); 
}  

add_action('init', 'otm_register');

?>