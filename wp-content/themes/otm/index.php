<?php get_header();?>    
<!-- Start Salon Page -->	
	<div id="salon" class="page section">
	
		<div class="container">
		
			<div class="sixteen columns">
				
				<h1><span><?php the_field('over_the_moon_big_title_first_text',23)?></span><?php the_field('over_the_moon_big_title_second_text',23)?></h1>
				
			</div> 
            <div class="one-third column">
            	<img alt="" class="scale-with-grid salonImage" src="<?php the_field('over_the_moon_first_image',23) ?>" />
            </div>
            <div class="one-third column">
            	<img alt="" class="scale-with-grid salonImage" src="<?php the_field('over_the_moon_second_image',23) ?>" />
            </div>
            <div class="one-third column">
            	<img alt="" class="scale-with-grid salonImage" src="<?php the_field('over_the_moon_third_image',23) ?>" />
            </div>
            
            <div class="twelve columns offset-by-two">
            	<div class="introtext">
					<p><?php the_field('over_the_moon_first_text',23)?></p>
				</div>
            </div>
            
            <div class="sixteen columns">
            	<h1><span><?php the_field('behind_the_scene_big_title_first_text',23)?></span><?php the_field('behind_the_scene_big_title_second_text',23)?></h2>

            </div>
            
            <div class="four columns offset-by-two">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php the_field('behind_the_scene_first_image',23)?>" alt="" class="scale-with-grid" /></div> 
                <h4><?php the_field('behind_the_scene_first_person_name',23)?><br/></h4>
                <H5><span><?php the_field('behind_the_scene_first_person_position',23)?></span></H5>
            </div>
            <div class="four columns">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php the_field('behind_the_scene_second_image',23)?>" alt="" class="scale-with-grid" /></div>
                <h4><?php the_field('behind_the_scene_second_person_name',23)?></h4>
                <H5><span><?php the_field('behind_the_scene_second_person_position',23)?></span></H5>
            </div>
            <div class="four columns">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php the_field('behind_the_scene_third_image',23)?>" alt="" class="scale-with-grid" /></div>
                <h4><?php the_field('behind_the_scene_third_person_name',23)?></h4>
                <H5><span><?php the_field('behind_the_scene_third_person_position',23)?></span></H5>
            </div>
		</div>
	</div>
<!-- End Salon Page -->     
       

<!--start parallax 1-->
     <div id="parallax-1" class="parallax fixed" style="background-image: url(<?php echo THEMEROOT?>/images/parallax-1.jpg);">
         <div class="quoteWrap">
            <div class="quote">
                <div class="container">
                     <div class="sixteen columns">
                        <div class="imageClip">
                            <img alt="" src="<?php echo THEMEROOT?>/images/model-clipped.png" class="scale-with-grid" />
                        </div>
                    </div>
                </div>  
            </div>
         </div>
         
     </div>
<!--end parallax-->

<!-- Start Awards Page -->
	<div id="awards" class="page section">
		
		<div class="container">
			<div class="sixteen columns">
				<h1><span><?php the_field('bar_&_coctails_big_title_first_text',23)?></span><?php the_field('bar_&_coctails_big_title_second_text',23)?></h1>
				<div class="introtext">
					<p><?php the_field('bar_&_coctails_text',23)?></p>
				</div>
			</div>
		</div>
				
		<div class="container">
		
			<div class="eight columns">
            	<div class="awardsImage">
					<img class="scale-with-grid" alt="" src="<?php the_field('bar_&_coctails_image',23)?>" /> 
                </div>                                                
			</div>
				
			<div class="eight columns awardsListing">
				<h2><?php the_field('menu-title',23)?></h2>
                <!--Plugin Start-->
				<?php otm_menu();?>
                <!--Plugin End-->                                                 
			</div>
		      <div class="clear"></div>
        	<div class="ten columns " style="margin:0 auto;float:none;">
                <h2 class="sectionTitle"><?php the_field('take_a_tour_text',23)?></h2>
                <p><?php the_field('take_a_tour_small_text',23)?></p>
                <div class="video-container">
                    <iframe  src="http://www.youtube.com/embed/Mdw4jcMeiD4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>            
		</div>
	</div>
