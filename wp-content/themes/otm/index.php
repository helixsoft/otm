<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( $show='charset' );?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( $sep = '&raquo;', $display = true, $seplocation = 'right' )?><?php bloginfo( $show='name' );?></title>

		
	<!-- CSS Styles -->
     <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT?>/style.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT?>/css/skeleton.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT?>/css/layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT?>/css/prettyPhoto.css">
     <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT?>/css/style2.css">
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
    
    <!-- JavaScripts -->
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/prefixfree.min.js"></script>
	<script type="text/javascript" src="<?php echo THEMEROOT?>/js/modernizr-2.6.2.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/iOS-timer.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/jquery.sticky.js"></script>

	<script type="text/javascript">
		//<![CDATA[
		var isMobile = false;
		if( navigator.userAgent.match(/Android/i) ||
			navigator.userAgent.match(/webOS/i) ||
			navigator.userAgent.match(/iPhone/i) ||
			navigator.userAgent.match(/iPad/i) ||
			navigator.userAgent.match(/iPod/i) ||
			navigator.userAgent.match(/BlackBerry/i)){
			isMobile = true;
		}
		/*iOS5 fixed-menu fix*/
		var iOS5 = false;
		if (navigator.userAgent.match(/OS 5(_\d)+ like Mac OS X/i)){
			iOS5 = true;
		}
		//]]>
	</script>
    <script>
            soundManager.setup({
            
                url: 'swf/',
                flashVersion: 9,
                useFlashBlock: false, // optionally, enable when you're ready to dive in

            });
            
            threeSixtyPlayer.config.scaleFont = (navigator.userAgent.match(/msie/i)?false:true);
            threeSixtyPlayer.config.showHMSTime = true;

            // enable some spectrum stuffs

            threeSixtyPlayer.config.useWaveformData = true;
            threeSixtyPlayer.config.useEQData = true;

            // enable this in SM2 as well, as needed

            if (threeSixtyPlayer.config.useWaveformData) {
              soundManager.flash9Options.useWaveformData = true;
            }
            if (threeSixtyPlayer.config.useEQData) {
              soundManager.flash9Options.useEQData = true;
            }
            if (threeSixtyPlayer.config.usePeakData) {
              soundManager.flash9Options.usePeakData = true;
            }

            if (threeSixtyPlayer.config.useWaveformData || threeSixtyPlayer.flash9Options.useEQData || threeSixtyPlayer.flash9Options.usePeakData) {
              // even if HTML5 supports MP3, prefer flash so the visualization features can be used.
              soundManager.preferFlash = true;
            }

            // favicon is expensive CPU-wise, but can be used.
            if (window.location.href.match(/hifi/i)) {
              threeSixtyPlayer.config.useFavIcon = true;
            }

            if (window.location.href.match(/html5/i)) {
              // for testing IE 9, etc.
              soundManager.useHTML5Audio = true;
            }
</script>
    
	<script>
		//<![CDATA[
		$(document).ready(function(){
			$("nav").sticky({topSpacing:0});
		});
		//]]>
	</script>
    
	<script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-39966307-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>

</head>
<body>
    
<!-- Start Homepage -->
	<div id="homepage" class="homepage section">
		
		<div class="container">
			<div class="sixteen columns">
                <audio autoplay loop>
      <source src="horse.mp3">
  </audio>
				<img alt="" class="logo" src="<?php echo THEMEROOT?>/images/logo.png" />
			</div>
			
			 <ul class="cb-slideshow">
                <li><span>Image 01</span></li>
                <li><span>Image 02</span></li>
                <li><span>Image 03</span></li>
                <li><span>Image 04</span></li>
                <li><span>Image 05</span></li>
                <li><span>Image 06</span></li>
            </ul>
			
		</div>
	</div>      
    <aside class="left">
        <div style="float: left">
            <div class="ui360 ui360-vis"><a href="music.mp3"></a></div>
        </div>
    </aside>
	
<!--End homepage -->

