<?php
/**
 * @package bluemollusc-flyingoctopus
 * @subpackage maker_faire
 */
?>
	<div id="sidebar" role="complementary">		
		<ul>
            <div id="ticketsButton"><a href="http://vancouvermakerfaire.eventbrite.com?ref=ebtn">Buy Tickets</a></div>
            <br />
            <div id="mailinglistButton"><a href="http://vancouvermakerfaire.wufoo.com/forms/mailing-list-sign-up/">Join Mailing List</a></div>
			
			
			<div id="sidebarPaymentSection">
				<!-- <h4 class="sidebarHeader">Support MF Vancouver:</h4> -->
				
				<div id="paypalButton">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="YCC57L4X89XV4">
                    <input type="image" 
                        src="<?php bloginfo('template_directory'); ?>/images/btn_donate_top.png" 
                        onMouseOver="this.src='<?php bloginfo('template_directory'); ?>/images/btn_donate_bottom.png'" 
                        onMouseOut="this.src='<?php bloginfo('template_directory'); ?>/images/btn_donate_top.png'" border="0" name="submit" alt="Donate to your local community using PayPal!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
				</div>
			</div>
<br />
<br />

            <!--<div id="sidebarSponsorsSection">
                <h4 class="sidebarHeader">Sponsors:</h4>
                
                <ul id="sponsorList">
                <?php
                //Modify the category=# below to match your category id #.
                $link = get_bookmarks('category=3&orderby=updated&order=ASC');
                foreach ($link as $bmark) {
                    // if (strlen($bmark->link_image)>2) {
                        //HTML line one ?>
                        <li>
                            <a href="<?=$bmark->link_url;?>" target="_blank"><img src="<?=$bmark->link_image;?>" alt="<?=$bmark->link_name;?>" align="left" /></a><a href="<?=$bmark->link_url;?>" target="_blank">
                        </li>
                <?php
                }
                ?>
                </ul>
            </div> -->
			

			
			
		<div id="primary" class="widget-area" role="complementary">

                <?php
                /* When we call the dynamic_sidebar() function, it'll spit out
                 * the widgets for that widget area. If it instead returns false,
                 * then the sidebar simply doesn't exist, so we'll hard-code in
                 * some default sidebar stuff just in case.
                 */
                if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("Best Sidebar Ever") ) : ?>
	
                <?php endif; // end primary widget area ?>
		</div><!-- #primary .widget-area -->
    </ul> 

</div>
