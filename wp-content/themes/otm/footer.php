
    <?php wp_footer();?>
   
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