<!-- Start Navigation -->
	<nav>
	
		<div class="container">
			
			<div class="sixteen columns">
				
				<!-- Start Nav Menu -->
				<ul class="menu" id="nav">
					<li><a href="#homepage">Home</a></li>
                    <li><a href="#salon">Over the Moon</a></li>
                    <li><a href="#awards">Bar & Coctails</a></li>
					<li><a href="#services">Kitchen</a></li>
					<li><a href="#promotions">Events</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#homepage">Junoon</a></li>
                    <li><a href="#homepage">High</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- End Nav Menu -->
				<!-- Start Dropmenu for mobile -->		
				<select class="dropmenu" name="dropmenu" onChange="moveTo(this.value)">
					<option value="" selected="selected">Menu</option>
					<ul class="menu" id="nav">
					<li><a href="#homepage">Home</a></li>
                    <li><a href="#salon">Over the Moon</a></li>
                    <li><a href="#awards">Bar & Coctails</a></li>
					<li><a href="#services">Kitchen</a></li>
					<li><a href="#promotions">Events</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#homepage">Junoon</a></li>
                    <li><a href="#homepage">High</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				</select>
				<!-- End Dropmenu for mobile -->
				
			</div>
	
		</div>
	
	</nav>
<!-- End Navigation -->	
     