<!-- End Awards Page --> 
     

<!--start parallax 2-->
     <!--  -->
     <div id="parallax-2" class="parallax fixed" style="background-image: url(<?php echo THEMEROOT?>/images/parallax-3.jpg);">
         <div class="quoteWrap">
            <div class="quote">
                <div class="container">
                    <div class="sixteen columns">
                        <div class="imageClip3">
                            <img alt="" src="<?php echo THEMEROOT?>/images/model-clipped-2.png" class="scale-with-grid" />
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
<!--end parallax 2-->   

<!-- Start Services Page -->
	<div id="services" class="page section">
	
		<div class="container">
		
			<div class="sixteen columns">
				<h1><span><?php the_field('our_kitchen_big_title_first_text',23)?></span><?php the_field('our_kitchen_big_title_second_text',23)?></h1>
				<div class="introtext">
					<p><?php the_field('our_kitchen_small_text',23)?></p>
				</div>
			</div>  
			<h2><?php the_field('our_kitchen__cuisine_title',23)?></h2>
			<!-- Start Icons -->
			<div class="one-third column">
				<div class="serviceImage" style="background-image: url(<?php the_field('our_kitchen_cuisine_first_image',23)?>)"><h4>Italian Cuisine</h4></div>
				<p class="description"><?php the_field('our_cuisine_first_text',23)?></p>                                             
			</div>	
			<div class="one-third column">
				<div class="serviceImage" style="background-image: url(<?php the_field('our_kitchen_cuisine_second_image',23)?>)"><h4>Continental Cuisine</h4></div>
				<p class="description"><?php the_field('our_cuisine_second_text',23)?></p>  
                                                               
			</div>	
			<div class="one-third column">
				<div class="serviceImage" style="background-image: url(<?php the_field('our_kitchen_cuisine_third_image',23)?>)"><h4>Attention to Details</h4></div>
				<p class="description"><?php the_field('our_cuisine_third_text',23)?></p> 
                                                                
			</div>	
			<!-- End Table -->	
				 

            <div class="fourteen columns marginTop offset-by-one">
                <p class="introtext"><?php the_field('our_specialties_above_field',23) ?></p>	
            </div>
            
            <div class="sixteen columns">
            	<h2><?php the_field('our_specialties_title_one',23) ?></h2>
                <p class="introtext"><?php the_field('our_specialties_text',23) ?></p>
            </div>
            
            <div class="four columns offset-by-two">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php the_field('our_specialties_image_first',23) ?>" alt="" class="scale-with-grid" /></div> 
            </div>
            <div class="four columns">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php the_field('our_specialties_image_second',23) ?>" alt="" class="scale-with-grid" /></div>
            </div>
            <div class="four columns">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php the_field('our_specialties_image_third',23) ?>" alt="" class="scale-with-grid" /></div>
            </div>


     	</div>
        
     </div>
<!--end services-->  

<!--start parallax 3-->
     <div id="parallax-3" class="parallax fixed" style="background-image: url(<?php echo THEMEROOT?>/images/crowd-dancing.jpg);">
         <div class="quoteWrap">
            <div class="quote">
                <div class="container">
                    <div class="sixteen columns">
                        <div class="imageClip3">
                            <img alt="" src="<?php echo THEMEROOT?>/images/shapes-black.png" class="scale-with-grid" />
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
<!--end parallax 3-->    
    
