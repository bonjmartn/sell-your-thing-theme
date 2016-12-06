<?php

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

function footer_widgets( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>'
	));
}

function social_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>'
	));
}

function endofpost_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="endofpost">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

// Create Widget Areas for Pages and Blog Posts

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the right of blog posts' );

// Create Social Icons Widget Area for Footer

social_widget( 'Social Icons', 'social-icons', 'Displays social media icons in the footer' );

// Create Widget Areas for Footer

footer_widgets( 'Footer 1', 'footer-1', 'Displays first in the footer' );
footer_widgets( 'Footer 2', 'footer-2', 'Displays second in the footer' );
footer_widgets( 'Footer 3', 'footer-3', 'Displays third in the footer' );
footer_widgets( 'Footer 4', 'footer-4', 'Displays fourth in the footer' );

// Create End of Posts widget area

endofpost_widget( 'End of Posts', 'end-post', 'Displays at the bottom of blog posts' );

?>