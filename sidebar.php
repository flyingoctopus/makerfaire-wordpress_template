<?php
/**
 * @package bluemollusc-flyingoctopus
 * @subpackage maker_faire
 */
?>
	<div id="sidebar" role="complementary">		
		<ul>
							<!-- <?php get_search_form(); ?> -->
						</li>
			<div id="sidebarSocialSection">
				<!-- <div style="width:195px; display:block; position: relative; text-align:center; left: 10px;" ><iframe  src="http://www.eventbrite.com/calendar-widget?eid=1218156539" frameborder="0" height="489" width="220" marginheight="0" marginwidth="0" scrolling="no" ></iframe><div style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:195px; text-align:center;" ></div></div> -->
			<h4 class="sidebarHeader">For News &amp; Updates:</h4>
			<li>
				<ul id="sidebar-social-icons">
					<li >
						<a href="http://twitter.com/makerfaire_van" id="social-icon-twitter">You should follow us on Twitter</a>
					</li>
					<li>
						<a href="http://www.facebook.com/#!/group.php?gid=144975278874680" id="social-icon-facebook">You should follow us on Facebook</a>
					</li>
					<li>
						<a href="http://feeds.feedburner.com/MakerfaireVancouver" id="social-icon-rss">You should subscribe to our RSS feed</a>
					</li>
				</ul>
			</li>
			<li><br><br><br><br>
				<a href="http://vancouvermakerfaire.eventbrite.com?ref=ebtn" target="_blank"  ><img border="0" src="http://www.eventbrite.com/registerbutton?eid=1218156539" alt="Register for Vancouver Mini Maker Faire in Vancouver, Canada  on Eventbrite" /></a>
			</li>
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
			
			<div id="sidebarSponsorsSection">
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
			</div>
			
			<div id="sidebarTagsSection">
				<h4 class="sidebarHeader">Tags:</h4>
				<ul id="sidebarTagList">
					<li>
						<a href="" id="makersTag">Makers</a>
					</li>
					<li>
						<a href="" id="eventDetailsTag">Event Details</a>
					</li>
					<li>
						<a href="" id="announcementsTag">Announcements</a>
					</li>
					
				</ul>
			</div>
			
		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<!-- <li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li> -->

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
		<ul role="navigation">
					<!-- <?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?> -->

					<!-- <li><h2>Archives</h2>
						<ul>
						<?php wp_get_archives('type=monthly'); ?>
						</ul>
					</li> -->

					<!-- <?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?> -->
				</ul>
		<!-- <ul>

				<li><h2>Meta</h2>
								<ul>
									<?php wp_register(); ?>
									<li><?php wp_loginout(); ?></li>
									<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
									<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
									<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
									<?php wp_meta(); ?>
								</ul>
								</li>

		</ul> -->
	</div>