<!--start Promotions -->
     <div id="promotions" class="page section">
     
        <div class="container">
        
        	<div class="sixteen columns">
             	<h1><span><?php the_field('upcoming_event_title_first',23) ?></span><?php the_field('upcoming_event_title_second',23) ?></h1>
            </div>
            
   			<div class="sixteen columns">
        	<p class="introtext"><?php the_field('upcoming_event_text',23) ?></p>
                <!--Plugin start-->
                <?php otme_event();?>
                <!--Plugin End-->
			</div>
            
     	</div>
    
     </div>
<!--end Promotions--> 

<!--start parallax 4-->
     <!--<div id="parallax-4" class="parallax fixed" style="background-image: url(images/young-dancing.jpg);">
         <div class="quoteWrap">
            <div class="quote">
            </div>
         </div>
     </div> -->
     <div id="parallax-4" class="parallax fixed" style="background-image: url(<?php echo THEMEROOT?>/images/young-dancing.jpg);">
         <div class="quoteWrap">
            <div class="quote">
                <div class="container">
                    <div class="sixteen columns">
                        <div class="imageClip4">
                            <img alt="" src="<?php echo THEMEROOT?>/images/shapes-gold.png" class="scale-with-grid" />
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
<!--end parallax 4-->

<!--start Gallery -->
     <div id="gallery" class="page section">
        	<div class="container">
                <div class="sixteen columns">
				<h1><span><?php the_field('our_gallery_title_first',23) ?></span><?php the_field('our_gallery_title_second',23) ?></h1>
                <h3><?php the_field('our_gallery_text',23) ?></h3>
			</div>
            <div class="da-thumbs">
			<!--Plugin start-->
                <?php otm_gallery();?>
                <!--Plugin End--> 
			</div>
     </div></div>
<!--end Gallery--> 

<!--start junoon -->
     <div id="junoon" class="page section">
            <div class="container">
                <div class="sixteen columns">
                <h1><span><?php the_field('our_junoon_title_first',23) ?></span> <?php the_field('our_junoon_title_second',23) ?></h1>
                <h3><?php the_field('our_junoon_text',23) ?></h3>
            </div>
            <div class="da-thumbs">
            <!--Plugin start-->
                <div class="four columns offset-by-two">
                    <div class="teamOverlay"></div> 
                    <div class="teamImage"><img src="<?php the_field('our_junoon_image_first',23) ?>" alt="" class="scale-with-grid" /></div> 
                </div>
                <div class="four columns">
                    <div class="teamOverlay"></div> 
                    <div class="teamImage"><img src="<?php the_field('our_junoon_image_second',23) ?>" alt="" class="scale-with-grid" /></div>
                </div>
                <div class="four columns">
                    <div class="teamOverlay"></div> 
                    <div class="teamImage"><img src="<?php the_field('our_junoon_image_third',23) ?>" alt="" class="scale-with-grid" /></div>
                </div>
            <!--Plugin End-->            
            </div>
     </div></div>
<!--end junoon-->
<!--start High -->
     <div id="high" class="page section">
            <div class="container">
                <div class="sixteen columns">
                <h1><span><?php the_field('our_high_title_first',23) ?></span> <?php the_field('our_high_title_second',23) ?></h1>
                <h3><?php the_field('our_high_text',23) ?></h3>
            </div>
            <div class="da-thumbs">
            <!--Plugin start-->
               <div class="four columns offset-by-two">
                    <div class="teamOverlay"></div> 
                    <div class="teamImage"><img src="<?php the_field('our_high_image_first',23) ?>" alt="" class="scale-with-grid" /></div> 
                </div>
                <div class="four columns">
                    <div class="teamOverlay"></div> 
                    <div class="teamImage"><img src="<?php the_field('our_high_image_second',23) ?>" alt="" class="scale-with-grid" /></div>
                </div>
                <div class="four columns">
                    <div class="teamOverlay"></div> 
                    <div class="teamImage"><img src="<?php the_field('our_high_image_third',23) ?>" alt="" class="scale-with-grid" /></div>
                </div>
            <!--Plugin End-->            
            </div>
     </div></div>