<!-- Start Salon Page -->	
	<div id="salon" class="page section">
	
		<div class="container">
		
			<div class="sixteen columns">
				
				<h1><span>Over The</span> Moon</h1>
				
			</div> 
            
            <div class="one-third column">
            	<img alt="" class="scale-with-grid salonImage" src="<?php echo THEMEROOT?>/images/salon1.jpg" />
            </div>
            <div class="one-third column">
            	<img alt="" class="scale-with-grid salonImage" src="<?php echo THEMEROOT?>/images/salon2.jpg" />
            </div>
            <div class="one-third column">
            	<img alt="" class="scale-with-grid salonImage" src="<?php echo THEMEROOT?>/images/salon3.jpg" />
            </div>
            
            <div class="twelve columns offset-by-two">
            	<div class="introtext">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Maecenas ac augue</strong> at erat <a href="#homepage">hendrerit dictum</a>. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit dictum praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
				</div>
            </div>
            
            <div class="sixteen columns">
            	<h1><span>Behind</span> the Scene</h2>

            </div>
            
            <div class="four columns offset-by-two">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php echo THEMEROOT?>/images/team1.jpg" alt="" class="scale-with-grid" /></div> 
                <h4>Sanjay Bahtla <br/></h4>
                <H5><span>Co-Owner</span></H5>
            </div>
            <div class="four columns">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php echo THEMEROOT?>/images/team2.jpg" alt="" class="scale-with-grid" /></div>
                <h4>Sanjeev Mehta</h4>
                <H5><span>Co-Owner</span></H5>
            </div>
            <div class="four columns">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php echo THEMEROOT?>/images/team3.jpg" alt="" class="scale-with-grid" /></div>
                <h4>Kapil Lal</h4>
                <H5><span>General Manager</span></H5>
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
				<h1><span>Bar &</span> Coctails</h1>
				<div class="introtext">
					<p>Morbi suscipit interdum molestie. Aenean fringilla dui magna. <span class="highlight">Pellentesque habitant</span> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis porttitor, velit et pretium porttitor, tellus massa porttitor tortor, accumsan cursus nulla nisi at tellus. <strong>Lorem ipsum dolor sit amet,</strong> consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est.</p>
				</div>
			</div>
		</div>
				
		<div class="container">
		
			<div class="eight columns">
            	<div class="awardsImage">
					<img class="scale-with-grid" alt="" src="<?php echo THEMEROOT?>/images/awards.jpg" /> 
                </div>                                                
			</div>
				
			<div class="eight columns awardsListing">
				<h2>A Tale Of Ale</h2>
				<h3>Whikey</h3>
                <ul>
                	<li><span>Dirty Mojito - Lorem ipsum .</span></li>
                    <li><span>Dirty Mojito - Lorem ipsum dolot.</span></li>
                    <li><span>Dirty Mojito - Lorem ipsum dolor .</span></li>
                </ul>
                <h3>Taquila</h3>
                <ul>
                	<li><span>Dirty Mojito - Lorem ipsum .</span></li>
                </ul>
                <h3>Vodka</h3>
                <ul>
                	<li><span>Dirty Mojito - Lorem ipsum dolor sit.</span></li>
                    <li><span>Dirty Mojito - Lorem sit amet.</span></li>
                </ul>
                <h3>Wines</h3>
                <ul>
                	<li><span>Dirty Mojito - Lorem sit amet.</span></li>
                </ul>
                
                <h3>Coctails</h3>
                <ul>
                	<li><span>Dirty Mojito - Lorem  dolor sit amet.</span></li>
                </ul>                                                 
			</div>
		
        	<div class="sixteen columns ">
                <h2 class="sectionTitle">Take a Tour of our Premesis</h2>
                <p>iam nonummy nibh euismod tincidunt ut laoreet dolore m2agna aliquam erat volutpat. Ut wisi enim ad</p>
                <div class="video-container">
                    <iframe width="1280" height="720" src="http://www.youtube.com/embed/Mdw4jcMeiD4" frameborder="0" allowfullscreen></iframe>
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
				<h1><span>Our</span> Kitchens</h1>
				<div class="introtext">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
				</div>
			</div>  
			
			<!-- Start Icons -->
			<div class="one-third column">
				<h2>Italian <br/>Cuisine</h2>
				<div class="serviceImage" style="background-image: url(<?php echo THEMEROOT?>/images/cut.jpg)"><h4>Italian Cuisine</h4></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus.</p>                                             
			</div>
					
			<div class="one-third column">
				<h2>Continental <br/>Cuisine</h2>
				<div class="serviceImage" style="background-image: url(<?php echo THEMEROOT?>/images/colour.jpg)"><h4>Continental Cuisine</h4></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus.</p>  
                                                               
			</div>
					
			<div class="one-third column">
				<h2>Eye For<br/> Details</h2>
				<div class="serviceImage" style="background-image: url(<?php echo THEMEROOT?>/images/style.jpg)"><h4>Attention to Details</h4></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus.</p> 
                                                                
			</div>	
			<!-- End Table -->	
				 

            <div class="fourteen columns marginTop offset-by-one">
                <p class="introtext"><span class="dropcap">V</span>ivamus lacinia metus at tellus commodo eu faucibus ante ultricies. Nullam sed diam eget justo vehicula auctor nec non turpis. Maecenas lacus nulla, scelerisque vel porta nec, rhoncus vitae diam. Suspendisse feugiat metus sit amet justo commodo placerat elementum dui venenatis. Aenean euismod laoreet magna, vel egestas sem convallis quis. </p>	
            </div>
            
            <div class="sixteen columns">
            	<h2>Our Specialities</h2>
                <p class="introtext">New and happening, Ovet the Moon offors you a unique, unforgetable experience and a blend of old and new.</p>
            </div>
            
            <div class="four columns offset-by-two">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php echo THEMEROOT?>/images/product1.jpg" alt="" class="scale-with-grid" /></div> 
            </div>
            <div class="four columns">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php echo THEMEROOT?>/images/product2.jpg" alt="" class="scale-with-grid" /></div>
            </div>
            <div class="four columns">
            	<div class="teamOverlay"></div> 
            	<div class="teamImage"><img src="<?php echo THEMEROOT?>/images/product3.jpg" alt="" class="scale-with-grid" /></div>
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
             	<h1><span>Upcoming</span> Events</h1>
            </div>
            
   			<div class="sixteen columns">
        	<p class="introtext">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. <br/>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</p>

                <!-- Accordion #1 -->
                <span class="accTrigger question"><a href="#">Tropical Thursdays</a></span>
                <div class="accContainer">
                    <div class="accContent">
                    	<div class="accImage">
                        	<div class="accImageInner">
                        		<img src="<?php echo THEMEROOT?>/images/promo-1.jpg" alt="" class="scale-with-grid" />
                            </div>
                        </div>
                        <div class="accTitle">
                            <h3>Try our tropical Thursdays for tempting and refresing drinks this summer.</h3>
                        </div>
                        <div class="accText">
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. </p>
                            <p>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            </p>
                        </div>
                    </div>
                </div>
                    
                <!-- Accordion #2 -->
                <span class="accTrigger question"><a href="#">Firday Night Live</a></span>
                <div class="accContainer">
                    <div class="accContent">
                    	<div class="accImage">
                        	<div class="accImageInner">
                        		<img src="<?php echo THEMEROOT?>/images/promo-2.jpg" alt="" class="scale-with-grid" />
                            </div>
                        </div>
                        <div class="accTitle">
                            <h3>Try our tropical Thursdays for tempting and refresing drinks this summer.</h3>
                        </div>
                        <div class="accText">
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. </p>
                            <p>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            </p>
                        </div>
                    </div>
                </div>
                    
                <!-- Accordion #3 -->
                <span class="accTrigger question"><a href="#">Saturday Night Fever</a></span>
                <div class="accContainer">
                    <div class="accContent">
                    	<div class="accImage">
                        	<div class="accImageInner">
                        		<img src="<?php echo THEMEROOT?>/images/promo-3.jpg" alt="" class="scale-with-grid" />
                            </div>
                        </div>
                        <div class="accTitle">
                            <h2>20% OFF</h2>
                            <h3>Try our tropical Thursdays for tempting and refresing drinks this summer.</h3>
                        </div>
                        <div class="accText">
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. </p>
                            <p>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Accordion #4 -->
                <span class="accTrigger question"><a href="#">Young Tuesday</a></span>
                <div class="accContainer">
                    <div class="accContent">
                    	<div class="accImage">
                        	<div class="accImageInner">
                        		<img src="<?php echo THEMEROOT?>/images/promo-4.jpg" alt="" class="scale-with-grid" />
                            </div>
                        </div>
                        <div class="accTitle">
                            <h3>Try our tropical Thursdays for tempting and refresing drinks this summer.</h3>
                        </div>
                        <div class="accText">
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. </p>
                            <p>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            </p>
                        </div>
                    </div>
                </div>
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
				<h1><span>Our</span> Gallery</h1>
                <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
			</div>
            <div class="da-thumbs">
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-11.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-11-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="images/gallery-12.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-12-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-13.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-13-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-14.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-14-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-15.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-15-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-16.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-16-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-17.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-17-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-18.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-18-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-19.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-19-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			<article class="one-fifth column">
                <a class="thumbLink" href="<?php echo THEMEROOT?>/images/gallery-20.jpg" rel="prettyPhoto[gallery1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum.">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="<?php echo THEMEROOT?>/images/gallery-20-thumb.jpg" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>
            
			</div>
     </div></div>
