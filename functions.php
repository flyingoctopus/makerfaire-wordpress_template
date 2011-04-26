<?php
/**
 * @package bluemollusc-flyingoctopus
 * @subpackage maker_faire
 */

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
        //'name'          => sprintf(__('Sidebar of Aweeeessoommee!!!'), $i ),
        'name'          => 'Best Sidebar Ever',
        'id'            => 'sidebar$i',
        'description'   => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h4 class="sidebarHeader">',
		'after_title'   => '</h4>',
	));
}

