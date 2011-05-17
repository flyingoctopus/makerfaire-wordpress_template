<?php
/**
 * @package bluemollusc-flyingoctopus
 * @subpackage maker_faire
 */
?>
	<div id="sidebar" role="complementary">		
		<ul>
                
            <div id="countdown"></div>
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


<script>
        function countDown(id, end, cur) {
            this.container = document.getElementById(id);
            this.endDate = new Date(end);
            this.curDate = new Date(cur);


            var context = this;

            var formatResults = function(day, hour, minute, second) {
                if(day < 10) {
                    day = '0' + day;
                }

                if(hour < 10) {
                    hour = '0' + hour;
                }

                if(minute < 10) {
                    minute = '0' + minute;
                }

                if(second < 10) {
                    second = '0' + second;
                }

                var displayString = [
                            '<div class="countdownBlock3"><h2>Countdown Until Maker Faire:</h2></div>',
                            '<div class="countdownBlock"><h3>',day,'</h3><p>days</p></div>',
                            '<div class="countdownBlock2"><h3>:</h3></div>',
                            '<div class="countdownBlock"><h3>',hour,'</h3><p>hours</p></div>',
                            '<div class="countdownBlock2"><h3>:</h3></div>',
                            '<div class="countdownBlock"><h3>',minute,'</h3><p>minutes</p></div>',
                            '<div class="countdownBlock2"><h3>:</h3></div>',
                            '<div class="countdownBlock"><h3>',second,'</h3><p>seconds</p></div>'
                ];

                var displayString2 = [
                            '<div class="countdownInner">',day,' days,',
                            ' ',hour,' hours',
                            ' and ',minute,' minutes left!',
                            '</div>'
                ];
                return displayString.join("");
            }

            var update = function() {
                context.curDate.setSeconds(context.curDate.getSeconds()+1);

                var timediff = (context.endDate-context.curDate)/1000; 

                // Check if timer expired:
                if (timediff<0) {
                    return context.container.innerHTML = formatResults(0,0,0,0);
                }

                var oneMinute=60; //minute unit in seconds
                var oneHour=60*60; //hour unit in seconds
                var oneDay=60*60*24; //day unit in seconds

                var dayfield=Math.floor(timediff/oneDay);
                var hourfield=Math.floor((timediff-dayfield*oneDay)/oneHour);
                var minutefield=Math.floor((timediff-dayfield*oneDay-hourfield*oneHour)/oneMinute);
                var secondfield=Math.floor((timediff-dayfield*oneDay-hourfield*oneHour-minutefield*oneMinute));

                context.container.innerHTML = formatResults(dayfield, hourfield, minutefield, secondfield);

                // Call recursively
                setTimeout(update, 1000);
            };

            // Call the recursive loop
            update();
        }


        countDown("countdown", new Date("June 25, 2011 10:00:00").getTime(), new Date().getTime());
        //console.log( new Date("June 25, 2011 10:00:00").getTime() );

</script>


</div>