<!--end High-->
<!--start parallax 5-->
     <div id="parallax-5" class="parallax fixed" style="background-image: url(<?php echo THEMEROOT?>/images/parallax-3.jpg);">
         <div class="quoteWrap">
            <div class="quote">
                <div class="container">
                    <div class="sixteen columns">
                        <div class="imageClip3">
                            <img alt="" src="<?php echo THEMEROOT?>/images/model-clipped-3.png" class="scale-with-grid" />
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>

<!--end parallax 5-->
   
<!--start contact-->
     <div id="contact" class="page section">
        
        <div class="container">   
            <div id="contact_form">
                <div class="twelve columns offset-by-two formWrap">
                    <h2>Request a booking</h2>
                    <?php 
                        $my_id = 169;
                        $post_id_169 = get_post($my_id);
                        $content = $post_id_169->post_content;
                        $content = apply_filters('the_content', $content);
                        echo $content;
                    ?>
                </div>
            </div>
        </div>
         
           
        <div class="embed-container">      
            	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hotel+Daspalla,+Road+No+37,+Jubilee+Hills,+CBI+Colony,+Hyderabad,+Andhra+Pradesh&amp;sll=17.437845,78.39597&amp;sspn=17.437845,78.39597&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Hotel+Daspalla,+Road+No+37,+Jubilee+Hills,+CBI+Colony,+Hyderabad,+Andhra+Pradesh&amp;z=14&amp;ll=17.437845,78.39597&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Hotel+Daspalla,+Road+No+37,+Jubilee+Hills,+CBI+Colony,+Hyderabad,+Andhra+Pradesh&amp;sll=17.437845,78.39597&amp;sspn=17.437845,78.39597&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Hotel+Daspalla,+Road+No+37,+Jubilee+Hills,+CBI+Colony,+Hyderabad,+Andhra+Pradesh&amp;z=14&amp;ll=17.437845,78.39597" style="color:#d2b55b;text-align:left">View Larger Map</a></small>
        </div>
        
        <div class="container">
        
            <div class="sixteen columns">
                <h1><?php the_field('contact_title_first',23)?><span><?php the_field('contact_title_second',23)?></span></h1>
            </div> 
               
            <div class="four columns marginTop contactDetails offset-by-two">
                    <p class="contactAddress"><?php the_field('contact_address_first',23)?><br/><?php the_field('contact_address_second',23)?><br/><?php the_field('contact_address_third',23)?></p>
            </div>
            <div class="four columns marginTop contactDetails">
                    <p class="contactPhone"><?php the_field('contact_phone_number',23)?> <a><?php the_field('contact_phone_number_value',23)?></a></p>
                    <p class="contactEmail"><?php the_field('contact_email',23)?> <a href="#"><?php the_field('contact_email_value',23)?> </a></p>
                    <p class="contactSkype"><?php the_field('contact_skype',23)?> <a href="#"><?php the_field('contact_skype_value',23)?> </a></p>
            </div>
            <div class="four columns marginTop contactDetails">
                    <p class="contactTime">
                            <?php the_field('contact_timing_first',23)?><br/>
                            <?php the_field('contact_timing_second',23)?><br/>
                    </p>
            </div>
            <div class="sixteen columns marginTop">
                <h2>Get the latest news & offers</h2>
               <?php 
                        $my_id = 174;
                        $post_id_174 = get_post($my_id);
                        $content = $post_id_174->post_content;
                        $content = apply_filters('the_content', $content);
                        echo $content;
                    ?>           
            </div>       
        </div>    
        

     </div>
<!--end contact--> 
    
<!--start parallax 6-->
     <div id="parallax-6" class="parallax fixed" style="background-image: url(<?php echo THEMEROOT?>/images/parallax-6.jpg);">
     </div>
<!--end parallax 6-->
 
<?php get_footer();?>