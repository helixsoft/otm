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
		//<![CDATA[
		$(document).ready(function(){
			$("nav").sticky({topSpacing:0});
		});
		//]]>
	</script>
  <?php wp_head();?>
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
                    <li><a href="#junoon">Junoon</a></li>
                    <li><a href="#high">High</a></li>
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
                    <li><a href="#junoon">Junoon</a></li>
                    <li><a href="#high">High</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        </select>
        <!-- End Dropmenu for mobile -->
        
      </div>
  
    </div>
  
  </nav>
<!-- End Navigation --> 