<!--end Gallery--> 
 
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
                    <form action="#" method="post" class="contactForm">
                        <div class="formSecWrap">
                            <input type="text" class="formField" title="Name" id="form_name" name="form_name" value="" />
                            <input type="text" class="formField" title="Email" name="form_email" id="form_email" value="" />
                            <input type="text" class="formField" title="Phone" name="form_phone" id="form_phone" value="" />
                            <input type="text" class="formField" title="Date &amp; Time" name="form_date" id="form_date" value="" />
                        </div>
                        <div class="formSecWrap formSecWrap2">
                            <textarea class="textarea formField" title="Message" name="form_message" id="form_message"></textarea>
                        </div>
                            <input class="button" id="submit-form" type="submit" name="submit" value="Send Message" />
                        <div id="success"></div>
                    </form>
                </div>
            </div>
        </div>
         
           
        <div class="embed-container">      
            	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hotel+Daspalla,+Road+No+37,+Jubilee+Hills,+CBI+Colony,+Hyderabad,+Andhra+Pradesh&amp;sll=17.437845,78.39597&amp;sspn=17.437845,78.39597&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Hotel+Daspalla,+Road+No+37,+Jubilee+Hills,+CBI+Colony,+Hyderabad,+Andhra+Pradesh&amp;z=14&amp;ll=17.437845,78.39597&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Hotel+Daspalla,+Road+No+37,+Jubilee+Hills,+CBI+Colony,+Hyderabad,+Andhra+Pradesh&amp;sll=17.437845,78.39597&amp;sspn=17.437845,78.39597&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Hotel+Daspalla,+Road+No+37,+Jubilee+Hills,+CBI+Colony,+Hyderabad,+Andhra+Pradesh&amp;z=14&amp;ll=17.437845,78.39597" style="color:#d2b55b;text-align:left">View Larger Map</a></small>
        </div>
        
        <div class="container">
        
            <div class="sixteen columns">
                <h1>Contact <span>Us</span></h1>
            </div> 
               
            <div class="four columns marginTop contactDetails offset-by-two">
                    <p class="contactAddress">Over The Moon<br/>8th Floor, Daspalla Hotel<br/>Hyderabad</p>
            </div>
            <div class="four columns marginTop contactDetails">
                    <p class="contactPhone">Phone: (0091) 1234 5678</p>
                    <p class="contactEmail">Email: <a href="#">contact@overthemoon.in</a></p>
                    <p class="contactSkype">Skype: <a href="#">howdy@overthemoon.in</a></p>
            </div>
            <div class="four columns marginTop contactDetails">
                    <p class="contactTime">
                            Mon-Fri: 9:00am &rarr; 5:30pm <br/>
                            Sat: 10:00am &rarr; 2:30pm <br/>
                    </p>
            </div>
            <div class="sixteen columns marginTop">
                <h2>Get the latest news & offers</h2>
                <form action="#" method="post" class="newsForm">
                    <div>
                    <input type="text" class="formField" title="Name" name="cm-name" id="name" />
                    <input type="text" class="formField" title="Email" name="cm-email" id="email" />
                    
                    <input type="submit" value="submit" />
                    </div>
                </form>            
            </div>       
        </div>    
        

     </div>
