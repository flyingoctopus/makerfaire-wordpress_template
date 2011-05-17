<?php
/**
 * @package bluemollusc-flyingoctopus
 * @subpackage maker_faire
 */
?>
	

<!-- Gorgeous design by flyingoctopus - http://flyingoctopus.net -->
<?php /* "It's a bird! It's a plane! It's flyingoctopus!" */ ?>
		<!-- wordpress generated content start -->
		
		<footer>

            <?php wp_footer(); ?>
		
		<!-- wordpress generated content end -->
		
			<hr />
			<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
				<p>
					<?php bloginfo('name'); ?> is proudly powered by
					<a href="http://wordpress.org/">WordPress</a>, a <a href="http://bluemollusc.com">blue mollusc</a>, and a <a href="http://flyingoctopus.net">flyingoctopus!</a>
					<br /><a href="http://feeds.feedburner.com/MakerfaireVancouver">Entries (RSS)</a>
					and <a href="http://feeds.feedburner.com/ MakerfaireVancouverComments">Comments (RSS)</a>.
					<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
				</p>

	    </footer>
	  </div> <!-- end of #container -->
	
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
	  <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>


	  <!-- scripts concatenated and minified via ant build script-->
	  <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
	  <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
	  <!-- end concatenated and minified scripts-->


	  <!--[if lt IE 7 ]>
	    <script src="<?php bloginfo('template_directory'); ?>/js/libs/dd_belatedpng.js"></script>
	    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
	  <![endif]-->

	  <!-- yui profiler and profileviewer - remove for production -->
	  <script src="<?php bloginfo('template_directory'); ?>/js/profiling/yahoo-profiling.min.js"></script>
	  <script src="<?php bloginfo('template_directory'); ?>/js/profiling/config.js"></script>
	  <!-- end profiling code -->


	  <!-- change the UA-XXXXX-X to be your site's ID -->
	  <script>
	   var _gaq = [['_setAccount', 'UA-20976929-1'], ['_trackPageview']];
	   (function(d, t) {
	    var g = d.createElement(t),
	        s = d.getElementsByTagName(t)[0];
	    g.async = true;
	    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g, s);
	   })(document, 'script');
	  </script>

</body>
</html>
