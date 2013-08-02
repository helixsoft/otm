<?php
define('OTME_NAME', "Event Lists");
define('OTME_SINGLE', "Event List");
define('OTME_TYPE', "event-list");
  
function otme_register() {  
    $args = array(  
        'label' => __(OTME_NAME),  
        'singular_label' => __(OTME_SINGLE),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title')  
       );  
  
    register_post_type(OTME_TYPE , $args ); 
}  

add_action('init', 'otme_register');

?>