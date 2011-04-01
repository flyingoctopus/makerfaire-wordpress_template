<?php
/**
 * @package bluemollusc-flyingoctopus
 * @subpackage maker_faire
 */
?>
	<div id="sidebar" role="complementary">		
		<ul>
			<div id="sidebarSocialSection">
				<a href="http://vancouvermakerfaire.eventbrite.com?ref=ebtn" target="_blank"  ><img border="0" src="http://www.eventbrite.com/registerbutton?eid=1218156539" alt="Register for Vancouver Mini Maker Faire in Vancouver, Canada  on Eventbrite" /></a>
			</div>
			
			
			
			<div id="sidebarPaymentSection">
				<h4 class="sidebarHeader">Support MF Vancouver:</h4>
				
				<div id="paypalButton">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="YCC57L4X89XV4">
                    <input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
				</div>
				<p>Be a volunteer! <a href="mailto:vancouver@makerfaire.ca?subject=I would love to volunteer at Maker Faire Vancouver!">Email us</a> for more details.</p>
			</div>
			

			
			
    </ul>

    <ul>
		<div id="primary" class="widget-area" role="complementary">
			<ul>

                <?php
                /* When we call the dynamic_sidebar() function, it'll spit out
                 * the widgets for that widget area. If it instead returns false,
                 * then the sidebar simply doesn't exist, so we'll hard-code in
                 * some default sidebar stuff just in case.
                 */
                if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("Best Sidebar Ever") ) : ?>
	
                <?php endif; // end primary widget area ?>
            </ul>
		</div><!-- #primary .widget-area -->
    </ul>

</div>