<!--end contact--> 
    
<!--start parallax 6-->
     <div id="parallax-6" class="parallax fixed" style="background-image: url(<?php echo THEMEROOT?>/images/parallax-6.jpg);">
     </div>
<!--end parallax 6-->
    
<!--start footer-->
    <div id="footer">
    
        <div class="container">
        
            <!-- Social -->
            <div class="sixteen columns">
                <h3 class="sectionTitle">Follow Us On</h3>
                <ul class="socialLinks">
                    <li><a href="#" title="Twitter"><img src="<?php echo THEMEROOT?>/images/social-twitter.png" alt="" /></a></li>
                    <li><a href="#" title="Facebook"><img src="<?php echo THEMEROOT?>/images/social-facebook.png" alt="" /></a></li>
                    <li><a href="#" title="Google Plus"><img src="<?php echo THEMEROOT?>/images/social-google+.png" alt="" /></a></li>
                </ul>
            </div>
            <!-- Social -->
            
            </div>
    </div>
<!--end footer-->

	<script type="text/javascript" src="<?php echo THEMEROOT?>/js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/jquery.mobile-touch-swipe-1.0.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/supersized.3.2.7.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/supersized.shutter.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/twitter.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo THEMEROOT?>/js/contact_form.js"></script>

	<script type="text/javascript">
		//<![CDATA[
        function moveTo(contentArea){
            var goPosition = $(contentArea).offset().top;
            $('html,body').animate({ scrollTop: goPosition}, 'slow');
        }
		//]]>
    </script>
    
    
    <script type="text/javascript" charset="utf-8">
		//<![CDATA[
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:6000});
        });
		//]]>
    </script>


</body>
</html>
