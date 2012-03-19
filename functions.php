<?php
/**
 * @package bluemollusc-flyingoctopus
 * @subpackage maker_faire
 */

automatic_feed_links();

function my_register_sidebars() {
	register_sidebar(array(
		'name'          =>  __( 'Main Sidebar' ),
		'id'            => 'sidebar_1',
		'description'   => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li><br />',
		'before_title'  => '<!--<h4 class="sidebarHeader">',
		'after_title'   => '</h4>-->',
	));
}
add_action( 'widgets_init', 'my_register_sidebars' );


function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );