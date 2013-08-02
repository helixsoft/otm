<?php
define('OTMG_NAME', "Gallery Lists");
define('OTMG_SINGLE', "Gallery List");
define('OTMG_TYPE', "gallery-list");
  
function otmg_register() {  
    $args = array(  
        'label' => __(OTMG_NAME),  
        'singular_label' => __(OTMG_SINGLE),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title')  
       );  
  
    register_post_type(OTMG_TYPE , $args ); 
}  

add_action('init', 'otmg_register');

?>