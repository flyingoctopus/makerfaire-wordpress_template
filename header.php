<?php
/**
 * @package bluemollusc-flyingoctopus
 * @subpackage maker_faire
 */
?>

<!doctype html>


<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<meta name="description" content="Maker Faire Vancouver">
	<meta name="author" content="Emily Smith and Vincent van Haaff">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-1.6.min.js"></script>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon.png">

	<meta name="viewport" content="width=950px, initial-scale=1.0">

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	
	<div id="top-stripe"></div>
	<div id="container">		
		<header>
			<a href="/" id="header-logo-anchor">
				<h1 id="header-logo">MakerFaire Vancouver</h1>
			</a>
			<a href="" id="header-logo-anchor">						
				<h2 id="sub-header">June 23th & 24th at the Pacific National Exhibition</h2>
			</a>
		
		<div id='nav'>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' , 'menu_class'=>'nav') );  ?>
		</div>


		</header>

		<div id="main">
